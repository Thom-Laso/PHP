<?php
    require "connection.php";
?>
<?php
    session_start();
    if (!isset($_SESSION['txtbxUsername']))
    header('Location: login_details.php');
?>
<html>
    <head>
        <title>Update Books</title>
        <body bgcolor="#2decEc">
            <center>
                <table>
                    <form method="post">
                        <tr>
                            <td><b>Enter Your Book Id</b></td>
                            <td><input type="text" name="BkId" placeholder="Book Id"></td>
                            <td><input type="submit" name="search" value="Search"></td>

                            <?php
                                if(isset($_POST['search'])){
                                    $BookId=$_POST['BkId'];

                                    $Title="";
                                    $Author="";
                                    $Year="";

                                    $sql="select * from book_details where Book_Id='$BookId'";
                                    $result=mysqli_query($dbcon, $sql);
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            $BookId=$row["Book_Id"];
                                            $Title=$row["Book_Name"];
                                            $Author=$row["Book_Author"];
                                            $Year=$row["Book_Year"];
                                        }
                                    }
                                    else
                                        echo "<center>Book Id does not exist</center>";
                                }
                            ?>
                        </tr>
                        <div class="bookTable" size="10">
                            <tr>
                                <td><b>Book Id</b></td>
                                <td><input type="text" name="txtbxBkId1" value="<?php echo @ $BookId ?>"readonly></td>
                            </tr>
                            <tr>
                                <td><b>Book Name</b></td>
                                <td><input type="text" name="txtbxTitle" value="<?php echo @ $Title ?>"></td>
                            </tr>
                            <tr>
                                <td><b>Author</b></td>
                                <td><input type="text" name="txtbxAuthor" value="<?php echo @ $Author ?>"></td>
                            </tr>
                            <tr>
                                <td><b>Year</b></td>
                                <td><input type="text" name="txtbxYear" value="<?php echo @ $Year ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="update" value="Update"></td>
                            </tr>
                        </div>
                        
                    </form>
                </table>
            </center>
        </body>
    </head>
</html>

<?php
    if(isset($_POST['update'])){
        $BookId=$_POST["txtbxBkId1"];
        $Title=$_POST["txtbxTitle"];
        $Author=$_POST["txtbxAuthor"];
        $Year=$_POST["txtbxYear"];

        echo "sdsa.",$BookId;
        $sql="update book_details set Book_Name='$Title',Book_Author='$Author',Book_Year='$Year'where Book_Id='$BookId'"; 
    } 
?>