<?php

session_start();
//$_SESSION['iitg_username'] = "user";

//connection to database
function connectdb() {
    return mysqli_connect('localhost', 'kunal15595', '', 'grp3');   
}

//run a select query and return response
function getResp($con, $user){
    $sql = "select * from url_monitor where user = '$user'";
    return mysqli_query($con, $sql);
}

//converts reponse to array with json data then to array
function convArray($resp){
    $data = mysqli_fetch_assoc($resp);
    return json_decode($data['data']);
}

//adds url to given list if not present and returns the final list
function addURL($olddata, $url, $title){
    $updated=array();

    if($olddata) {
        foreach($olddata as $key=>$value){
            $updated[$key]=$value;
        }
    }

    $updated[$url] = new stdClass;
    
    $updated[$url]->hash=md5(file_get_contents($url));
    $updated[$url]->title=$title;
    
    return $updated;
}

//removes url from given list if present and returns the final list
function deleteURL($olddata, $url){
    $updated=array();

    foreach($olddata as $key=>$value){
        if($key != $url)
        {
            $updated[$key]=$value;
        }
    }

    return $updated;
}

//runs query to update data and returns response
function updateData($con, $user ,$data) {
    $sql = "update url_monitor set data = '$data' where user = '$user'";
    return mysqli_query($con, $sql);
}

//converts array to appropriate string to display, depending whether value is required or not
function convString($data, $val=true) {
    $str = "";

    foreach($data as $key=>$value) {
        if($val)
            $str = $str . $key . "=>" . $value . '<br/>';
        else
            $str = $str . $key . '<br/>';
    }

    return $str;
}

//takes input as old array returns updated hash values and changes
function updateHash($olddata) {
    $new = array();
    
    if($olddata)
    {
        foreach($olddata as $key=>$value) {
            $hash = md5(file_get_contents($key));
            if($hash != $value->hash){
                $new['changes'][$key] = new stdClass;
                $new['changes'][$key]->hash=$hash;
                $new['changes'][$key]->title=$value->title;
            }
            $new['updated'][$key] = new stdClass;
            $new['updated'][$key]->hash=$hash;
            $new['updated'][$key]->title=$value->title;
        }
    }

    return $new;
}

//check if url exists
function checkURL($url) {
    $handle = @fopen($url,'r');
    if($handle !== false){
       return true;
    }
    else{
       return false;
    }
}

//sanitize user input
function sanitize($con, $input) {
    return mysqli_real_escape_string($con, $input);
}

//add new user and reurn response
function addUser($con, $user) {
    $sql = "insert into url_monitor (user) values ('$user')";
    return mysqli_query($con, $sql);
}

//check if user is logged in
function checkLogIn($user) {
    return isset($_SESSION['logged_in']);
    //return true;
}
?>