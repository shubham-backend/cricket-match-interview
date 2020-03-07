<?php

namespace App\Http\Controllers\CricketUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlayerHistory;

class PlayerController extends Controller
{
    public function index($id)
    {
    	//Helper Function
    	$id = encryptDecrypt($id,'decrypt');
    	$playerHistory = PlayerHistory::with('player')->firstWhere('id',$id);
    	return view('cricketuser.player-history',compact('playerHistory'));
    }
}
