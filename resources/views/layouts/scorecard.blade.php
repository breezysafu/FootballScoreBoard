<!DOCTYPE html>
<html>
<head>
 <!--   <meta http-equiv="refresh" content="5" /> -->
    <title>ScoreBoard</title>
    <link rel="stylesheet" href="{{asset('css/scoreboard.css')}}">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body background="{{asset('img/ground.jpg')}}">
<script>
    $(document).ready(function(){
                    // Schedule the next request when the current one's complete
                    setInterval (function sendRequest(){
                        $.ajax({
                            type:"GET",
                            url: "/home/scoreupdate",
                        success:
                            function(data){
                              //  console.log();

                              //  $('#time').html(data.created_at);
                                $('#aname').html(data.team_a_name);
                                $('#bname').html(data.team_b_name);
                                $('#ascore').html(data.team_a_score);
                                $('#bscore').html(data.team_b_score);
                                },
                    }),1000});
        });
</script>
<div class="image1"></div>
<div class="mainBox">
    <p>Started At: <br/>{{$control->created_at->format('g:i a')}}</p>

    <p class="teamA"><span class="increase2" id="aname"></span> <br/><br/><br/>
        <span class="increase1" id="ascore"></span></p>

    <p class="teamB"><span class="increase2" id="bname"></span> <br/><br/><br/>
        <span class="increase1" id="bscore"></span></p>

    <p class="colon"> <br/>:</p>

    <p class="bottomPart" id="clockdiv">Time Remaining :<br/>
        <span id="demo"></span>

        <script>
            // Set the date we're counting down to
            var countDownDate = new Date('{{$control->created_at}}');
            countDownDate.setHours(countDownDate.getHours() + 1);
            countDownDate=countDownDate.getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
             //   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = hours + "h "
                    + minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "TIME IS UP";
                }
            }, 1000);
        </script>
    </p>
</div>


</body>
</html>