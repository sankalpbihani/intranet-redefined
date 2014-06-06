<?php

require_once 'backbone.php';

$user1 = $_SESSION['iitg_username'];
$user2 = $_POST['user2'];
$title = $_POST['title'];
$message = $_POST['message'];
$start = convTimeStamp($_POST['start']);
$end = convTimeStamp($_POST['end']);

$con = connectdb();

$user1 = sanitize($con, $user1);
$user2 = sanitize($con, $user2);
$title = sanitize($con, $title);
$message = sanitize($con, $message);
$start = sanitize($con, $start);
$end = sanitize($con, $end);

if(checkLogin($user1)) {
    
    if($start<$end)
    {    
        $flag = checkSchedule($con, $user1, $user2, $start, $end);
        if($flag) {
            $resp = sendRequest($con, $user1, $user2, $title, $message, $start, $end);
            
            if($resp) {
                echo "Request Sent";
            } else {
                echo mysqli_error($con);
                echo "Database error";
            }
        } else {
            echo "Time slot already booked";
        }
    } else {
        echo "Invalid timings";
    }
} else {
    echo "User not logged in.";
}

?>