<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    protected $fillable = [
        'name',
    ];

    public function jobs(){
        return $this->belongsToMany('App\Model\Job');
    }
}