<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Blog;
use App\Models\BlogCategories;
use App\Models\BlogCategoriesBridge;
use App\Models\BlogComments;
use App\Models\NewsletterForm;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            // User is already logged in, redirect to the admin dashboard
            return redirect()->route('dashboard');
        }

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication successful, redirect to the admin dashboard
                return redirect()->route('dashboard');
            } else {
                // Authentication failed, display the login form with an error message
                return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
            }
        }

        // User is not logged in, display the login form
        return view('login');
    }
    public function createUserStore(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('dashboard');
    }
    public function userList()
    {
        $users = User::orderBy('id', 'desc')->where('deleted',0)->get();

        return view('admin.user_list')->with(compact('users'));
    }
    public function createUser()
    {

        return view('admin.create-user');
    }
    public function updateUser($id)
    {
        $user = User::orderBy('id', 'desc')->where('id', $id)->first();
        return view('admin.user-update')->with(compact('user'));
    }
    public function updateUserStore(Request $request)
    {
         
         
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255' 
        ]);

        

        $user = User::findOrFail($request->userid);
        $user->name = $request->name; 
        $user->email = $request->email;
          
        $user->save();
        return redirect()->back()->withSuccess('User updated successfully.');
        
        
    }
    public function deleteUser($id)
    {

        $user = User::findOrFail($id); // Assuming you have a hidden field 'blog_id' in your form to store the ID of the blog to be updated

        $user->deleted = 1;
        $user->save();


        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function memberFormList(){
        
        $members = NewsletterForm::orderBy('id', 'desc')->where('deleted',0)->get();

        return view('admin.members')->with(compact('members'));
    }
    public function memberFormView($id){
      
        $member = NewsletterForm::findOrFail($id); 
        
       
        return view('admin.member_view')->with(compact('member'));
    }
 
    public function memberFormDelete($id){
        $member = NewsletterForm::findOrFail($id); 

        $member->deleted = 1;
        $member->save(); 

        return redirect()->back()->with('success', 'Member Inquiry deleted successfully.');
    }
    
    public function blogCommentList(){
        
        $comments = BlogComments::orderBy('id', 'desc')->where('deleted',0)->get();

        return view('admin.comments')->with(compact('comments'));
    }
    
    public function blogCommentDelete($id){
        $comment = BlogComments::findOrFail($id); 

        $comment->deleted = 1;
        $comment->save(); 

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
    public function blogCommentStatusUpdate(Request $request, $id){
        $comment = BlogComments::findOrFail($id);
    
        $comment->status = $request->status; // Assuming you are sending 'status' via AJAX.
        $comment->save();
    
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Comment status updated successfully.']);
        } else {
            return redirect()->back()->with('success', 'Comment Status updated successfully.');
        }

        
    }
    
    public function blogList()
    {
        $blogs = Blog::orderBy('id', 'desc')
            ->with('categories')
            ->where('status', 1)
            ->where('deleted', 0)
            ->get();

        return view('admin.blog_list')->with(compact('blogs'));
    }


    public function createBlog()
    {

        $categories = BlogCategories::orderBy('id', 'desc')->where('status', 1)->where('deleted', 0)->get()->toArray();
        return view('admin.blog')->with(compact('categories'));
    }

    public function createBlogStore(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048', // Max size 2MB
            'short_desc' => 'required|string', // Max size 20MB
            'long_desc' => 'required|string',
            'category' => 'required|array|max:255',
        ]);


        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $profile =  Str::random(3)  . 'blog-image.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('uploads/blog-images'), $profile);
            $attachmentPaths[] = $profile;
        }
        // dd($request->category);
        $userId = Auth::id();
        $slug = Str::slug($request->title);
        // dd($slug);
        $blog = Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $profile,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
            // 'category' => $request->category
        ]);

        // Get the ID of the last inserted record
        $lastInsertedId = $blog->id;
        foreach ($request->category   as $key => $cat_id) {
            BlogCategoriesBridge::create([
                'cat_id' => $cat_id,
                'blog_id' => $lastInsertedId,
                'created_by' => $userId,
            ]);
        }



        return redirect()->back()->with('success', 'Blog added successfully.');
    }
    public function updateBlog($id)
    {

        $blog = Blog::with('categories')->orderBy('id', 'desc')->where('status', 1)->where('deleted', 0)->where('id', $id)->first();
        // dd($blog);
        $categories = BlogCategories::orderBy('id', 'desc')->where('status', 1)->where('deleted', 0)->get()->toArray();
        return view('admin.blog-update')->with(compact('categories', 'blog'));
    }

    public function updateBlogStore(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'short_desc' => 'required|string', // Max size 20MB
            'long_desc' => 'required|string',
            'category' => 'required|array|max:255',
        ]);


       
        //  else {
        //     $profile = Blog::select('image')->where('id', $request->blog_id)->first();
        // }

        $slug = Str::slug($request->title);

        $blog = Blog::findOrFail($request->blog_id);
        $blog->title = $request->title;
        $blog->slug = $slug;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $profile =  Str::random(3)  . 'blog-image.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('uploads/blog-images'), $profile);
            $attachmentPaths[] = $profile;
            $blog->image = $profile;
        }
        $blog->save();
        //
        // $blog->short_desc = $request->short_desc;
        //

        // Retrieve the updated blog record


        // Update blog categories
        $blog->categories()->sync($request->category);



        return redirect()->back()->with('success', 'Blog updated successfully.');
    }
    public function deleteBlog($id)
    {

        $blog = Blog::findOrFail($id); // Assuming you have a hidden field 'blog_id' in your form to store the ID of the blog to be updated

        $blog->deleted = 1;
        $blog->save();


        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }

    
    public function categoryList()
    {
        $categories = BlogCategories::orderBy('id', 'desc')
            ->where('status', 1)
            ->where('deleted', 0)
            ->get();

        return view('admin.blog_category_list')->with(compact('categories'));
    }
    public function createBlogCategory()
    {

        return view('admin.blog_categories');
    }


    public function createBlogCategoryStore(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
        ]);
        $slug = Str::slug($request->category);
        $userId = Auth::id();
        // Create a new BlogCategory instance
        $category = BlogCategories::create([
            'name' => $request->category,
            'slug' => $slug,
            'created_by' => $userId,

        ]);

        // Optionally, you can return a response or redirect to a specific route
        return redirect()->back()->with('success', 'Blog Category created successfully.');
    }
    public function updateBlogCategory($id)
    {
        $category = BlogCategories::orderBy('id', 'desc')->where('status', 1)->where('deleted', 0)->where('id', $id)->first();
        return view('admin.blog_categories_update')->with(compact('category'));
    }


    public function updateBlogCategoryStore(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
        ]);

        $slug = Str::slug($request->category);

        $category = BlogCategories::findOrFail($request->cat_id);
        $category->name = $request->category; 
        $category->slug = $slug;  
        $category->save();
        // Optionally, you can return a response or redirect to a specific route
        return redirect()->back()->with('success', 'Blog Category updated successfully.');
    }
    
    
    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }

    public function dashboard()
    {
        return view('admin.index');
    }
    public function createPartner()
    {
        return view('admin.partner');
    }
    public function partnerList()
    {
        $partners = Partner::orderBy('id', 'desc')
            ->where('status', 1)
            ->where('deleted', 0)
            ->get();

        return view('admin.partner_list')->with(compact('partners'));
    }
    public function createPartnerStore(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048', // Max size 2MB
            // 'desc' => 'required|string',
        ]);

        
        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $profile =  Str::random(3)  . 'partner-image.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('uploads/partner-images'), $profile);
            $attachmentPaths[] = $profile;
        }

        $slug = Str::slug($request->title);

       // Prepare data for partner creation
        $partnerData = [
            'title' => $request->title,
            'slug' => $slug,
            'image' => isset($profile) ? $profile : null,
            // 'desc' => $request->desc, // Uncomment if description is included
        ];

        // Add description if provided in the request
        if ($request->has('desc')) {
            $partnerData['desc'] = $request->desc;
        }

        // Create partner record in the database
        Partner::create($partnerData);



        return redirect()->back()->with('success', 'Partner added successfully.');
    }

    
    public function updatePartner($id)
    {
        $partner = Partner::orderBy('id', 'desc')->where('status', 1)->where('deleted', 0)->where('id', $id)->first();
        return view('admin.partner-update')->with(compact('partner'));
    }
    public function updatePartnerStore(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
             
            // 'desc' => 'required|string',
        ]);
 
        $slug = Str::slug($request->title);
  
        $partner = Partner::findOrFail($request->partnerid);
        $partner->title = $request->title; 
        $partner->slug = $slug;
        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $profile =  Str::random(3)  . 'partner-image.' . $attachment->getClientOriginalExtension();
            $attachment->move(public_path('uploads/partner-images'), $profile);
            $attachmentPaths[] = $profile;
            $partner->image = $profile;
        }
        if ($request->has('desc')) {
            $partner->desc = $request->desc;
        }
        // $partner->desc = $request->desc;
          
        $partner->save();

        return redirect()->back()->with('success', 'Partner added successfully.');
    }

    public function deletePartner($id)
    {

        $partner = Partner::findOrFail($id); // Assuming you have a hidden field 'blog_id' in your form to store the ID of the blog to be updated

        $partner->deleted = 1;
        $partner->save();


        return redirect()->back()->with('success', 'Partner deleted successfully.');
    }
}
