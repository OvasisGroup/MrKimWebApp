<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;
    protected $table = 'whychooseus';
    protected $fillable = ['id', 'title', 'image', 'body'];
    public $timestamps = false;
}
