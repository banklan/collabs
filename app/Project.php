<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

    // protected $with =['user', 'adDescr', 'adPic'];

    // protected $appends = ['selfOwned'];

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
