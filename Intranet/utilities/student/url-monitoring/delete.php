<?php
require_once 'backbone.php';

$user = $_SESSION['iitg_username'];
$url = $_POST['url'];

$con = connectdb();

$user = sanitize($con, $user);
$url = sanitize($con, $url);

if(checkLogIn($user)) {
    $resp = getResp($con, $user);

    if(mysqli_num_rows($resp)>0){
        $data = convArray($resp);

        $data = deleteURL($data, $url);
        $data = json_encode($data);

        $resp = updateData($con, $user, $data);

        if($resp){
            echo "URL deleted";
        } else {
            echo "Connection error.";
        }
    } else {
        echo "User does not exist.";
    }
} else {
    echo "User not logged in.";
}

?>