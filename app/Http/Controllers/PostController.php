<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function view()
    {
        $posts = Post::all();
        return view('posts.view')->with(['posts' => $posts]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (Auth::user()->id) {
            //Handle file upload
            if ($request->hasFile('cover_image')) {
                // Get filename with extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                //upload image
                $path = $request->file('cover_image')->StoreAs('public/cover_image', $filenameToStore);
            } else {
                $filenameToStore = 'noimage.jpg';
            }


            // if ($validator->fails()) {
            //     return redirect('posts/create')
            //                     ->withErrors($validator)
            //                     ->withInput();
            // }

            //Create Post
              //Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $filenameToStore;

        $post->save();


            return redirect()->back()->with('success', "Post Created");
        // }
        // return redirect()->back()->with('error', "Error in creation");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorFail($id);
        $categories = Category::all();
        return view('posts.edit')->with(['post' => $post, 'categories' => $categories]);
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
        if (Auth::user()->id) {

            //Handle file upload
            if ($request->hasFile('cover_image')) {
                // Get filename with extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                //upload image
                $path = $request->file('cover_image')->StoreAs('public/cover_image', $filenameToStore);
            } else {
                $filenameToStore = 'noimage.jpg';
            }


             // Edit post
             $post = Post::find($id);
             $post->title = $request->input('title');
             $post->body = $request->input('body');
             $post->category_id = $request->input('category_id');
             $post->user_id = auth()->user()->id;
             if ($request->hasFile('cover_image')) {
                 $post->cover_image = $filenameToStore;
             }

             $post->save();

            return redirect()->back()->with('success', "Post Updated");
        }
        return redirect()->back()->with('error', "Error in updating");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::destroy($id);
        return redirect()->back()->with('success', "Post Deleted");
    }
}
