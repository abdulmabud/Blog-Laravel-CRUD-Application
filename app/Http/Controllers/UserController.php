<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class UserController extends Controller
{
    public function index(){

      $data['posts'] = Post::where('status', 1)->orderBy('id', 'DESC')->get();
      
      return view('frontEnd.home', $data);
    }

    public function category($id){

      $category = Category::find($id);

      $data['posts'] = $category->posts;
      
      return view('frontEnd.home', $data);
    }
    public function mess(){
    
     $category = Category::find(2);
      return $category->posts;
    }
}
