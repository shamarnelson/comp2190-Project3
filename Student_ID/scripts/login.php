<?php


function userLogin($username,$password)
{
    if(!(VoteLogDB($username,$password)))
    {
        return false;
    }
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Succesful"
    header('Location: /student_id/p2.html');
  
}

function 