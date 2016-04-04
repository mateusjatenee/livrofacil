<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'content', 'is_donation', 'accepts_trades', 'price', 'category_id', 'state_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
