<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apply;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = apply::paginate(10);
         return view('admin.applicant.show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.application');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
         'name'=>'required|max:25',
         'applicant_id'=>'required|min:7|max:9',
         'email'=>'required',
         'phone'=>'required',
         'address'=>'required',
         'job_title'=>'required', 
         'file' => 'required|mimes:pdf|max:2048', 
        ]);
       
       $applies = new apply();

        // if ($request->file('file')) {
        //     # code...
        //     $file = $request->file('file');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('asset/upload/', $filename);
        //     $applies->file =$filename;
        // } else {
        //     return $request;
        //     $applies ->file ='file';
        // }
        if($request->hasFile('file')){      
            $fileNameWithExt = $request->file->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->file->getClientOriginalExtension();
            $filenameToStore = $fileName.'_'.time().'.'.$Extension; 
            $path= $request->file->storeAs('cvs', $filenameToStore, 'public');      
            $applies->file = $filenameToStore;
          }
        $applies->name = $request->input('name');
        $applies->applicant_id = $request->input('applicant_id');
        $applies->email = $request->input('email');
        $applies->phone = $request->input('phone');
        $applies->address =$request->input('address');
        $applies->job_title = $request->input('job_title');
        $applies->save();

        return redirect()->route('index');

        // $data = new apply();

        // if ($request->file('file')) {
        //     # code...
        //     $file = $request->file('file');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('asset/upload/', $filename);
        //     $data->file =$filename;
        // } else {
        //     return $request;
        //     $data ->file ='file';
        // }

        // $data->name = $request->input('name');
        // $data->applicant_id = $request->input('applicant_id');
        // $data->email = $request->input('email');
        // $data->phone = $request->input('phone');
        // $data->address = $request->input('address');
        // $data->job_title = $request->input('job_title');
        // $data-> save();

        // return redirect()->route('apply.index');
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

    public function download($file)
    {
        return response()->download('asset/upload/'.$file);
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
        apply :: where('id',$id)->delete();
        return  redirect()->back();
    }
}
