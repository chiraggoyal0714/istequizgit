<?php

include 'default.php';
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .center {
            margin: auto;
            width: 10%;
        }
    </style>
    <title>Tale of Crypton
    </title>
    <link rel="shortcut icon" href="/images/bg/fav.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=UnifrakturCook:700" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container">
    <h2 style="color: black;">ENTER YOUR DETAILS</h2>
    <form action="finallogin.php" method="POST">

        <div class="col-md-8 col-md-offset-2 form-group" style="color:black;" >
<!--            <label for="College">College: </label>-->
            <input type="text" name="college" placeholder="College: " class="form-control" autofocus required><br>
        </div><br>
        <div class="col-md-8 col-md-offset-2 form-group" style="color:black;" >
<!--            <label for="year">Year: </label>-->
            <input type="text" name="year" placeholder="Year: " class="form-control" required><br>
        </div><br>
        <br>
        <br>
        <div class="col-md-4 col-md-offset-5 form-group" >
            <input type="submit" align="center">
        </div>
    </form>
</div>
</body>
</html>