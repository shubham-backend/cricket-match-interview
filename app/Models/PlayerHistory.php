<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerHistory extends Model
{
    public function player()
    {
    	return $this->belongsTo('App\Models\Player','player_id','id');
    }
}
