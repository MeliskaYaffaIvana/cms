<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Welcome";
    }
    public function about(){
        echo "Meliska Yaffa Ivana - 1941720020";
    }
    public function articles($id){
        echo " Articles Pages with ID ${id}";
}
}
