<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['phone_number', 'address', 'state_id', 'user_id'];
}
