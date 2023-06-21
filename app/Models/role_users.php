<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_users extends Model
{
    use HasFactory,Uuids;
    protected $fillable=['user_id','role_id'];
}
