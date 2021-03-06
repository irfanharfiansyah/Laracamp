<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Checkout extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function setExpiredAttribute($value){
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }
}
