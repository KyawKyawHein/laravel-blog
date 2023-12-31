<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view("blogs",[
            "blogs" => $this->getBlogs(),
            "categories" => Category::all(),
        ]);
    }
    public function show(Blog $blog){
        return view("blog",[
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get(),
        ]);
     }

    protected function getBlogs(){
        return Blog::latest()->filter(request(["search"]))->get();
        // $blogs->when(request("search"),function($query,$search){
        //     $query->where("title","LIKE","%".$search."%")
        //           ->orWhere("body","LIKE","%".$search."%");
        // });
        // if(request("search")){
        //     $blogs= $blogs->where("title","LIKE","%".request("search")."%")
        //                   ->orWhere("intro","LIKE","%".request("search")."%");
        // }
        // return $blogs->get();
    }
}
