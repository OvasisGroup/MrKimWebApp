<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatSetsUsApart extends Model
{
    use HasFactory;
    protected $table = 'whatsetsasapart';
    public $timestamps = false;
    protected $fillable = ['title', 'body'];
}
