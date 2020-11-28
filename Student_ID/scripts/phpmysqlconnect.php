<?php

require_once 'dbconfig.php';
require_once 'p1.html'

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
    $conn = null;

} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
$insertData= "INSERT INTO StationVotes 
(id, constituency_id,clerk_id,poll_division_id,polling_station_code,candidate1Votes,candidate2Votes
rejectedVotes,totalVotes) VALUES('$id','$constituency_id','$clerk_id','$poll_division_id','$polling_station_code','$candidate1Votes','$candidate2Votes',

'$rejectedVotes','$totalVotes')";

if( isset( $_POST['username']&& isset($_POST['password']) ) )
{
    $username=$_POST['username'];
    $password=$_POST['password'];

}
$stmt = $conn ->query("SELECT * FROM StationVotes");
$results = $stmt ->fetchALL(PDO:: FETCH_ASSOC);

$htmlTable .= <p1 class="html"></p1>
echo $htmlTable;




?>
