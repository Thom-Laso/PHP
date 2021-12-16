<?php
    $dbcon= new mysqli("localhost","root", "","book_database");
    if(!$dbcon)
        echo "not Connected";
    else
        echo "Connected Successfully";
?>