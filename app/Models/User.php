<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Role;

class User extends Model
{
    use HasFactory;
    protected $guarded = ["created_at","updated_at"];

    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
    public function cart(){
        return $this->hasOne(Cart::class);
    }
}
