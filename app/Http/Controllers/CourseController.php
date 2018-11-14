<?php

namespace App\Http\Controllers;
use Session;
use App\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = course::all();
        return view('courses.show')->withdata($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses/addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new course;
        $post->cname=$request->cname;
        $post->credit=$request->credit;
        $post->teacher=$request->teacher;
        $post->save();
        Session::flash('success','The course was successfully added');
        return redirect()->route('courses.create');
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
      $row = course::find($id);
          return view('courses.edit',compact('row'));
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
        $post = course::find($id);
        $post->cname=$request->cname;
        $post->credit=$request->credit;
        $post->teacher=$request->teacher;
        $post->save();
        Session::flash('success','The course was successfully updated');
        return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $data = course::find($id);
    $data->delete();
    Session::flash('success','Deleted');
    return redirect()->route('courses.index');
    }
}
