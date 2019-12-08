<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function view()
    {
        $categories = Category::all();
        return view('cat.view')->with(['categories' => $categories]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->id)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:categories|max:255',
            ]);

            if ($validator->fails()) {
                return redirect('cat/create')
                                ->withErrors($validator)
                                ->withInput();
            }

                $cat = new Category;
                $cat->name = $request->input('name');
                $cat->save();

                 return redirect()->back()->with('success', "Tag Created");
        }
        return redirect()->back()->with('error', "Error in creation");

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
        $category = Category::findorFail($id);
        return view('cat.edit')->with(['category' => $category]);
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

            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:categories|max:255',
            ]);

            if ($validator->fails()) {
                return redirect('cat/create')
                                ->withErrors($validator)
                                ->withInput();
            }

            $cat = Category::find($id);
            $cat->name = $request->input('name');
            $cat->save();

        return redirect()->back()->with('success', "Tag Created");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::destroy($id);
        return redirect()->back()->with('success', "Tag Deleted");
    }
}
