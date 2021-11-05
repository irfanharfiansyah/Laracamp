<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Eloquent\SoftDeletes;
class Camps extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id', 'slug'];
}