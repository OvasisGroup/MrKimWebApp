<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurCommitment extends Model

{
    use HasFactory;
    protected $table = 'our_commitment';
    protected $fillable = ['title', 'body', 'image'];
}