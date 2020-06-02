<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('level');
    }
    
    protected $fillable =  [
        'name',
        'description',
        'logo'
    ];
}