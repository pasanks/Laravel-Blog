<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function getIndex(){
       return view('pages.welcome');
   }

    public function getAbout(){
            $first = 'Pasan';
            $last = 'Kavinga';
            $fullname = $first." ".$last;
            $email = 'pasankavinga@gmail.com';

        $data = [];
        $data['full']=$fullname;
        $data['email']=$email;
        return view('pages.about')->withData($data);
        //return view('pages.about')->withFullname($fullname)->withEmail($email); pass multiple values with

        //return view('pages.about')->with("full",$fullname);

    }
    public function getContact(){
        return view('pages.contact');
    }





}
