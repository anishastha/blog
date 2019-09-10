<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Session;
use Image;
use Storage;
use Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = posts::all();
        return view('posts.index')->withdata($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(!Gate::allows('isteacher'))
      {
        abort(404,"sorry you cannot view this page");
      }


      return view('posts.create');  //
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
        'title'=>'required|max:255',
        'description'=>'required',
        'photo'=>'sometimes|image'
      ));
//insertion to database
        $post= new Posts;
        $post->title =$request->title;
          $post->description =$request->description;
          if($request->hasFile('photo'))
          {
            $image= $request->file('photo');
            $filename= time(). "." .$image->getClientOriginalExtension();
            $location= public_path('images/'.$filename);
         Image::make($image)->resize(800,400)->save($location);
            $post->photo= $filename;
          }
          if($request->hasFile('files'))
          {
            $files= $request->file('files');
            $filename= time(). "." .$files->getClientOriginalExtension();
            $location= public_path('files/');
      //   Image::make($image)->resize(800,400)->save($location);
      $files->move($location,$filename);
            $post->files= $filename;
          }
          $post->user_id = auth()->user()->id;
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
        return view('posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $row = posts::find($id);
        return view('posts.edit',compact('row'));

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
      $post=posts::find($id);
      $post->title =$request->title;
        $post->description =$request->description;

        if($request->hasFile('photo'))
        {
          $image= $request->file('photo');
          $filename= time(). "." .$image->getClientOriginalExtension();
          $location= public_path('images/'.$filename);
       Image::make($image)->resize(800,400)->save($location);
         $oldfile=$post->photo;
          $post->photo= $filename;
        Storage::delete($oldfile);
        }


        $post->save();


      return redirect()->route('posts.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $post=Posts::find($id);
      Storage::delete($post->photo);
      $post->delete();

      return redirect()-> route('posts.index');
    }
}
