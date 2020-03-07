<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Cricket')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSUFGWmReAsoX7VCONKRkYzQW4KO0r0Y1dpTrYb6fHvjwYxyVKe">

</head>
<style> 
 body,html {
    height: 100%;
    margin: 0;
}
.bg {
	height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.box {
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    padding: 20px;
}

.box button {
    margin: 0 10px;
}

.btn-success {
    color: #333;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th,td {
  padding: 5px;
  text-align: left;
}

.cricket{
  text-align: center;
}
   @yield('css')
</style>
<body>

    <div class="bg">
        <div class="box">
        	@yield('header')
            <button type="button" class="btn btn-success" onclick="location.href = '{{route('team-list')}}';">Teams</button>
            <button type="button" class="btn btn-success" onclick="location.href = '{{route('team-matches')}}';">Matches</button>
            <button type="button" class="btn btn-success" onclick="location.href = '{{route('team-points')}}';">Points</button>
        </div>
    @yield('content')
</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@yield('scripts')

</html>