<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class ProductPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $categories, $colors, $materials;
    public $key_word;
    
    public $category = '';
    public $pickedcolors = [];
    public $pickedmaterials = [];
    public $from = 0;
    public $to = 0;
    public $sort = 'default';
    public $show = 12;


    public function mount() {
        $this->categories = Category::where('status', '0')->get();
        $this->colors = Color::where('status', '0')->get();
        $this->materials = Material::get();

        $this->key_word = Session::get('key_word');
    }

    // public function updatingCategory()
    // {
    //     $this->resetPage();
    // }
    // public function updatingPickedcolors()
    // {
    //     $this->resetPage();
    // }
    // public function updatingPickedmaterials()
    // {
    //     $this->resetPage();
    // }
    // public function updatingFrom()
    // {
    //     $this->resetPage();
    // }
    // public function updatingTo()
    // {
    //     $this->resetPage();
    // }
    // public function updatingSort()
    // {
    //     $this->resetPage();
    // }

    public function render()
    {
        $KeyWord = $this->key_word;
        $query = Product::where('status', '0');
        if(!empty($KeyWord))
        {
            $query->where('name', 'like', '%' . $KeyWord . '%');
        }
        if ($this->category) { 
            $query->where('category_id', $this->category);
            // dd($query->get());

        }
        if ($this->pickedcolors) {
            $query->selectRaw('*, product_id as id');
            $query->join('product_colors', 'product_colors.product_id', '=', 'products.id');
            $query->where(function($query){
                foreach($this->pickedcolors as $key => $value) {
                    if ($key === 0) {
                        $query->where('product_colors.color_id', $value);
                        continue;
                    }
                    $query->orWhere('product_colors.color_id', $value);
                }
            });
            // dd($query->get());
            
        }
        if ($this->pickedmaterials) {
            $query->where(function($query){
                foreach($this->pickedmaterials as $key => $value) {
                    if ($key === 0) {
                        $query->where('material_id', $value);
                        continue;
                    }
                    $query->orWhere('material_id', $value);
                }
            });
            
        }
        if ($this->from || $this->to) {
            if($this->from)
            {
                $query->where(function($query){
                    $query->Where('sell_price', '>=' ,$this->from);
                });
            }
            else if($this->to)
            {
                $query->where(function($query){
                    $query->Where('sell_price', '<=' ,$this->to);
                });
            }
            else 
            {
                $query->where(function($query){
                    $query->whereBetween('sell_price', [$this->from, $this->to]);
                }); 
            }
            
        }
        if ($this->sort !== 'default')
        {
            $query->orderBy('sell_price', $this->sort);
        }
        $data = $query->paginate($this->show);
        $this->resetPage();
        // dd($data);
        return view('livewire.user.product-page', compact('data', 'KeyWord'));
    }
}
