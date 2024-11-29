<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoWeAre extends Model
{
    use HasFactory;
    protected $table = 'who_we_are';
    protected $fillable = ['id', 'who_we_are'];
    public $timestamps = false;
}
