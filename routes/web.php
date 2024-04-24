<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
Route::match(['GET', 'POST'], '/', [SiteController::class, 'index'])->name('site');
Route::match(['GET', 'POST'], '/home-2', [SiteController::class, 'home2'])->name('home2');
Route::match(['GET', 'POST'], '/home-3', [SiteController::class, 'home3'])->name('home3');
Route::match(['GET', 'POST'], '/home-4', [SiteController::class, 'home4'])->name('home4');
Route::match(['GET', 'POST'], '/my-health', [SiteController::class, 'myHealth'])->name('myHealth');
Route::match(['GET', 'POST'], '/conditions', [SiteController::class, 'conditions'])->name('conditions');
Route::match(['GET', 'POST'], '/treatments', [SiteController::class, 'treatments'])->name('treatments');
Route::match(['GET', 'POST'], '/blog', [SiteController::class, 'blog'])->name('blog');
Route::match(['GET', 'POST'], '/fetch-blog', [SiteController::class, 'fetchBlog'])->name('fetchBlog');
// Route::match(['GET', 'POST'], '/fetch-blog-category', [SiteController::class, 'fetchBlogCategories'])->name('fetchBlogCategories');

Route::match(['GET', 'POST'], '/blog/{slug}', [SiteController::class, 'blogDetail'])->name('blogDetail');
Route::match(['GET', 'POST'], '/become-member', [SiteController::class, 'becomeMember'])->name('becomeMember');
Route::match(['GET', 'POST'], '/become-member-store', [SiteController::class, 'becomeMemberStore'])->name('becomeMemberStore');

Route::match(['GET', 'POST'], '/sign-in', [SiteController::class, 'signIn'])->name('signIn');
Route::match(['GET', 'POST'], '/sign-up', [SiteController::class, 'signUp'])->name('signUp');

Route::match(['GET', 'POST'], '/partner/{slug}', [SiteController::class, 'partnerDetail'])->name('partnerDetail');

Route::match(['GET', 'POST'], '/comments', [SiteController::class, 'postComment'])->name('postComment');
 
  
// Admin 
Route::match(['GET', 'POST'], '/admin', [AdminController::class, 'index'])->name('login');

Route::match(['GET', 'POST'], '/logout', [AdminController::class, 'logout'])->name('logout');

// Route::get('/portfolio-videos/{category?}',  [BlogController::class, 'getVideosByCategory'] )->name('getVideosByCategory');
  
Route::prefix('dashboard')->group(function () {
    // Routes inside this group will have the prefix '/admin'
    Route::match(['GET', 'POST'], '/', [AdminController::class, 'dashboard'])->name('dashboard'); 
    
    // user
    Route::get('/user-list', [AdminController::class, 'userList'])->name('userList');
    Route::get('/create-user', [AdminController::class, 'createUser'])->name('createUser');
    Route::post('/create-user-store', [AdminController::class, 'createUserStore'])->name('createUserStore'); 
    
    Route::get('/update-user/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
    Route::post('/update-user-store', [AdminController::class, 'updateUserStore'])->name('updateUserStore');
    Route::post('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
    
    
    //members 
    Route::get('/member-form-list', [AdminController::class, 'memberFormList'])->name('memberFormList');
    Route::get('/view-member/{id}', [AdminController::class, 'memberFormView'])->name('memberFormView');
    Route::post('/delete-member/{id}', [AdminController::class, 'memberFormDelete'])->name('memberFormDelete');


    // blog
    Route::get('/blog-list', [AdminController::class, 'blogList'])->name('blogList');
    Route::get('/create-blog', [AdminController::class, 'createBlog'])->name('createBlog');
    Route::post('/create-blog-store', [AdminController::class, 'createBlogStore'])->name('createBlogStore');
    Route::get('/update-blog/{id}', [AdminController::class, 'updateBlog'])->name('updateBlog');
    Route::post('/update-blog-store', [AdminController::class, 'updateBlogStore'])->name('updateBlogStore');
    Route::post('/delete-blog/{id}', [AdminController::class, 'deleteBlog'])->name('deleteBlog');


    //blog comments 
    Route::get('/blog-comment-list', [AdminController::class, 'blogCommentList'])->name('blogCommentList'); 
    Route::post('/blog-comment-delete/{id}', [AdminController::class, 'blogCommentDelete'])->name('blogCommentDelete');
    Route::post('/blog-comment-status/{id}', [AdminController::class, 'blogCommentStatusUpdate'])->name('blogCommentStatusUpdate');
    
    // partner
    Route::get('/partner-list', [AdminController::class, 'partnerList'])->name('partnerList');
    Route::get('/create-partner', [AdminController::class, 'createPartner'])->name('createPartner');
    Route::post('/create-partner-store', [AdminController::class, 'createPartnerStore'])->name('createPartnerStore');
    Route::get('/update-partner/{id}', [AdminController::class, 'updatePartner'])->name('updatePartner');
    Route::post('/update-partner-store', [AdminController::class, 'updatePartnerStore'])->name('updatePartnerStore');
    Route::post('/delete-partner/{id}', [AdminController::class, 'deletePartner'])->name('deletePartner');
    
    Route::get('/category-list', [AdminController::class, 'categoryList'])->name('categoryList');
    Route::get('/create-blog-category', [AdminController::class, 'createBlogCategory'])->name('createBlogCategory');
    Route::post('/create-blog-category-store', [AdminController::class, 'createBlogCategoryStore'])->name('createBlogCategoryStore');
    Route::get('/update-blog-category/{id}', [AdminController::class, 'updateBlogCategory'])->name('updateBlogCategory');
    Route::post('/update-blog-category-store', [AdminController::class, 'updateBlogCategoryStore'])->name('updateBlogCategoryStore');

});

Auth::routes();
