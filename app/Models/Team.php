<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Team extends Model
{
    public function teamPlayer()
    {
    	return $this->belongsToMany('App\Models\PlayerTeam','team_id','id');
    }
}
