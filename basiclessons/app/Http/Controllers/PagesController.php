<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
       // return "$id";
        return view("pages.home");
    }

    public function apropos(){
        return view("pages.apropos");
    }

    public function services(){
        return view("pages.services");
    }
}
