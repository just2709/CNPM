<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialFormRequest;
use App\Models\Material;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index() 
    { 
        return view('admin.material.index'); 
    }

    public function create() 
    { 
        return view('admin.material.create'); 
    }

    public function store(MaterialFormRequest $request) 
    {
        $validatedData = $request->validated();
        $material = new Material;
        $material->name=$validatedData['name'];
        $material->description=$validatedData['description'];
        $material->save();
        return redirect('admin/material')->with('message', 'Thêm mới thành công');
    }

    public function edit($id){
        $material = Material::find($id);
        return view('admin.material.edit',compact('material'));
    }

    public function update(MaterialFormRequest $request, $id) 
    {
        $validatedData = $request->validated();

        $material = Material::find($id);

        $material->name=$validatedData['name'];
        $material->description=$validatedData['description'];
        $material->update();
        return redirect('admin/material')->with('message', 'Sửa thành công');
    }


    public function delete($id)
    {
        $material = Material::find($id);
        $material->deleted_at = Carbon::now();
        $material->save();
        return redirect('admin/material')->with('success','Xóa thành công');
    }
}
