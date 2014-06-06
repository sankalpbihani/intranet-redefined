<?php
require_once 'backbone.php';

$user = $_SESSION['iitg_username'];

$con = connectdb();

$user = sanitize($con, $user);

$resp = getResp($con, $user);

if(checkLogIn($user)){
    if(mysqli_num_rows($resp)>0){
        $data = convArray($resp);
        
        $data = updateHash($data);

        if(isset($data['updated']))
            $updated = json_encode($data['updated']);
        else
            $updated=json_encode(array());
        $resp = updateData($con, $user, $updated);

        if($resp) {
            if(isset($data['changes'])) {
                echo json_encode($data['changes']);
            } else {
                echo "";
            }
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