<?php

require_once 'backbone.php';

$user = $_SESSION['iitg_username'];
$id = $_POST['id'];

$con = connectdb();

$user = sanitize($con, $user);
$id = sanitize($con, $id);

if(checkLogIn($user)) {
    $resp = deleteRequest($con, $user, $id);
    
    if(mysqli_affected_rows($con)>0) {
        echo "Request Deleted";
    } else {
        echo "Invalid Action";
    }
} else {
    echo "User is not logged in.";
}

?>