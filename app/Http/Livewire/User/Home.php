<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $sliders = Slider::where('status', '0')->get();
        $categories = Category::where('status', '0')->get();
        $new_products = Product::where('status', '0')->limit(10)->get();
        $trending_products = Product::where('status', '0')->where('trending', '1')->limit(10)->get();
        return view('livewire.user.home', compact('sliders', 'categories', 'new_products', 'trending_products'));
    }
}
