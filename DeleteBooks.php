<?php
    include("connection.php");
?>

<html>
    <head>
        <title>Delete Books</title>
    </head>
    <body>
        <center>
            <?php
            //Display Books
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
            //Display Author
                    $sql="select * from book_author";
                    $result=$dbcon -> query($sql);
                    echo "<table border=2><tr><td>Author Name</td><td>Address</td><td>Contact Number</td><td>Email Id</td></tr>";
                    if($result -> num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<td>".$row["Author_Name"]."</td>";
                            echo "<td>".$row["Author_Address"]."</td>";
                            echo "<td>".$row["Author_Contact"]."</td>";
                            echo "<td>".$row["Author_Email"]."</td></tr>";
                        }
                        echo"</table><br>";
                    }
                    else{
                        echo"No Result </center>";
                    }

            //Delete Book
                    if(isset($_POST["bksubmit"])){
                        $bkId=$_POST["txtbxBook_Id"];
                        $sqlbk="delete from book_details where Book_Id=$bkId";

                        if(mysqli_query($dbcon, $sqlbk)){
                            echo "Book deleted successfully";
                        }else
                            echo "Cannot Delete Book";
                        
                    }
            //Delete Author
                    if(isset($_POST["Asubmit"])){
                        $A_Email=$_POST["txtbxAuthor_Email"];
                        $sqlA="delete from book_author where Author_Email=$A_Email";

                        if(mysqli_query($dbcon, $sqlA)){
                            echo "Author deleted successfully";
                        }else
                            echo "Cannot Delete Author";
                       
                    }
            ?>

            <form method="post">
                <table>
                    <tr>
                        <td>Book ID:</td><td><input type="text" name="txtbxBook_Id" value=""></td>
                    </tr>
                    <tr>
                        <th colspan=2><input type="submit" name="bksubmit" value="DELETE"></th>
                    </tr>

                    <tr>
                        <td>Author Email:</td><td><input type="text" name="txtbxAuthor_Email" value=""></td>
                    </tr>
                    <tr>
                        <th colspan=2><input type="submit" name="Asubmit" value="DELETE"></th>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>