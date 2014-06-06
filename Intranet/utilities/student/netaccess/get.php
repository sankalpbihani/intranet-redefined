<?php
    $url = $_POST['url'];

    if((strpos($url, "http://en.wikipedia.org") == 0)||(strpos($url, "http://jatinga.iitg.ernet.in/") == 0)) {
        echo file_get_contents($url);
    }
?>