<?php
include 'default.php';
session_start();
$value = $_POST['sign'];
if($value == 1){
    login();
}
else{
    signup();
}
function login(){
    $username = $_POST['name'];
    $password = $_POST['password'];
    $db = getDB();
    if($username='admin' && $password='admin!davinci2k18'){
        $_SESSION['admin']=1;
        $_SESSION['id'] = 0;
        header('location:admin.php');
    }
    else{
        $stmt=$db->prepare('SELECT * FROM users WHERE username = :username and password = :password ' );
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        $login = $stmt->fetchall();
        $count = count($login);
        echo $count;
        if($count != 0 ){
            $_SESSION['username']=$username;
            $_SESSION['id'] = $login[0]['id'];
            header('location:page.php');
        }
        else{
            echo "<script type='text/javascript'>alert('Invalid Username or Password'); location='userlogin.php';</script>";
        }
    }

}

function signup(){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $cpassword = $_POST['cpassword'];
    $db = getDB();
    if($cpassword == $password) {
        $count = exists($username);
        if($count > 0){
            echo "<script type='text/javascript'>alert('Username Exists'); location='usersignup.php';</script>";
        }
        else{
            $stmt=$db->prepare('INSERT INTO users (username,password,email) VALUES (:username,:password,:email)');
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':password', $password);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $stmt=$db->prepare('SELECT * FROM users WHERE username = :username and email = :email ' );
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $query = $stmt->fetch();
            $id = $query['id'];
            $stmt=$db->prepare('INSERT INTO qstns_users (users_id) VALUES (:id)');
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            echo "<script type='text/javascript'>alert('Successfully Sign Up');location='userlogin.php'</script>";
        }
    }
    else{
        echo "<script type='text/javascript'>alert('Password Not Match'); location='usersignup.php';</script>";
    }

}

function exists($username){
    $username = $username;
    $db = getDB();
    $stmt=$db->prepare('SELECT * FROM users WHERE username = :username' );
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $login = $stmt->fetchall();
    $count = count($login);
    return $count;
}
?>
