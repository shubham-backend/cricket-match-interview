@extends('layouts.cricket-common')
@section('title','Team List')
@section('css')
.bg {
    background-color: #00fff3;
}
@stop
@section('header')
<button type="button" class="btn btn-success" onclick="location.href = '{{'/'}}';">Home</button>
@stop
@section('content')

  <h1 align="center">Team List</h1>

  <table border="1" width="70%" align="center">
    <tr>
      <th class="cricket">Sr. No</th>
      <th class="cricket">Team Name</th>
      <th class="cricket">Logo</th>
      <th class="cricket">Club State</th>
    </tr>

    @foreach($teamList as $team)
    <tr align="center">
      <td class="cricket">{{ $no++ }}</td>
      <td class="cricket"><a href="{{ route('team-player-list', encryptDecrypt($team->id)) }}">{{ $team->name}}</a></td>
      <td class="cricket"><img align="center" width="30%" height="30%" src="{{ $team->logo_url}}" title="Team Logo"></td>
      <td class="cricket">{{ $team->club_state}}</td>
    </tr>
    @endforeach
  </table>

  </div>
@stop