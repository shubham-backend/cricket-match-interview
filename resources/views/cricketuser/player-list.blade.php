@extends('layouts.cricket-common')
@section('title','Player List')
@section('css')
.bg {
    background-color: #00fff3;
}
@stop
@section('header')
<button type="button" class="btn btn-success" onclick="location.href = '{{'/'}}';">Home</button>
@stop
@section('content')

  <h1 align="center">Team</h1>
  <table border="1" width="70%" align="center">
      <tr>
          <th class="cricket">Team Name</th>
          <th class="cricket">Team Logo</th>
          <th class="cricket">Club State</th>
      </tr>
      <tr align="center">
          <td class="cricket">{{ $teamDetails->name}}</td>
          <td class="cricket"><img align="center" width="30%" height="30%" src="{{ $teamDetails->logo_url}}" title="Player Image"></td>
          <td class="cricket">{{ $teamDetails->club_state}}</td>
      </tr>
  </table>
  <br>
  <h1 align="center">Team Player</h1>
  <table border="1" width="70%" align="center">
      <tr>
          <th class="cricket">Sr. No</th>
          <th class="cricket">Player First Name</th>
          <th class="cricket">Player Last Name</th>
          <th class="cricket">Image</th>
          <th class="cricket">Jersey Number</th>
          <th class="cricket">Country</th>
      </tr>

      @forelse($teamPlayer as $player)

      <tr align="center">
          <td class="cricket">{{ $no++ }}</td>
          <td class="cricket"><a href="{{ route('player-history', encryptDecrypt($player['player']['id'])) }}">{{ $player['player']['first_name']}}</a></td>
          <td class="cricket"><a href="{{ route('player-history', encryptDecrypt($player['player']['id'])) }}">{{ $player['player']['last_name']}}</a></td>
          <td class="cricket"><img align="center" width="30%" height="30%" src="{{ $player['player']['image_url']}}" title="Player Image"></td>
          <td class="cricket">{{ $player['player']['jersey_number']}}</td>
          <td class="cricket">{{ $player['player']['country']}}</td>
      </tr>
      @empty
      <td>No PLayer exists.</td>
      @endforelse
  </table>

</div>

@stop