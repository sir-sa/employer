<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Application::paginate(10);
         return view('admin.applicant.show', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.application');
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
        $this->validate($request, [
         'name'=>'required',
         'applicant_id'=>'required',
         'email'=>'required',
         'phone'=>'required',
         'address'=>'required',
         'job_title'=>'required',
         'file'=>'required',
        ]);

        $data = new Application();

        if ($request->file('file')) {
            # code...
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('asset/upload/', $filename);
            $data->file =$filename;
        } else {
            return $request;
            $data ->file ='file';
        }

        $data->name = $request->input('name');
        $data->applicant_id = $request->input('applicant_id');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->job_title = $request->input('job_title');
        $data-> save();

        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Application::findOrFail($id);
        return view('admin.applicant.details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($file)
    {
        return response()->download('asset/upload/'.$file);
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
        Application :: where('id',$id)->delete();
        return  redirect()->back();
    }
}
