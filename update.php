<?php
include 'default.php';
session_start();
$id = $_SESSION['id'];
$fbid = $_SESSION['fbid'];
$db = getDB();
$stmt=$db->prepare('SELECT * FROM users WHERE fbid = :fbid and id = :id ' );
$stmt->bindValue(':fbid', $fbid);
$stmt->bindValue(':id', $id);
$stmt->execute();
$query = $stmt->fetch();
$q_id = array();
array_push($q_id, $query['question_id']);
$ques_id = $query['question_id'];

$stmt=$db->prepare('SELECT * FROM qstns WHERE qid = :id ' );
$stmt->bindValue(':id', $ques_id);
$stmt->execute();
$query = $stmt->fetch();
$qname = array();
array_push($qname, $query['qname']);

$data = array(
    'q_id' => $q_id,
    'qname' => $qname
);
echo json_encode($data);
?>