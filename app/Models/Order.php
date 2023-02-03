<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produk;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $table = 'order';
    public $timestamps = false;
    protected $guarded = [];
    public function gugu(){
        return $this->hasMany(Produk::class,'order_id','id');
    }
    public function gege()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }

}
