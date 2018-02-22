
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tale of Crypton
    </title>
    <link rel="shortcut icon" href="/images/bg/fav.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=UnifrakturCook:700" rel="stylesheet">    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
            background: url("images/bg/bb.jpg") #FFF;
            position: static;
            background-repeat:no-repeat;
        }
        @font-face {
            font-family: myFirstFont;
            src: url(122.ttf);
        }
        h1 {
            font-family: myFirstFont;
            font-size: 95px;
            color: #E67E22;
            font-weight:normal;
        }
        #aa {
            font-family: myFirstFont;
            color: #ffffff;
            font-size: 23px;
        }
        a h3{
            opacity: 0.5;
        }

        p{
            color: #E67E22;
        }
        #s1{
            font-family: myFirstFont;
            font-size: 45px;
            color: #ffffff;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
<a id="aa" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a id="aa" href="index.html">Home</a>
<a id="aa" href="leaderboard.php">Leaderboard</a>
<a id="aa" href="story.php">Story Line</a>
<a id="aa" href="rule.php">Rules</a>
<a id="aa" href="logout.php"> Logout </a></div>
<span  id="s1" style="margin-left: -75%;font-size:30px;cursor:pointer;margin-top:30px;" onclick="openNav()">&#9776; Menu</span>
<div class="col-md-6 col-md-offset-3 text-center">
    <h1>Rules</h1>
</div>
<div class="col-md-6 col-md-offset-3">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Rule1
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <h3>You have to enter the answer without space and in small letters and spellings must be in accordance with WIKIPEDIA.<br>
                        For example if the answer is Rahul Gandhi,the correct format is rahulgandhi.</h3>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Rule 2
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <h3>Google and Wikipedia are your best mates.</h3>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Rule 3
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <h3>Hints would be posted on the Facebook page and keep visiting the storyline. Check the hints tab and let the winds guide you through the storm.</h3>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Rule 4
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                    <h3>We will be checking your clicks per answer, so any hornswoggle may result in a sweet kickout. Cheaters be ready to dance the hempen jig.</h3>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Most important rule
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body">
                    <h3>Admin is the BOSS! <span class="small"> He is right up there so follow the rules to the T or else the only thing awaiting you is DAVY JONES' Locker. Savvy?</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>