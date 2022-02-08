<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable= ["user_id","drug_id","product_name","product_price"];


    public function user(){
        return $this->belongsTo(User::class);
    }

}
