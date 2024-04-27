<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'welcome_title',
        'welcome_text'
    ];
    protected $table = 'welcome_cards';
}
