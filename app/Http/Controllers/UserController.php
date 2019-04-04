<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class UserController extends Controller
{
    public function index(){

      $data['posts'] = Post::where('status', 1)->orderBy('id', 'DESC')->get();
      return view('frontEnd.home', $data);
    }

    public function mess(){
      return "mmmmm";
    }
}
