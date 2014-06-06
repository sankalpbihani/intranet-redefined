<?php
    if (!isset($_SESSION)) {
    	        session_start();
    	    }
     require_once 'config/config.php';
     require_once 'config/pattern.php';

     $http_client_ip=isset($_SERVER['HTTP_CLIENT_IP']);
     $http_x_forwarded_for=isset($_SERVER['HTTP_X_FORWARDED_FOR']);
     $remote_addr=$_SERVER['REMOTE_ADDR'];


     if(!empty($http_client_ip))
     {
        $ip_address=$http_client_ip;
     }
     else if(!empty($http_x_forwarded_for))
     {
        $ip_address=$http_x_forwarded_for;
     }
     else 
     {
        $ip_address=$remote_addr;
     }
     if (!isset($_SESSION)) {
     	        session_start();
     	    }
     $_SESSION['ip_address'] = $ip_address;
     $_SESSION['login_time'] = date('m/d/Y h:i:s a', time());

        $pageStatus = "NEW";
          
       
       if (!preg_match(getUserNamePattern(), $username)){
           $pageStatus = "INVALID_USERNAME";
           //echo "INVALID_USERNAME";
       }
       elseif (!preg_match(getPasswordPattern(), $password)) {
           $pageStatus = "INVALID_PASSWORD";
           //echo "INVALID_PASSWORD";
       }
       
       else {
           $pageStatus = "REQUESTED";
       }
        
    
        

        //die('bhag saalA');
    if ($pageStatus == "REQUESTED") {
        $pass_hashed=md5($password);
        $result = "NOTFOUND";
        require_once 'config/connect.php';
        $query1 = "SELECT last_login_time, last_login_ip, role from list WHERE user_id='".$username."'";
        $result1 = mysql_query($query1);
        while ($row = mysql_fetch_array($result1)) {
            $_SESSION['last_login_ip'] = $row['last_login_ip'];
            $_SESSION['last_login_time'] = $row['last_login_time'];
            $_SESSION['user_type'] = $row['role'];
            $user_type = $row['role'];
            
        }    
        
        $query2 = " INSERT INTO `list` (`last_login_ip`, `last_login_time`)
                VALUES ('". mysql_real_escape_string( $_SESSION['last_login_ip'] ) ."',  '". mysql_real_escape_string( $_SESSION['last_login_time'] ) ."')
                ";
        mysql_query($query2);

            if($user_type=="std") {
                $sql = "SELECT * FROM student,advisor WHERE student.advisor_id=advisor.advisor_id AND user_nm='" . $username . "' AND `student`.`password_hashed`='" . $pass_hashed . "'";
                $sql_ip = "UPDATE student SET last_login";
                
                $rs = mysql_query($sql);
                while ($row = mysql_fetch_array($rs)) {
                    $result = "FOUND";
                    //$pageStatus=1;
                    if (!isset($_SESSION)) {
                    	        session_start();
                    	    }
                    $_SESSION['user_nm'] = $username;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['roll_number'] = $row['roll_number'];
                    $_SESSION['class'] = $row['class'];
                    $_SESSION['advisor_name'] = $row['advisor_name'];
                    $_SESSION['iitg_username'] = $username;
					$_SESSION['iitg_password'] = $password;
					$_SESSION['logged_in'] = true;
                }
            }else if($user_type=="fac") {
                $sql = "SELECT advisor_name FROM advisor WHERE advisor_id='" . $username . "' and `password_hashed`='" . $pass_hashed . "'";
                $rs = mysql_query($sql);
                while ($row = mysql_fetch_assoc($rs)) {
                    $result = "FOUND";
                    if (!isset($_SESSION)) {
                    	        session_start();
                    	    }
                    $_SESSION['user_nm'] = $username;
                    $_SESSION['name'] = $row['advisor_name'];
                    $_SESSION['iitg_username'] = $username;
                    $_SESSION['iitg_password'] = $password;
                    $_SESSION['logged_in'] = true;
                }
            }else if($user_type=="adm") {
                $sql = "SELECT name FROM users WHERE user_nm='" . $username . "' and `password_hashed`='" . $pass_hashed . "'";
                $rs = mysql_query($sql);
                while ($row = mysql_fetch_assoc($rs)) {
                    $result = "FOUND";
                    if (!isset($_SESSION)) {
                    	        session_start();
                    	    }
                    $_SESSION['user_nm'] = $username;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['role'] = "adm";
                    $_SESSION['iitg_username'] = $username;
                    $_SESSION['iitg_password'] = $password;
                    $_SESSION['logged_in'] = true;
                }
            }else {
                $result == "NOTFOUND";
            }
        
        mysql_close($con);
// redirect to corresping panel - std, admin or faculty
        
        
    }
    else {
        //$pageStatus = "INVALID";
        header("Location: index.php ");
    }
?>