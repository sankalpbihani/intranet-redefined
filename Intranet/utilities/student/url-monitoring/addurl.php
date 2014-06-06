<?php
require_once 'backbone.php';

$user = $_SESSION['iitg_username'];
$url = $_POST['url'];
$title = $_POST['title'];

if(checkURL($url)) {
    $con = connectdb();

    $user = sanitize($con, $user);
    $url = sanitize($con, $url);
    $title = sanitize($con, $title);

    if(checkLogIn($user)){
        $resp = getResp($con, $user);

        if(mysqli_num_rows($resp)>0){
            $data = convArray($resp);

            $data = addURL($data, $url, $title);
            $data = json_encode($data);

            $resp = updateData($con, $user, $data);

            if($resp){
                echo "URL added";
            } else {
                echo "Connection error.";
            }
        } else {
            echo "User does not exist.";
        }
    } else {
        echo "User not logged in.";
    }
} else {     
    echo "Unable to add this URL.";
}
?>