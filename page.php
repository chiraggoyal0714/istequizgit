<?php
include 'default.php';
include 'loginstatus.php';
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$db = getDB();
$stmt=$db->prepare('SELECT * FROM users WHERE username = :username and id = :id  ' );
$stmt->bindValue(':username', $username);
$stmt->bindValue(':id', $id);
$stmt->execute();
$login = $stmt->fetchall();
//echo '<pre>'; print_r($login); echo '</pre>';
//echo $login[0]['status'];
if($login[0]['status'] == '1' ){
    header('location:kickpage.php');
}
else{
?>

<html>
<head>

    <link href="https://fonts.googleapis.com/css?family=Arvo|Basic|Caudex|Raleway|Orbitron|Montserrat" rel="stylesheet">

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- SweetAlert -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.0.1/sweetalert.min.js"></script>

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
<a href="logout.php"> logout </a>
<div id="ques">
   hello
</div>
<script src="script.js"></script>
</body>
</html>
<?php
}
?>