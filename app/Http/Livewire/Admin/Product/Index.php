<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Material;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $deleteId;

    public $keyword;
    public $category;
    public $material;
    public $perpage = '20';
    public $categories;
    public $materials;

    public function mount()
    {
        $this->categories = Category::all();
        $this->materials = Material::all();
    }

    public function render()
    {
        $query = Product::whereNull('deleted_at');
        if($this->keyword)
        {
            $query = $query->where('name', 'like', '%'.$this->keyword.'%');
        }
        if($this->category)
        {
            $query = $query->where('category_id', $this->category);
        }
        if($this->material)
        {
            $query = $query->where('material_id', $this->material);
        }
        $products = $query->paginate($this->perpage);
        $this->resetPage();
        return view('livewire.admin.product.index', compact('products'));
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $id = $this->deleteId;
        $product = Product::find($id);
        $order_detail = OrderDetail::where('product_id', $id)->first();
        if($order_detail)
        {
            $this->alert('warning', 'Sản phẩm này đã được mua. Không thể xóa!', [
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
            ]);
        } else {
            $productImages = ProductImage::where('product_id', $id)->get();
            foreach($productImages as $productImage)
            {
                if(File::exists($productImage->image))
                {
                    File::delete($productImage->image);
                }
                $productImage->delete();
            }
            $product->delete();
            $this->alert('success', 'Xóa thành công', [
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
            ]);
        }
        
    }
    
}