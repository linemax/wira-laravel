<?php

namespace App\Models;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Uuids;

    protected $fillable=[
        'name',
        'description',        
        'code',
    ];

    public function workflows(){
        return $this->hasMany(Workflows::class);
    }
    

  
}
