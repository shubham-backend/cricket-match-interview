<?php

namespace App\Http\Controllers\CricketUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match; 
use App\Models\Team; 

class MatchController extends Controller
{
    public function index()
    {	
    	$allMatch = Match::all();
		$allTeam =  Team::all();
    	return view('cricketuser.matches-list',compact('allMatch','allTeam'))->with('no',1);
    }
}
