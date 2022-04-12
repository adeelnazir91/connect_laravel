<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    function index(){
        return view('pages.index');
    }

    function partner(){
        
        $someJSON = file_get_contents(storage_path()."/partnerData.json");
        $someArray = json_decode($someJSON, true);
        return view('pages/partner', compact('someArray'));
    }


    function aboutus(){
        $title = "My about us page";
        return view('pages/about', compact('title'));
       // return $title;
    }

    function users($id){
        $name = "My name is adeel" .$id;
        return view('pages/users', compact('name'));
       // return $title;
    }
}
