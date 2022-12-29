<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() 
    {
        return view('admin.products.index');
    }

    public function create()
    {
        $categories = Category::all();
        $materials = Material::all();
        $colors = Color::all();
        return view('admin.products.create', compact('categories', 'materials', 'colors'));
    }

    public function store(ProductFormRequest $request) 
    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'material_id' => $validatedData['material_id'],
            'description' => $validatedData['description'],
            'original_price' => $validatedData['original_price'],
            'sell_price' => $validatedData['sell_price'],
            'quantity' => $validatedData['quantity'],
            'trending' => $request->trending == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '0',
        ]);

        if($request->hasFile('image')){
            $index = 0;
            foreach($request->file('image') as $file) {
                // lấy đuôi file
                $ext = $file->getClientOriginalExtension();

                $file_name = $index.time().'.'.$ext;
                $file->move('uploads/products/', $file_name);
                $pathImg = 'uploads/products/'.$file_name;

                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $pathImg
                ]);
                $index++;
            }
        }

        if($request->colors)
        {
            foreach($request->colors as $key => $color)
            {
                $product->productColor()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $request->color_quantity[$key] ?? 0
                ]);
            }
        }

        return redirect('/admin/product')->with('success', 'Thêm mới thành công sản phẩm');
        
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $materials = Material::all();
        $product_color = $product->productColor->pluck('color_id');
        $colors = Color::whereNotIn('id', $product_color)->get();

        return view('admin.products.edit',compact('product', 'categories', 'materials', 'colors'));
    }

    public function update(ProductFormRequest $request, $id){
        $validatedData = $request->validated();

        $product = Product::where('id', $id)->first();

        if($product)
        {
            $product->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'material_id' => $validatedData['material_id'],
                'description' => $validatedData['description'],
                'original_price' => $validatedData['original_price'],
                'sell_price' => $validatedData['sell_price'],
                'quantity' => $validatedData['quantity'],
                'trending' => $request->trending == true ? '1' : '0',
                'status' => $request->status == true ? '1' : '0',
            ]);

            if($request->hasFile('image')){
                $index = 0;
                foreach($request->file('image') as $file) {
                    // lấy đuôi file
                    $ext = $file->getClientOriginalExtension();

                    $file_name = $index.time().'.'.$ext;
                    $file->move('uploads/products/', $file_name);
                    $pathImg = 'uploads/products/'.$file_name;

                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => $pathImg
                    ]);
                    $index++;
                }
            
            }

            if($request->colors)
            {
                foreach($request->colors as $key => $color)
                {
                    $product->productColor()->create([
                        'product_id' => $product->id,
                        'color_id' => $color,
                        'quantity' => $request->color_quantity[$key] ?? 0
                    ]);
                }
            }

            return redirect('admin/product')->with('success','Sửa thành công');
        } else {
            return redirect('admin/product')->with('error','Không tìm thấy sản phẩm');
        }
    }

    // public function delete($id)
    // {
    //     $product = Product::find($id);
    //     $productImages = ProductImage::where('product_id', $id)->get();
    //     foreach($productImages as $productImage)
    //     {
    //         if(File::exists($productImage->image))
    //         {
    //             File::delete($productImage->image);
    //         }
    //         $productImage->delete();
    //     }
    //     $product->delete();
    //     return redirect('admin/product')->with('success','Xóa thành công');
    // }

    public function deleteImage($image_id)
    {
        $productImage = ProductImage::find($image_id);
        if(File::exists($productImage->image))
        {
            File::delete($productImage->image);
        }
        $productImage->delete();
        return redirect()->back()->with('success','Xóa thành công ảnh');
    }

    public function updateProductColorQuantity(Request $request, $product_color_id)
    {
        $productColor = Product::findOrFail($request->product_id)->productColor()->where('id', $product_color_id)->first();

        $productColor->update([
            'quantity' => $request->quantity
        ]);
        return response()->json(['message', 'Cập nhật thành công số lượng']);
    }

    public function deleteProductColorQuantity($product_color_id)
    {
        $productColor = ProductColor::findOrFail($product_color_id);
        $productColor->delete();
        return response()->json(['message', 'Xóa thành công']);
    }
}
