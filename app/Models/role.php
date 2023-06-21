<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory,Uuids;
    protected $fillable=['name'];

    public function user()
    {
        return $this->belongsToMany(user::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(permission::class,'role_permissions');
    }
}
