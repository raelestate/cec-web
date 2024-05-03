<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuals extends Model
{
    use HasFactory;
    protected $fillable =[
        'manuals_title',
        'manuals_type',
        'manuals_pdf'
    ];
    protected $table = 'manuals';
}
