<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $fillable = [
        'category', 
    ];

    public function project()
    {
        return $this->hasMany('App\Project');
    }
}
