<?php
    require "connection.php";
?>
<html>
    <head>
        <body>
            <h3><center>Register</h3>
                <?php
                    if(isset($_POST['register'])){
                        $username=$_POST["txtbxUsername"];
                        $password=$_POST["txtbxPassword"];

                        $sql="insert into login_details(Username,Password) values('$username','$password')";

                        $result=mysqli_query($dbcon,$sql);
                        if(!$result)
                        die(mysql_error());
                        else
                        echo "<center> You Have Registered Successfully <a href='login_details.php'></a>Login</center>";
                    }
                ?>
                </center>
                <form method="post">
                    <center>
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="txtbxUsername" placeholder="Email address" required="required"></td>
                            </tr>

                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="txtbxPassword" placeholder="Password" required="required"></td>
                            </tr>

                            <tr>
                                <td><button name="register">Create</button></td>
                            </tr>

                            <tr>
                                <td><a href="login_details.php">Login</td>
                            </tr>
                        </table>
                    </center>
                </form>
        </body>
    <head>
</html>