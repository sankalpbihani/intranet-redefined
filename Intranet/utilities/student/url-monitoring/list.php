<?php
require_once 'backbone.php';

$user = $_SESSION['iitg_username'];
$con = connectdb();

$user = sanitize($con, $user);

if(checkLogIn($user)) {
    $resp = getResp($con, $user);

    if(mysqli_num_rows($resp)>0) {   
        $data = convArray($resp);
        echo json_encode($data);
    } else {
        echo "User does not exist.";
    }
} else {
    echo "User not logged in.";
}
?>