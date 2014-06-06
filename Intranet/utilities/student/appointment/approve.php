<?php

require_once 'backbone.php';

$user = $_SESSION['iitg_username'];
$id = $_POST['id'];
$comments = $_POST['comments'];

$con = connectdb();

$user = sanitize($con, $user);
$id = sanitize($con, $id);
$comments = sanitize($con, $comments);

if(checkLogIn($user)) {
    if(checkIdClash($con, $id)){
        $resp = approve($con, $user, $id, $comments);
        
        if(mysqli_affected_rows($con)>0) {
            echo "Request Approved";
        } else {
            echo "Invalid Action";
        }
    } else {
        echo "Time slot no longer free or already accepted";
    }
} else {
    echo "User is not logged in.";
}

?>