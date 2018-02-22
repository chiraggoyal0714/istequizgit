<?php
include 'default.php';
$db=getDB();
$stmt=$db->prepare("SELECT username,question_id,college,s_year from users WHERE status = 0 ORDER BY question_id DESC,create_time ASC LIMIT 60");
$stmt->execute();
$login = $stmt->fetchall();
$count = count($login);

?>

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
            /*background: url("images/bg/dd.jpg") #FFF;*/
            position: static;
            background-repeat:no-repeat;
        }
        tr{
            background-color: #ffffff;
            opacity: 0.6;
            color: #000;
            font-weight:bold;
        }
        @font-face {
            /*font-family: myFirstFont;*/
            src: url(122.ttf);
        }
        h1 {
            font-family: myFirstFont;
            font-size: 95px;
            color: #ffffff;
            font-weight:normal;
        }
        a {
            font-family: myFirstFont;
            color: #ffffff;
            font-size: 105px;
        }
        span{
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
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.html">Home</a>
    <a href="leaderboard.php">Leaderboard</a>
    <a href="story.php">Story Line</a>
    <a href="rule.php">Rules</a>
    <a href="logout.php"> Logout </a></div>
<span  style="margin-left: -75%;font-size:30px;cursor:pointer;margin-top:30px;" onclick="openNav()">&#9776; Menu</span>
<div style="margin-top:60px" class="col-md-6 col-md-offset-3 text-center">

    <h1>Leaderboard</h1>

</div>
<div class="col-md-8 col-md-offset-2">
    <table class="table table-striped table-bordered">
        <tr class="active">
            <th style="font-size: 20px;">Rank</th>
            <th style="font-size: 20px;">Name</th>
            <th style="font-size: 20px;">Level</th>
            <th style="font-size: 20px;">College</th>
            <th style="font-size: 20px;">Year</th>
        </tr>
        <?php
        $i=1;
         ;
        if ($count > 0) {
            // output data of each row
            while($i <= $count and $i < 50) {
                $j = $i-1;
                $c = $login[$j]['question_id'] +1;
                echo $c;
                echo' <tr>
		 <td><strong>'.$i.'.</strong></td>
		 <td>'.$login[$j]['username'].'</td>
		 <td>'.$login[$j]['question_id'].'</td>
		 <td>'.$login[$j]['college'].'</td>
		 <td>'.$login[$j]['s_year'].'</td>
		 </tr>';
                $i++;
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</div>
<div class="col-md-6 col-md-offset-3">
    <a href="leaderboard2.php"><button class="btn btn-primary" type="Submit">Next</button></a>
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