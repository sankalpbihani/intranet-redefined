<?php

//start session
session_start();

$_SESSION['iitg_username'] = $_SESSION['user_nm'];

// set default timezone to Indian Time
date_default_timezone_set('Asia/Calcutta');

//connection to database
function connectdb() {
    return mysqli_connect('localhost', 'kunal15595', '', 'grp3');  
}

//converts DateTime type date and time to timestamp
function convTimeStamp($datetime, $format='m/d/Y H:i') {
    return DateTime::createFromFormat($format, $datetime)->getTimeStamp();
}

//convert timestamp to DateTime and then String  
function convDateTime($timestamp, $format='H:i, d-M') {
    return date($format, $timestamp);
}

//sanitize given input
function sanitize($con, $input) {
    return mysqli_real_escape_string($con, $input);
}

//check if user is logged in
function checkLogIn($user) {
    return isset($_SESSION['logged_in']);
    //return true;
}

//check if schedule is free during requested time
function checkSchedule($con, $user1, $user2, $start, $end) {
    $sql = "select * from appointment_schedule where 
    (user1='$user1' AND approved='1' AND end>'$start' AND start<'$end') OR 
    (user1='$user2' AND approved='1' AND end>'$start' AND start<'$end') OR 
    (user2='$user1' AND approved='1' AND end>'$start' AND start<'$end') OR 
    (user2='$user2' AND approved='1' AND end>'$start' AND start<'$end')";
    
    $resp = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($resp) > 0) {
        return 0;
    } else {
        $sql = "select * from appointment_schedule where 
        (user1='$user1' AND approved='0' AND end>'$start' AND start<'$end') OR 
        (user1='$user2' AND approved='0' AND end>'$start' AND start<'$end') OR 
        (user2='$user1' AND approved='0' AND end>'$start' AND start<'$end') OR 
        (user2='$user2' AND approved='0' AND end>'$start' AND start<'$end')";
        
        $resp = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($resp) > 0) {
            return 1;
        } else {
            return 2;
        }
    }
}

//update table to send request
function sendRequest($con, $user1, $user2, $title, $message, $start, $end) {
    $sql = "insert into appointment_schedule (user1, user2, title, message, start, end) 
    values ('$user1','$user2','$title','$message','$start','$end')";
    
    return mysqli_query($con, $sql);
}

//get requests sent by the user
function getSent($con, $user) {
    $sql = "select * from appointment_schedule where user1='$user'";
    return mysqli_query($con, $sql);
}

//get requests recieved by the user
function getRecieved($con, $user) {
    $sql = "select * from appointment_schedule where user2='$user'";
    return mysqli_query($con, $sql);
}

//marks requests as seen
function markSeen($con, $user) {
    $sql="update appointment_schedule set seen='1' where user2='$user'";
    $resp = mysqli_query($con, $sql);
}

//convert response to a 2d array of all rows
function convArray2D($resp) {
    $data = array();
    $i = 0;
    
    while($row = mysqli_fetch_assoc($resp)) {
        $data[$i] = $row;
        $data[$i]['start'] = convDateTime($data[$i]['start']);
        $data[$i]['end'] = convDateTime($data[$i]['end']);
        $i++;
    }
    
    return $data;
}


//convert given array to a table like structure to be printed
function convTable($array) {
    $str = "";
    
    foreach ($array as $key=>$value) {
        $str = $str . "ID      : " . $value['id'] . "<br/>";
        $str = $str . "To      : " . $value['user2'] . "<br/>";
        $str = $str . "From    : " . $value['user1'] . "<br/>";
        $str = $str . "Title   : " . $value['title'] . "<br/>";
        $str = $str . "Message : " . $value['message'] . "<br/>";
        $str = $str . "From    : " . $value['start'] . "<br/>";
        $str = $str . "To      : " . $value['end'] . "<br/>";
        $str = $str . "Seen    : " . $value['seen'] . "<br/>";
        $str = $str . "Approved: " . $value['approved'] . "<br/>";
        $str = $str . "Comments: " . $value['comments'] . "<br/>";
        $str = $str . "<br/>";
    }
    
    return $str;
}

//updates table to approve a request
function approve($con, $user, $id,$comments) {
    $sql = "update appointment_schedule set approved='1',comments='$comments' where id='$id' AND user2='$user'";
    return mysqli_query($con, $sql);
}

//checks clashes before some action on a requested entry
function checkIdClash($con, $id) {
    $sql = "select user1,user2,start,end from appointment_schedule where id='$id'";
    $resp = mysqli_query($con, $sql);
    $arr = mysqli_fetch_assoc($resp);
    
    return checkSchedule($con, $arr['user1'], $arr['user2'], $arr['start'], $arr['end']);
}

//updates table to decline a request
function decline($con, $user, $id,$comments) {
    $sql = "update appointment_schedule set approved='2',comments='$comments' where id='$id' AND user2='$user'";
    return mysqli_query($con, $sql);
}

//deletes a request from database
function deleteRequest($con, $user, $id) {
    $sql = "delete from appointment_schedule where id='$id' AND user1='$user'";
    return mysqli_query($con, $sql);
}

?>