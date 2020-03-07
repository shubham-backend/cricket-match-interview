@extends('layouts.cricket-common')
@section('title','Matches List')
@section('css')
.bg {
    background-color: #00fff3;
}
@stop
@section('header')
<button type="button" class="btn btn-success" onclick="location.href = '{{'/'}}';">Home</button>
@stop
@section('content')
  <h1 align="center">Matches List</h1>

<table border="1" width="70%" align="center">
  <tr>
    <th class="cricket">Sr. No</th>
    <th class="cricket">First Team</th>
    <th class="cricket">Second Team</th>
    <th class="cricket">Winner Team</th>
  </tr>

  <?php 
      $first_team = '';
      $second_team = '';
      $winner_team = '';

    foreach($allMatch as $match){      

      foreach($allTeam as $team){

        if($match->team_first == $team->id){
           $first_team = $team->name; 
        }
        if($match->team_second == $team->id){
          $second_team = $team->name;
        }
        if($match->winner_team == $team->id){
          $winner_team = $team->name;
        }
      }
      //pr($winner_team);
      ?>
    <tr align="center">
      <td class="cricket">{{ $no++ }}</td>
      <td class="cricket">{{ $first_team }}</td>
      <td class="cricket">{{ $second_team }}</td>
      <td class="cricket">{{ $winner_team }}</td>
    </tr>
  <?php } ?>
</div>
@stop
