<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $fillable =[
        'management_name',
        'management_position',
        'management_image'
    ];
    protected $table = 'managements';
}
