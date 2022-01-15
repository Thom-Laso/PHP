<?php
    session_start();
?>

<html>
    <head>
        <body>
            <h3><center>Login</center></h3><br>
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
                                <td><input type="submit" name="login" value="Login"></td>
                                <td><input type="reset" value="Reset"></td>
                            </tr>

                            
                            <tr>
                                <td><a href="forgot.php">Forgot Password</td>
                            </tr>

                            <tr>
                                <td><a href="create_user.php">Signup</td>
                            </tr>
                        </table>
                    </center>
                </form>
        </body>
    </head>
</html>

<?php
    require "connection.php";
    if(isset($_POST['login'])){
        $username=$_POST["txtbxUsername"];
        $password=$_POST["txtbxPassword"];
        $_SESSION['txtbxUsername']=$username;

        $sql="select * from login_details where Username='$username' and Password='$password'";

        $result=mysqli_query($dbcon,$sql);
        $row=mysqli_num_rows($result);

        if($row==1){
            header("Location: TheHomePage.php");
        }
        else
            echo"<br>Sorry, your credentials are not valid";
    }
?>