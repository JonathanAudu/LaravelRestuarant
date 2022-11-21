<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'drink_name',
        'drink_description',
        'drink_image',
        'drink_price',
    ];


     /**
     * Get the Category that owns the Drink.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
