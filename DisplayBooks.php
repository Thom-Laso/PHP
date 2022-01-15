<?php
    include("connection.php");
?>
<?php
    session_start();
    if (!isset($_SESSION['txtbxUsername']))
    header('Location: login_details.php');
?>

<html>
    <head>
        <title>Display Books</title>
    </head>
    <body>
        <center>
            <?php

                if(isset($_POST["submit"])){
                    $sql="select * from book_details";
                    $result=$dbcon -> query($sql);
                    echo "<table border=2><tr><td>Book Name</td><td>Book Author</td><td>Year</td><td>Book Id</td></tr>";
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<td>".$row["Book_Name"]."</td>";
                            echo "<td>".$row["Book_Author"]."</td>";
                            echo "<td>".$row["Book_Year"]."</td>";
                            echo "<td>".$row["Book_Id"]."</td></tr>";
                        }
                        echo"</table><br>";
                    }
                    else{
                        echo"No Result </center>";
                    }
                }

                if(isset($_POST["submit"])){
                    $sql="select * from book_author";
                    $result=$dbcon -> query($sql);
                    echo "<table border=2><tr><td>Author Name</td><td>Address</td><td>Contact Number</td><td>Email Id</td><td>Author Id</td></tr>";
                    if($result -> num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<td>".$row["Author_Name"]."</td>";
                            echo "<td>".$row["Author_Address"]."</td>";
                            echo "<td>".$row["Author_Contact"]."</td>";
                            echo "<td>".$row["Author_Email"]."</td>";
                            echo "<td>".$row["AuthorId"]."</td></tr>";

                        }
                        echo"</table><br>";
                    }
                    else{
                        echo"No Result </center>";
                    }
                }
            ?>

            <form method="post">
                <h4>Display Available Books</h4>
                <input type="submit" name="submit" value="DISPLAY">
            </form>
            <br><br>
        </center>
    </body>
</html>