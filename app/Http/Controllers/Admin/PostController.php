<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostModel;
use App\Models\PostModel2;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = PostModel::all();
        return view('admin.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        toastr()->success('Ekleme Başarılı');
        */
        $post = new PostModel2();
        $post->Title = $request->Title;
        $post->Keywords = $request->Keywords;
        $post->slug = Str::slug($request->Title);
        $post->CategoryID = $request->CategoryID;
        $post->Description = $request->Description;
        $post->	Created_Time = now();
        $post->save();
        return redirect()->route('posts.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = PostModel2::find($id);
        $categories = Category::all();
        return view('admin.posts.update', compact('post', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = PostModel2::findOrFail($id);
        $post->Title = $request->Title;
        $post->Keywords = $request->Keywords;
        $post->Slug = Str::slug($request->Title);
        $post->CategoryID = $request->CategoryID;
        $post->Description = $request->Description;
        $post->	Created_Time = now();
        $post->save();
        return redirect()->route('posts.index');
        //return dd($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostModel2::where('Id', $id)->delete();
        return redirect()->route('posts.index'); 
    }
}
