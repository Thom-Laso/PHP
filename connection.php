<?php
    $dbcon= new mysqli("localhost","root", "","Book");
    if(!$dbcon)
        echo "not Connected";
    else
        echo "Connected Successfully";
?>