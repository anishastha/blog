<?php
namespace App\Http\controllers;
class PagesController extends Controller
{
  public function getIndex()
  {
      return view('pages/welcome');

  }
  public function getcontact()
  {
      return view('pages/contact');
  }
  public function getabout()
  {
      $first = "anisha";
      $last = "shrestha";
      $nam = $first." ".$last;
      $data = [];
      $data['fullname']=$nam;
        $data['email']= "a@gmail.com";

      return view('pages.about')->withData($data);

  }


}



?>
