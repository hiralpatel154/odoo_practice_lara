<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markup extends Model
{
    protected $table = 'markups';
    protected $primaryKey = 'id';

    protected $fillable = ['id','cid','food_type','from_price','to_price'];

    protected $hidden = [];
}
