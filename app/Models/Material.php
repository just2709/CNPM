<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'material';

    protected $fillable = [
        'name', 'description'
    ];

    public function material()
    {
        return $this->hasOne(Product::class, 'material_id', 'id');
    }
}
