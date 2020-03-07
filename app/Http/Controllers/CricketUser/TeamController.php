<?php

namespace App\Http\Controllers\CricketUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team; 
use App\Models\PlayerTeam; 

class TeamController extends Controller
{
    public function index()
    {
    	$teamList = Team::all();
    	
        return view('cricketuser.team-list',compact('teamList'))->with('no', 1);
    }

    public function teamPlayer($id)
    {   
        //Helper Funcrion
        $id = encryptDecrypt($id,'decrypt');
    	
        $teamPlayer = PlayerTeam::with('player')->where('team_id',$id)->get();
    	
        $teamDetails = Team::whereId($id)->first();
    	
        return view('cricketuser.player-list',compact('teamPlayer','teamDetails'))->with('no', 1);
    }
}
