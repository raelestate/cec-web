<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseRule extends Model
{
    use HasFactory;
    protected $fillable =[
        'houserules_title',
        'houserules_text'
    ];
    protected $table = 'houserules';
}
