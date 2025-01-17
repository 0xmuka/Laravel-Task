<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        // Cascade delete sliders when a category is deleted
        static::deleting(function ($category) {
            $category->sliders()->delete();
        });
    }
    protected $fillable = ['name'];

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }
}