<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
include 'connection.php';
//$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST["bookEntry"]))
{
//session_start();

	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$bookTitle = $_SESSION["bookTitle"];
			$bookAuthor = $_SESSION["bookAuthor"];
			$isbnNo = $_SESSION["isbnNo"];
			$bookPrice = $_SESSION["bookPrice"];
			$bookEntryDate = $_SESSION["bookEntryDate"];
			 
			$stmt = $conn->query("insert into bookstocktable (`id`, `bookTitle`, `bookAuthor`, `isbnNo`, `bookPrice`, `Mirpur1`, `Mirpur2`, `Mirpur10`, `Barishal`, `lastUpdateDate`) 
			values ('','$bookTitle','$bookAuthor','$isbnNo','$bookPrice','0','0','0','0','$bookEntryDate')");
			header('Location: administrator.php');
			
		}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
                    ?>
}
else
{
	?>
<!DOCTYPE html>
<html>
    <head>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">      
        <title>bookEntryConfirm.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php'; ?> 
        <!-- Main div start here-->
        <div class="main_body"> 
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div> 
            <!-- End of Header Section -->

            <!-- All Extra Code Start Here -->
            <?php 
                $bookTitle = $_POST["bookTitle"];
                $bookAuthor = $_POST["bookAuthor"];
                $isbnNo = $_POST["isbnNo"];
                $bookPrice = $_POST["bookPrice"]; 
                $bookEntryDate=date("Y-m-d");  
				
				$sql = "SELECT * FROM bookstocktable where bookTitle='$bookTitle'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) >= 1) 
				{ 
					echo "<center><b>"."Book ".$bookTitle." Already Exist"."</b></center>";
				} 
				else 
				{  
				$_SESSION["bookTitle"] = $bookTitle;
                $_SESSION["bookAuthor"] = $bookAuthor;
                $_SESSION["isbnNo"] = $isbnNo;
                $_SESSION["bookPrice"] = $bookPrice;
                $_SESSION["bookEntryDate"] = $bookEntryDate;
				
				
            ?>
            
            <!-- All Extra Code End Here -->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>New Book Entry</u>
                    </div>
                   
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Book Title&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;">
                            <?php echo $bookTitle; ?>
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Author&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;">
                            <?php echo $bookAuthor; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            ISBN No.&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;">
                            <?php echo $isbnNo; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Price&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;;">
                            <?php echo $bookPrice; ?>
                        </div>
                    </div>
                    
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Go Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="bookEntry" value="Confirm" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                        </div>
                    </div> 
                </form>
            </div> 
				<?php } ?>
			<!--- Code end for set session ---> 
            <!-- Footer Start Here -------------------------------------------------------------------- -->  
            <hr>
            <div class="footer">
                <div class="icon">
                    <a href="#">N@zrul</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Courses</a>
                </div>
                <div class="icon">
                    <a href="#">Policy</a>
                </div>
                <div class="icon">
                    <a href="#">Suggest</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Career</a>
                </div>
                <div class="icon">
                    <a href="#">Contact US</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
}
?>