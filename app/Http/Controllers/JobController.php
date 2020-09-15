<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Job;
use App\Tag;
use App\Type;
use DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::paginate(10);
        $categories = Category::all();
        return view('admin.jobs.index', compact('jobs', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        $types = Type::pluck('name','id');
        $tags = Tag::pluck('name','id');
        return view('admin.jobs.create', compact('categories', 'types', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
         'category_id'=>'required',
         'tag_id'=>'required',
         'type_id'=>'required',
         'job_title'=>'required',
         'job_description'=>'required',
         'location'=>'required',
         'logo'=>'required',
        ]);

        $jobs = new Job();

        if ($request->file('logo')) {
            # code...
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/assets/img/', $filename);
            $jobs->logo =$filename;
        } else {
            return $request;
            $jobs ->logo ='logo';
        }

        $jobs->category_id = $request->input('category_id');
        $jobs->tag_id = $request->input('tag_id');
        $jobs->type_id = $request->input('type_id');
        $jobs->job_title = $request->input('job_title');
        $jobs->job_description = $request->input('job_description');
        $jobs->location = $request->input('location');
        $jobs-> save();

        return redirect()->route('jobs.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $jobs = DB::table('jobs')->where('id', $id)->get();
        $job = Job::findOrFail($id);
        $categories = DB::table('categories')->where('id', $id)->get();
        $tags = DB::table('tags')->where('id', $id)->get();
        return view("admin.jobs.show", compact('job', 'categories', 'tags'));
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
        //
    }
}
