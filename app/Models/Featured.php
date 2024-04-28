<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    use HasFactory;
    protected $fillable =[
        'featured_title',
        'featured_image'
    ];
    protected $table = 'features';
}
