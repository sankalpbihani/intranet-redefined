<?php

require_once 'backbone.php';

$user = $_SESSION['iitg_username'];

$con = connectdb();

$user = sanitize($con, $user);

if(checkLogIn($user)) {
    
    $ret = array();
    
    $resp = getSent($con, $user);
    $arr = convArray2D($resp);
    $ret['sent'] = $arr;
    
    $resp = getRecieved($con, $user);
    markSeen($con, $user);
    $arr = convArray2D($resp);
    $ret['recieved'] = $arr;
    
    echo json_encode($ret);
    
} else {
    echo "User is not logged in.";
}

?>