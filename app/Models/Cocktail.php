<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{

    use HasFactory;

    protected $fillable = [
        'cocktail_name',
        'category',
        'ingredients',
        'price',
<<<<<<< HEAD
        'image',
=======
        'allergens'
>>>>>>> 690b3a1bc00e8e8bb099324366a45d3bd6b6aa92

    ];

    protected $casts = [
        'ingredients' => 'json'
    ];
}
