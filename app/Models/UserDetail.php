<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'user_detail';
    protected $fillable = [
        'full_name', 'phone', 'city', 'district', 'ward', 'detailAddress', 'user_id'
    ];
}
