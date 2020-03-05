<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('shop.pages.add_category');
    }

    public function storeCategory(Request $request )
    {

        $validateData = $request->validate([
            'category' => 'required'
        ]);
        $category = Category::create([
            'id' => request('id'),
            'category' => request('category'),
        ]);

        return redirect('/control_category');
    }


    public function controlCategory()
    {
        $categories = Category::all();
        return view('shop.pages.control_category',compact('categories')); //psl
    }

    public function warningCategory(Category $category)
    {

        return view('shop.pages.warning_category',compact('category'));
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect('/control_category');
    }


}
