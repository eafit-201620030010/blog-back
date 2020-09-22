<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $blogs = Blog::get();
     echo json_encode($blogs);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->image = $request->input('image');
        $blog->body = $request->input('body');
        $blog->type = $request->input('type');
        $blog->date = $request->input('date');
        $blog->save();
        echo $blog;
    }
 


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog_id)
    {
        $blog = Blog::find($blog_id);
        $blog->delete();
    }
}
