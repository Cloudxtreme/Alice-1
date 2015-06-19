<?php

namespace Alice\Http\Controllers;

use Illuminate\Http\Request;

use Alice\Http\Requests;
use Alice\Http\Controllers\Controller;

class HomeController extends Controller {
  public function getIndex(){
    return view('home');
  }
}
