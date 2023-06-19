<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory,Uuids;

    protected $fillable=['name'];
public function roles()
{
    return $this->belongsToMany(role::class,'role_permissions');
}

}
