<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->get();
        return view('admin.category.index',[
            'categories' => $categories
        ]);
    }
    public function create()
    {
        $categories = Category::with('children')->get();
        return view('admin.category.create',[
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:categories,name',
            'parent_id' => 'integer|nullable'
        ]);

        $categories = Category::create([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'showinhomepage' => $request->showinhomepage,
        ]);
         if($request->mode == 'save'){
             return redirect()->route('admin.categories.create')
                 ->withSuccess(__('Thêm mới thành công.'));
         }
         if($request->mode == 'save_exit')
            return redirect()->route('admin.categories.index')
            ->withSuccess(__('Thêm mới thành công.'));

    }
    public function edit(Category $category)
    {
        $categories = Category::where('id', '!=', $category->id)->get();
        return view('admin.category.edit',[
            'category' => $category,
            'categories' => $categories
        ]);

    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:3|unique:categories,name',
            'parent_id' => 'integer|nullable'
        ]);
        $category->update([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'showinhomepage' => $request->showinhomepage,
        ]);
    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->withSuccess(__('Xóa thành công.'));
    }
}
