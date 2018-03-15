<?php
include 'default.php';
include 'loginstatus.php';
session_start();
$q_id = $_POST['q_id'];
$ans = $_POST['ans'];
$id = $_SESSION['id'];
$fbid = $_SESSION['fbid'];
if( $q_id == NULL) {
    header('location:page.php');
}
else {
    $db = getDB();
    $stmt=$db->prepare('SELECT * FROM qstns WHERE qid = :id ' );
    $stmt->bindValue(':id', $q_id);
    $stmt->execute();
    $query = $stmt->fetch();
    $c_a = $query['c_a'];
    if ($c_a == $ans) {
        $stmt = $db->prepare('SELECT * FROM users WHERE fbid = :fbid and id = :id ');
        $stmt->bindValue(':fbid', $fbid);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $query = $stmt->fetch();
        $curQues_id = $query['question_id'];
        $upQues_id = $curQues_id + 1;
        $curlevel = $upQues_id;
        $uplevel = $curlevel + 1;
        $stmt = $db->prepare('UPDATE qstns_users SET `submission` = `submission` + 1 WHERE qstns_id = :curQues_id and users_id = :id ') or die ('Error26');;
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':curQues_id', $curQues_id);
        $stmt->execute();
        $stmt = $db->prepare('UPDATE users SET `question_id` = `question_id` + 1 WHERE fbid = :fbid and id = :id ');
        $stmt->bindValue(':fbid', $fbid);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $stmt = $db->prepare('INSERT INTO qstns_users (users_id,qstns_id,level) VALUES (:id,:upQues_id,:level)');
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':upQues_id', $upQues_id);
        $stmt->bindValue(':level', $uplevel);
        $stmt->execute();
        header('location:page.php');
    } else {
        $stmt = $db->prepare('SELECT * FROM users WHERE fbid = :fbid and id = :id ');
        $stmt->bindValue(':fbid', $fbid);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $query = $stmt->fetch();
        $curQues_id = $query['question_id'];
        $stmt = $db->prepare('UPDATE qstns_users SET `submission` = `submission` + 1 WHERE qstns_id = :curQues_id and users_id = :id ');
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':curQues_id', $curQues_id);
        $stmt->execute();
        echo "<script type='text/javascript'>alert('Try again Mate!'); location='page.php';</script>";
    }
}


?>
