<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index() 
    { 
        return view('admin.colors.index'); 
    }

    public function create() 
    { 
        return view('admin.colors.create'); 
    }

    public function store(ColorFormRequest $request) 
    {
        $validatedData = $request->validated();
        $color = new Color();
        $color->name=$validatedData['name'];
        $color->code=$validatedData['code'];
        $color->status=$request->status==true ? '1' : '0';
        $color->save();
        return redirect('admin/color')->with('message', 'Thêm mới thành công');
    }

    public function edit($id){
        $color = Color::find($id);
        return view('admin.colors.edit',compact('color'));
    }

    public function update(ColorFormRequest $request, $id) 
    {
        $validatedData = $request->validated();

        $color = Color::find($id);

        $color->name=$validatedData['name'];
        $color->code=$validatedData['code'];
        $color->status=$request->status==true ? '1' : '0';
        $color->update();
        return redirect('admin/color')->with('message', 'Sửa thành công');
    }
}
