<?php
include 'default.php';
include 'loginstatus.php';
$id = $_SESSION['id'];
$fbid = $_SESSION['fbid'];
$db = getDB();
$stmt=$db->prepare('SELECT * FROM users WHERE fbid = :fbid and id = :id  ' );
$stmt->bindValue(':fbid', $fbid);
$stmt->bindValue(':id', $id);
$stmt->execute();
$login = $stmt->fetchall();
if($login[0]['status'] == 0 ){
    header('location:page.php');
}
else {
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
                background: url("images/bg/c.jpg") #FFF;
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
            a {
                font-family: myFirstFont;
                color: #ffffff;
                font-size: 105px;
            }
            p{
                color: #E67E22;
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

        <h1>OH!! NO</h1>

    </div>
    <p>

    </p>

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

    <?php
}
?>

