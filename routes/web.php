<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [BlogController::class,"index"]);

Route::get("/blogs/{blog:slug}",[BlogController::class,'show']);

Route::get("/categories/{category:slug}",function (Category $category){
    return view("blogs",[
        "blogs" => $category->blogs,
        "categories" => Category::all(),
        "currentCategory" => $category,
    ]);
});

Route::get("/authors/{user:name}",function(User $user){
    return view("blogs",[
        'blogs' => $user->blogs,
        "categories" => Category::all(),
    ]);
});
