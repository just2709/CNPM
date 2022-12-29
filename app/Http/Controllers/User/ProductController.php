<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('user.products');
    }

    public function detail($id)
    {
        return view('user.detail', ['product_id' => $id]);
    }
    
    public function set_keyword(Request $request) {

        $this->key_word = $request['search'];
        $key_word = $this->key_word;
        return redirect()->route('products')->with([ 'key_word' => $key_word ]);
    }
}
