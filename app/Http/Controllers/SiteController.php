<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategories;
use App\Models\BlogComments;
use App\Models\NewsletterForm;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index(){
        $partners = Partner::orderBy("id", "desc")
        ->where('status', 1)
        ->where('deleted', 0)
        ->get();
        return view('home-4')->with(compact('partners')); 
    }
    public function home2(){
        $partners = Partner::orderBy("id", "desc")
        ->where('status', 1)
        ->where('deleted', 0)
        ->get();
        return view('home-2')->with(compact('partners'));
    }
    public function home3(){
        $partners = Partner::orderBy("id", "desc")
        ->where('status', 1)
        ->where('deleted', 0)
        ->get();
        return view('home-3')->with(compact('partners'));
    }
    public function home4(){
        $partners = Partner::orderBy("id", "desc")
        ->where('status', 1)
        ->where('deleted', 0)
        ->get();
        return view('index')->with(compact('partners'));
    }
    
    public function myHealth(){
        return view('health');
    }
    public function conditions(){
        return view('conditions');
    }
    public function treatments(){
        return view('treatments');
    }
    public function blog(Request $request){

        $categories = BlogCategories::orderBy("name", "asc")
        ->where('status', 1)
        ->where('deleted', 0)->get();
        $query = Blog::with('categories')
        ->where('status', 1)
        ->where('deleted', 0);
        if (!empty($request->blogSortFilter) && $request->blogSortFilter == 'oldest') {
            $query->orderBy('id', 'DESC');
        }
        if (!empty($request->blogSortFilter) && $request->blogSortFilter == 'recent') {
            $query->orderBy('id', 'ASC');
        }
        if (isset($request->search) && !empty($request->search)) {
            $query->where('title', 'LIKE', '%' . $request->search . "%");
        }
        if (!empty($request->category)) {
            $query->whereHas('categories', function ($data) use ($request) {
                $data->where('name', $request->category);
            });
        }

        $blogs = $query->simplePaginate(3)->appends(request()->query());
      //  dd( $blogs );
        return view('blogs')->with(compact('categories','blogs'));

    }


    public function fetchBlog(){
        $sortFilter = request()->input('sort_filter');

        // Define the default order
        $orderBy = 'id';
        $orderDirection = 'desc';

        // Adjust order based on sort filter value
        if ($sortFilter === 'oldest') {
            $orderBy = 'created_at';
            $orderDirection = 'asc';
        }

        $blogs = Blog::orderBy($orderBy, $orderDirection)
        ->with('categories')
        ->where('status', 1)
        ->where('deleted', 0)
        ->simplePaginate(3);




        // return view('blogs')->with(compact('blogs', 'categories'));
        return response()->json(['blogs' => $blogs]);
    }

    public function blogDetail($slug){

        $blogs = Blog::with('categories')
        ->where('slug', $slug)
        ->where('status', 1)
        ->where('deleted', 0)
        ->get();

        $limit = 5;
        $related_blogs = Blog::with('categories')
        ->where('status', 1)
        ->where('slug','!=', $slug)
        ->where('deleted', 0)
        ->take($limit)->get();

        $comments = BlogComments::orderBy("id","desc")->with('user')->where('status', 1)->where('deleted', 0)->get();


    // Get the category associated with the current blog

        // dd($related_blogs);
        return view('blog-detail')->with(compact('blogs','related_blogs','comments'));
    }
    public function postComment(Request $request){
        $request->validate([
            'message' => 'required', 
        ]);
        
       
        $userId = Auth::id();

        BlogComments::create([
            'blog_id' => $request->blogid,
            'user_id' =>  $userId,
            'comment' =>  $request->message, 
            'status' =>  0, 
        ]);
        // dd($request->all());
        return redirect()->back()->with('success', 'Comment successfully sent for approval.');
    }
    
    public function becomeMember(){
        return view('become-member');
    }
    public function becomeMemberStore(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'cities' => 'required|string',
            'states' => 'required|string',
            'message' => 'required|string'
        ]);



        NewsletterForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->cities,
            'state' => $request->states,
            'message' => $request->message

        ]);

        return redirect()->back()->with('success', 'Form has been successfully submitted.');
    }
    public function signIn(){
        return view('authentication.login');
    }
    public function signUp(){
        return view('authentication.signup');
    }
    
    public function partnerDetail($slug) {
        $partner = Partner::orderBy('id','desc')
        ->where('slug', $slug)
        ->where('status', 1)
        ->where('deleted', 0)
        ->get()->first();
        //  dd($partner);
        $limit = 5;
        $related_partners = Partner::orderBy('id','desc')
        ->where('status', 1)
        ->where('slug','!=', $slug)
        ->where('deleted', 0)
        ->take($limit)->get();
        return view('partners')->with(compact('partner','related_partners'));
    }
}
