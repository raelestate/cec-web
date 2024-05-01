<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable =[
        'promotions_title',
        'promotions_type',
        'promotions_description',
        'promotions_image',
    ];
    protected $table = 'promotions';
}
 