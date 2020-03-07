<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Point extends Model
{
    public function team()
    {
    	return $this->belongsTo(\App\Models\Team::class,'team_id','id');
    }
}
