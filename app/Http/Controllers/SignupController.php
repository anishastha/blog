<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use Session;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$students = students::all();
return view('pages/showallstudent')->withstudents($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('pages/signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array( // validation part
        'fname'=>'required|max:255|alpha',
        'lname'=>'required|max:255|alpha',
        'email'=>'required|max:255|email',
        'password'=>'required|min:8',
        'contact'=>'required|numeric',
        'country'=>'required'
      ));
//insertion to database
        $post= new students; ///creatng object of model class
        $post->fname =$request->fname;
          $post->lname =$request->lname;
          $post->email = $request->email;
          $post->password= $request->password;
          $post->contact=$request->contact;
          $post->country=$request->country;
          $post->save();
          Session::flash('success','the user was successfully added');
          return redirect()->route('signup.show',$post->id);
       }

      //    return redirect()->route('signup.show',$post->id);


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = students::find($id);
      return view('pages/showstudent')->withdata($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = students::find($id);
        return view('pages/editstudent',compact('row'));
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
      $post = students::find($id);

      $post->fname =$request->fname;
        $post->lname =$request->lname;
        $post->email = $request->email;
      //  $post->password= $request->password;
        $post->contact=$request->contact;
        $post->country=$request->country;
        $post->save();
        Session::flash('success','successfully updated');
        return redirect()->route('signup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $student = students::find($id);
      $student->delete();
        Session::flash('success','successfully deleted');
      return redirect()->route('signup.index');
    }
}
