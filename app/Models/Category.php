<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'parent_id', 'image', 'header_image', 'description'];

    /**
     * Define the relationship to the parent category.
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Define the relationship to child categories.
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * Accessor for the full URL of the image.
     */
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }

        // Default image
        return asset('images/default-category.png');
    }

    /**
     * Accessor for the full URL of the header image.
     */
    public function getHeaderImageUrlAttribute()
    {
        if ($this->header_image) {
            return asset('storage/' . $this->header_image);
        }

        // Default header image
        return asset('images/default-header.png');
    }

    /**
     * Recursively fetch all child categories (nested structure).
     */
    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }
}
