<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $guarded = [];
    protected $table = 'users';
// public function gege()
// {
//     return $this->hasMany(Order::class,'user_id','id');
// }
/**
 * Get the role that owns the User
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function role()
{
    return $this->belongsTo(Role::class, 'role_id', 'id');
}
}
