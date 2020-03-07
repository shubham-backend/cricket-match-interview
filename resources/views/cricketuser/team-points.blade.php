@extends('layouts.cricket-common')
@section('title','Team Point')
@section('css')
.bg {
    background-color: #00fff3;
}
@stop
@section('header')
<button type="button" class="btn btn-success" onclick="location.href = '{{'/'}}';">Home</button>
@stop
@section('content')

  <h1 align="center">Team Points</h1>

  <table border="1" width="70%" align="center">
    <tr>
      <th class="cricket">Sr. No</th>
      <th class="cricket">Team Name</th>
      <th class="cricket">Logo</th>
      <th class="cricket">Points</th>
    </tr>

    @foreach($teamPoints as $points)
      <tr align="center">
        <td class="cricket">{{ $no++ }}</td>
        <td class="cricket">{{ $points['team']['name']}}</td>
        <td class="cricket"><img align="center" width="30%" height="30%" src="{{ $points['team']['logo_url']}}" title="Team Logo"></td>
        <td class="cricket">{{ $points['points']}}</td>
      </tr>
    @endforeach
  </table>
</div>
@stop