<?php
session_start();
$fbid = isset($_SESSION['fbid']) ? $_SESSION['fbid'] : null;
$loginStatus = !is_null($fbid) && isset($fbid) ? 2 : 1;
if ($loginStatus == 1) {
    echo "<script type='text/javascript'>alert('Login First'); location='index.html';</script>";
    die();
}
?>
