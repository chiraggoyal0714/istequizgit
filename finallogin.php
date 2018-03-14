<?php
include 'default.php';
session_start();
$email = $_SESSION['email'];
$fbid = $_SESSION['fbid'];
$name = $_SESSION['name'];
$college = $_POST["college"];
$year = $_POST["year"];


$db = getDB();
$stmt=$db->prepare('SELECT * FROM users WHERE fbid = :fbid and email = :email' );
$stmt->bindValue(':fbid', $fbid);
$stmt->bindValue(':email', $email);
$stmt->execute();
$login = $stmt->fetchall();
$id=$login[0]['id'];
$stmt=$db->prepare('UPDATE users SET college = :college WHERE fbid = :fbid and email = :email' );
$stmt->bindValue(':fbid', $fbid);
$stmt->bindValue(':college', $college);
$stmt->bindValue(':email', $email);
$stmt->execute();
$stmt=$db->prepare('UPDATE users SET s_year = :s_year WHERE fbid = :fbid and email = :email' );
$stmt->bindValue(':fbid', $fbid);
$stmt->bindValue(':s_year', $year);
$stmt->bindValue(':email', $email);
$stmt->execute();
$count = count($login);
echo $college,$year;
if($count != 0 ){
    $_SESSION['fbid']=$fbid;
    $_SESSION['id'] = $login[0]['id'];
    header('location:page.php');
}


?>