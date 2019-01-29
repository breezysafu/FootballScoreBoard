<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="1" />
    <title>ScoreBoard</title>
    <link rel="stylesheet" href="{{asset('css/scoreboard.css')}}">

</head>
<body>
<div class="image1">     </div>
<div class="mainBox">
    <p>Started At: <br/>{{ $control->created_at->format('h:i a') }}</p>

    <p class="teamA"><span class="increase2">{{ $control->team_a_name}}</span> <br/><br/><br/>
        <span class="increase1">{{ $control->team_a_score }}</span></p>

    <p class="teamB"><span class="increase2">{{ $control->team_b_name }}</span> <br/><br/><br/>
        <span class="increase1">{{ $control->team_b_score }}</span></p>

    <p class="colon"> <br/>:</p>

    <p class="bottomPart">Time Remaining :<br/>1 hr </p>
</div>


</body>
</html>