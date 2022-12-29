<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index() {
        return view('admin.slider.index');
    }

    public function create() {
        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request) {
        // $request = $request->validated();
        $slider = new Slider();
        $slider->title = $request['title'];
        $slider->description = $request['description'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            // lấy đuôi file
            $ext = $file->getClientOriginalExtension();
            $file_name = time().'.'.$ext;
            $file->move('uploads/slider/', $file_name);
            $slider->image=$file_name;
        }
        $slider->status=$request->status==true ? '1' : '0';
        $slider->save();
        return redirect('admin/slider')->with('message', 'Thêm mới thành công');
    }

    public function edit($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(SliderFormRequest $request, $id) 
    {
        // $request = $request->validated();

        $slider = Slider::find($id);

        $slider->title=$request['title'];
        $slider->description=$request['description'];
        if($request->hasFile('image')){
            $path = 'uploads/slider/'.$slider->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            // lấy đuôi file
            $ext = $file->getClientOriginalExtension();
            $file_name = time().'.'.$ext;
            $file->move('uploads/slider/', $file_name);
            $slider->image=$file_name;
        }
        $slider->status=$request->status==true ? '1' : '0';
        $slider->update();
        return redirect('admin/slider')->with('message', 'Sửa thành công');
    }

}
