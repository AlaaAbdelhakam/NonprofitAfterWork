<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    

    public function index(){
        $categories = Category::all();
        return view('categories.index')->with('categories',$categories); // table of categories
    }
    public function create(){
        return view('categories.create');
    }

    public function insert(Request $request){
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('category.index');
    }
    public function trash($id){
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('category.index');
    }
    public function trashed(){
        $categories = Category::onlyTrashed()->get();
        return view('categories.trashed')->with('categories',$categories); // show only trashed categories
    }
    public function restore($id){
        $category = Category::onlyTrashed()->where('id',$id);

        $category->restore();

        return redirect()->route('category.index');
    }

    public function remove($id){
        $category = Category::onlyTrashed()->where('id',$id);

        $category->forceDelete();

        return redirect()->route('category.index');
    }

    public function edit($id){
        $category = Category::findOrFail($id);

        return view('categories.edit')->with('category',$category);
    }

    public function update(Request $request,$id){
        $category = Category::findOrFail($id);

        $category->name = $request->name;

        $category->save();


        return redirect()->route('category.index');
    }
}