<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
      return view('page.trangchu');
    }
    public function getTemplates(){
      return view('page.templates');
    }
    public function getAddTemp(){
      return view('page.addtemp');
    }
}
