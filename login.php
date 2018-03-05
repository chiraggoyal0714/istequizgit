<?php
include 'default.php';
session_start();
$name = $_GET["name"];
$fbid = $_GET["id"];
$email = $_GET["email"];

exists($email,$fbid);

function signup(){
    $name = $_GET["name"];
    $fbid = $_GET["id"];
    $email = $_GET["email"];
    $db = getDB();
    $stmt=$db->prepare('INSERT INTO users (username,email,fbid) VALUES (:username,:email,:fbid)');
    $stmt->bindValue(':username', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':fbid', $fbid);
    $stmt->execute();
    $stmt=$db->prepare('SELECT * FROM users WHERE fbid = :fbid and email = :email' );
    $stmt->bindValue(':fbid', $fbid);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $query = $stmt->fetch();
    $id = $query['id'];
    $stmt=$db->prepare('INSERT INTO qstns_users (users_id) VALUES (:id)');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $_SESSION['fbid']=$fbid;
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    header('location:college.php');
}



function exists($email, $fbid){
    $db = getDB();
    $stmt=$db->prepare('SELECT * FROM users WHERE fbid = :fbid and email = :email' );
    $stmt->bindValue(':fbid', $fbid);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $login = $stmt->fetchall();
    $count = count($login);
    if ($count != 0){
        $_SESSION['fbid']=$fbid;
        $_SESSION['id'] = $login[0]['id'];
        header("location:page.php");
    }
    else{
        signup();
    }
}
?>
