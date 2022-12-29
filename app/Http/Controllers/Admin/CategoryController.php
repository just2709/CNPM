<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index() 
    { 
        return view('admin.category.index'); 
    }

    public function create() 
    { 
        return view('admin.category.create'); 
    }

    public function store(CategoryFormRequest $request) 
    {
        $validatedData = $request->validated();
        $category = new Category;
        $category->name=$validatedData['name'];
        $category->description=$validatedData['description'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            // lấy đuôi file
            $ext = $file->getClientOriginalExtension();
            $file_name = time().'.'.$ext;
            $file->move('uploads/category/', $file_name);
            $category->image=$file_name;
        }

        $category->status=$request->status==true ? '1' : '0';
        $category->save();
        return redirect('admin/category')->with('message', 'Thêm mới thành công');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryFormRequest $request, $id) 
    {
        $validatedData = $request->validated();

        $category = Category::find($id);

        $category->name=$validatedData['name'];
        $category->description=$validatedData['description'];
        if($request->hasFile('image')){
            $path = 'uploads/images/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            // lấy đuôi file
            $ext = $file->getClientOriginalExtension();
            $file_name = time().'.'.$ext;
            $file->move('uploads/category/', $file_name);
            $category->image=$file_name;
        }

        $category->status=$request->status==true ? '1' : '0';
        $category->update();
        return redirect('admin/category')->with('message', 'Sửa thành công');
    }



}
