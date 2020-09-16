<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Tag;
use App\Type;
use App\Job;
use DB;

use App\Application;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(3);
        return view("pages.index", compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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



    /* Routes for the user pages*/

    public function about()
    {
        return view("pages.about");
        //
    }

    public function blog()
    {
        return view("pages.blog");
        //
    }
   
    public function flaq()
    {
        return view("pages.flaq");
        //
    }
   
    
      
    


    public function category()
    {
        $categories = Category::all();
        return view("pages.category", compact('categories'));
        //
    }


    public function client_apply()
    {
        $applications = Application::paginate(4);
        return view("pages.client_applicants", compact('applications'));
        //
    }


    public function client_dash()
    {
        $apply = DB::table('applications')->count();
        
        return view("pages.client_dashboard",compact('apply'));
        //
    }




    public function client_register()
    {
        return view("pages.client_register");
        //
    }

    public function contacts()
    {
        return view("pages.contact");
        //
    }

    public function detail()
    {
       
       return view("pages.detail");
        //
    }
    public function package()
    {
        return view("pages.packages");
        //
    }

    public function post()
    {
        return view("pages.post");
        //
    }

    public function testimonial()
    {
        return view("pages.testimonials");
        //
    }

    public function text()
    {
        return view("pages.text");
        //
    }


}
