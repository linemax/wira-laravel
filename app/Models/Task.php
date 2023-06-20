<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',        
        'due_date',
        'priority_id',
        'project_id',
        'user_id',
        'team_id',
        'status_id'
    ];

    public function priorities(){
        return $this->hasMany(Priorities::class);
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function statuses(){
        return $this->hasMany(Statuses::class);
    }
    public function users(){
        return $this->hasMany(Users::class);
    }

    public function teams(){
        return $this->hasMany(Teams::class);
    }
}

