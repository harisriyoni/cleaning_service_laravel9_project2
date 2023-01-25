<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    protected $table = 'produk';
    protected $guarded =[];
    public $timestamps = false;


    public function order(){
        return $this->belongsTo(Order::class,'produk_id','id');
    }
}
