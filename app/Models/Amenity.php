<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $fillable =[
        'amenities_title',
        'amenities_type',
        'amenities_description',
        'amenities_image',
    ];
    protected $table = 'amenities';
}
