<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'name', 'creator_id', 'location', 'status', 'description'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'creator_id', 'id');
    }

    public function jobTypes(){
        return $this->belongsToMany('App\Models\JobType', 'job_type_joins');
    }
}