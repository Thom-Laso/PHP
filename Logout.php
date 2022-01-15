<?php
    session_start();
    session_destroy();

    echo"<center><font color='red'>Logging out..</font></center>";
    header ('Refresh: 2; URL=login_details.php');//2 here mean wait for 2 secends and then go to login_details.php
?>
<html>
    <body bgcolor="pink" text="black"></body>
</html>