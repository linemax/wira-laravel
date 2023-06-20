<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamUser extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'team_id',
        
    ];

    public function users(){
        return $this->hasMany(Users::class);
    }

    public function teams(){
        return $this->hasMany(Teams::class);
    }
}
