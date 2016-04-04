<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'content', 'is_donation', 'accepts_trades', 'price', 'category_id', 'user_id'];
}
