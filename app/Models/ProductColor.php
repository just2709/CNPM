<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductColor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_colors';

    protected $fillable = [
        'product_id', 'color_id', 'quantity'
    ];

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }
}
