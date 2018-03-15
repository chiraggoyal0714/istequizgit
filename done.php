<?php
include 'default.php';
include 'loginstatus.php';
$id = $_SESSION['id'];
$fbid = $_SESSION['fbid'];
$db = getDB();
$stmt=$db->prepare('SELECT * FROM users WHERE fbid=:fbid and id = :id ' );
$stmt->bindValue(':fbid', $fbid);
$stmt->bindValue(':id', $id);
$stmt->execute();
$login = $stmt->fetch();

$qid = $login['question_id'];
$status =  $login['status'];
$l = $qid +1;

$stmt=$db->prepare('SELECT * FROM qstns WHERE qid = :qid  ' );
$stmt->bindValue(':qid', $qid);
$stmt->execute();
$login = $stmt->fetch();
$imgsrc = $login['qid'];
$cimgsrc = $login['qname'];
$_SESSION['level']=$l;
if($status == 0){
    if($l != 5){
        header('location:page.php');
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Tale of Crypton
        </title>
        <link rel="shortcut icon" href="images/bg/fav.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=UnifrakturCook:700" rel="stylesheet">    <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="custom.css">
        <!-- font-awesome -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <style>
            .center {
                text-align: center;
            }
            @font-face {
                font-family: mySecondFont;
                src: url(12121.ttf);
            }
            h1 {
                font-family: mySecondFont;
                font-size: 45px;
            }
            .abc{
                font-family: mySecondFont;
                font-size: 25px;
                color: #0f0f0f;
            }
            a {
                font-family: mySecondFont;
                color: #ffffff;
                font-size: 105px;
            }
            span{
                font-family: mySecondFont;
                font-size: 45px;
            }
            body{
                background: url(<?php echo 'images/bg/20.jpg'; ?>) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;

            }
            img {
                padding:1px;
                border:1px solid #021a40;
                background-color: #000;
            }

            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 30;
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
    <body >
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="page.php">Home</a>
        <a href="leaderboard.php">Leaderboard</a>
        <a href="story.php">StoryLine</a>
        <a href="rule.php">Rules</a>
        <a href="logout.php"> Logout </a></div>
    <span style="margin-top: 2%;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
    <div class="container" style="margin-top: 20%">
        <div class="col-md-8 col-md-offset-2">
            <br>
            <p><h1>hey!! pirate you cleared all the level</h1> </p>
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
    <?php
}
else{
    header('location:kickpage.php');
}
?>
