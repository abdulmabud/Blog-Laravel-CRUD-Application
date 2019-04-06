<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function __construct(){
        return $this->middleware('auth');
    }
    public function index(){

        
        $data['categories'] = Category::all();
        
        return view('Admin.Category.indexCategory', $data);
    }

    public function create(){

            return view('Admin.Category.createCategory');
      
    }

    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category Created Successfully');
    }

    public function show(){
        
    }
    public function edit(){
        
    }
    public function update(){
        
    }

    public function delete(){
        
    }

    public function admin(){
        return view('Admin.dashboard');
    }
}
