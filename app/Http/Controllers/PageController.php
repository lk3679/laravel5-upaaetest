<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $title="Welcome to Laravel!";
        return view("layouts.index")->with("title",$title);
    }

    public function about(){
        $title="about";
        return view("layouts.about")->with("title",$title);
    }

    public function service(){
        $data=array(
            "title"=>"Services",
            "services"=>["programming","web-design","SEO"]);
           
        
        return view("layouts.service")->with($data);
    }
}
