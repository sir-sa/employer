<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Job;
use App\Tag;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(15);
        return view('admin.job_category.list',compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job_category.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'image'=> 'required',
        ]);

        $categories = new Category();

        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('asset/img/', $filename);
            $categories->image =$filename;
        } else {
            return $request;
            $categories ->image ='image';
        }
        $categories->name = $request->input('name');
        $categories->save();

        return redirect()->route('categories.index');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = Job::findOrFail($id);
        $categories = Category::findOrFail($id);
        $tags = Tag::findOrFail($id);
        return view("admin.jobs.show", compact('jobs', 'categories', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return redirect()->route('categories.index');
    }
}
