<?php

namespace App\Http\Controllers\CricketUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Point; 

class PointController extends Controller
{
    public function index()
    {
    	$teamPoints = Point::with('team')->get();
    	return view('cricketuser.team-points',compact('teamPoints'))->with('no',1);
    }
}
