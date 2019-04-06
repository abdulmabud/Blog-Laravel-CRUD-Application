<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use Auth;

class PostController extends Controller
{

    public function __construct(){
      return $this->middleware('auth');
    }
    public function index(){

      $data['posts'] = Post::all();
     
        return view('Admin.indexPost', $data);
    }
    public function create(){
      $data['categories'] = Category::all();


       return view('Admin.createPost', $data);
    }
    public function store(Request $request){

      $postObj = new Post;
      
      $user_id = Auth::id();

      $request->validate([

        'title' => 'required',
        'author' => 'required',
        'description' => 'required',
        'status' => 'required',
        'category_id' => 'required',

      ]);

      if ($request->hasFile('input_image')) {

        $image = $request->file('input_image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $postObj->imgName = $name;


      }
      else {
        $postObj->imgName = "No Image";
      }

      $postObj->title = $request->title;
      $postObj->author = $request->author;
      $postObj->description = $request->description;
      $postObj->category_id = $request->category_id;
      $postObj->user_id =  $user_id;
      $postObj->status = $request->status;
      

      $postObj->save();

      return redirect()->route('posts.index')->with('success', 'Post Created');

      
    }

    public function show($id){
      
      $data['post'] = Post::where('id', $id)->first();
      
      return view('Admin.showPost', $data);
    }

    public function edit($id){

      $data['post'] = Post::where('id', $id)->first();
      $data['categories'] = Category::all();

      return view('Admin.editPost', $data);

    }

    public function update($id, Request $request){

      $postObj = Post::find($id);
      
      $user_id = Auth::id();

      $request->validate([

        'title' => 'required',
        'author' => 'required',
        'description' => 'required',
        'status' => 'required',
        'category_id' => 'required',

      ]);


      if ($request->hasFile('input_image')) {

      

        $image = $request->file('input_image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $postObj->imgName = $name;


      }
      else {
       
        $postObj->imgName = "No Image";
      }

      $postObj->title = $request->title;
      $postObj->author = $request->author;
      $postObj->description = $request->description;
      $postObj->category_id = $request->category_id;
      $postObj->user_id =  $user_id;
      $postObj->status = $request->status;
      

      $postObj->save();

      return redirect()->route('posts.index')->with('success', 'Post Updated successfully');

    }

    public function delete($id){
      $post = Post::find($id);
      $post->delete();
      return redirect()->route('posts.index')->with('success', 'Post Delete successfully');
    }
}
