@extends('layouts.cricket-common')
@section('title','Player History')
@section('css')
.bg {
    background-color: #00fff3;
}
@stop
@section('header')
<button type="button" class="btn btn-success" onclick="location.href = '{{'/'}}';">Home</button>
@stop
@section('content')

  <h1 align="center">{{$playerHistory['player']['first_name'] ." " .$playerHistory['player']['last_name']}} History</h1>
  <img align="left" width="30%" height="80%" src="{{ $playerHistory['player']['image_url']}}" title="Player Image">
  <table border="2" width="50%" align="center">
    <tr>
    <th class="cricket">First Name</th>
    <td>{{$playerHistory['player']['first_name']}}</td>
   </tr>
   <tr>
   <tr>
    <th class="cricket">Last Name</th>
    <td>{{$playerHistory['player']['last_name']}}</td>
   </tr>
    <tr>
    <th class="cricket">Age</th>
    <td>{{$playerHistory->age}}</td>
   </tr>
   <tr>
    <th class="cricket">Jersey Number</th>
    <td>{{$playerHistory['player']['jersey_number']}}</td>
   </tr>
   <tr>
    <th class="cricket">Country</th>
    <td>{{$playerHistory['player']['country']}}</td>
   </tr>
   <tr>
    <th class="cricket">Run</th>
    <td>{{$playerHistory->run}}</td>
   </tr>
   <tr>
    <th class="cricket">High Scores</th>
    <td>{{$playerHistory->high_scores}}</td>
   </tr>
   <tr>
    <th class="cricket">High Scores</th>
    <td>{{$playerHistory->high_scores}}</td>
   </tr>
   <tr>
    <th class="cricket">Fifties</th>
    <td>{{$playerHistory->fifties}}</td>
   </tr>
   <tr>
    <th class="cricket">Hundreds</th>
    <td>{{$playerHistory->hundreds}}</td>
   </tr>  
  </table>

</div>

@stop