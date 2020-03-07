<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class PlayerTeam extends Model
{
    public function team()
    {
    	return $this->belongsTo(\App\Models\Team::class);
    }

    public function player()
    {
    	return $this->belongsTo(\App\Models\Player::class);
    }
}
