<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactSheet extends Model
{
    use HasFactory;
    protected $fillable =[
        'fact_sheet_title',
        'fact_sheet_text'
    ];
    protected $table = 'fact_sheets';
}
