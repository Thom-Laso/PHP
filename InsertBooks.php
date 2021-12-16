<?php
    include("connection.php");
?>
<html>
    <head>
        <title>Insert Books</title>
    </head>
    <body>
        <center>
        <?php
            if(isset($_POST["submit"])){
                $bkName=$_POST["Book_Name"];
                $bkAuthor=$_POST["Book_Author"];
                $bkYear=$_POST["Book_Year"];
                $bkId=$_POST["Book_Id"];

                $A_Name=$_POST["Author_Name"];
                $A_Address=$_POST["Author_Address"];
                $A_Contact=$_POST["Author_Contact"];
                $A_Email=$_POST["Author_Email"];

                $sqlbk="insert into book_details values('$bkName','$bkAuthor',$bkYear,'$bkId')";
                $sqlA="insert into book_author values('$A_Name','$A_Address','$A_Contact','$A_Email')";
                if(mysqli_query($dbcon, $sqlbk)){
                    echo "Books Inserted Successfully <br>";
                }else
                echo "Insert Error <br>";

                if(mysqli_query($dbcon, $sqlA)){
                    echo "Author Inserted Successfully <br>";
                }else{
                    echo"Author Error <br>"; 
                }
            }
        ?>

        <form method="POST">
            <table>
                <tr>
                    <td><h1><b>Book Name:</b></h1></td>
                    <td><input type="text" name="Book_Name"></td>
                </tr>
                <tr>
                    <td><h1><b>Author:</b></h1></td>
                    <td><input type="text" name="Book_Author"></td>
                </tr>
                <tr>
                    <td><h1><b>Year:</b></h1></td>
                    <td><input type="numeric" name="Book_Year"></td>
                </tr>
                <tr>
                    <td><h1><b>Book Id:</b></h1></td>
                    <td><input type="text" name="Book_Id"></td>
                </tr>
                <tr>
                    <td><h1><b>Author Name:</b></h1></td>
                    <td><input type="text" name="Author_Name"></td>
                </tr>
                <tr>
                    <td><h1><b>Address:</b></h1></td>
                    <td><input type="text" name="Author_Address"></td>
                </tr>
                <tr>
                    <td><h1><b>Contact No:</b></h1></td>
                    <td><input type="numeric" name="Author_Contact"></td>
                </tr>
                <tr>
                    <td><h1><b>Email Address:</b></h1></td>
                    <td><input type="text" name="Author_Email"></td>
                </tr>
            </table>
            <button name="submit" id="btnInsert">INSERT</button>
        </form>
        </center>
    </body>
</html>
