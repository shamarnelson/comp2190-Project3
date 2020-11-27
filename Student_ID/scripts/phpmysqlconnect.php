<?php

require_once 'dbconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
    $conn = null;
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
if( isset( $_POST['submit_form'] ) )
{
    $cID = $_POST['cID'];
    $constID = $_POST['constID'];
    $pollDivID = $_POST['pollDivID'];
    $pollStn = $_POST['pollStn'];
    $votesforCand1 = $_POST['votesforCand1'];
    $votesforCand2 = $_POST['votesforCand2'];
    $rejectedBal = $_POST['rejectedBal'];
    $totalNumVote = $_POST['totalNumVote'];
    $hiddenField = $_POST['hiddenField'];
}





