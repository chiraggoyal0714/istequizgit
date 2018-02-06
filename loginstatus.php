<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
$loginStatus = !is_null($username) && isset($username) ? 2 : 1;
if ($loginStatus == 1) {
    echo "<script type='text/javascript'>alert('Login First'); location='index.html';</script>";
    die();
}
?>
