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

if(isset($_POST["submit"]))
{ 
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
			$bookBranch = $_SESSION["bookBranch"];
			$bookQuantity = $_SESSION["bookQuantity"];
			$bookTitle = $_SESSION["bookTitle"];
			
			$stmt = $conn->query("SELECT * FROM bookstocktable where bookTitle = '$bookTitle'");
			while ($row = $stmt->fetch())
				{ 
					$m1 = $row["Mirpur1"];
					$m2 = $row["Mirpur2"];
					$m10 = $row["Mirpur10"];
					$B = $row["Barishal"];
					
					$m1= intval($m1);
					$m2= intval($m2);
					$m10= intval($m10);
					$B = intval($B); 
				}
					$bookQuantity= intval($bookQuantity);	 
					if($bookBranch == 'Mirpur-1')
					{
						$bookQuantity = $bookQuantity + $m1;
						$stmt = $conn->query("UPDATE `bookstocktable` SET `Mirpur1`='$bookQuantity' where bookTitle= '$bookTitle'");
						 
					}
					elseif($bookBranch == 'Mirpur-2')
					{
						$bookQuantity = $bookQuantity + $m2;
						$stmt = $conn->query("UPDATE `bookstocktable` SET `Mirpur2`='$bookQuantity' where bookTitle= '$bookTitle'");
						
					}
					elseif($bookBranch == 'Mirpur-10')
					{
						$bookQuantity = $bookQuantity + $m10;
						$stmt = $conn->query("UPDATE `bookstocktable` SET `Mirpur10`='$bookQuantity' where bookTitle= '$bookTitle'");
						
					}
					elseif($bookBranch == 'Barishal')
					{
						$bookQuantity = $bookQuantity + $B;
						$stmt = $conn->query("UPDATE `bookstocktable` SET `Barishal`='$bookQuantity' where bookTitle= '$bookTitle'");
						 
					}	
					header('Location: administrator.php');
		
		}
	catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}
	$conn = null;
    
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
        <title>bookAddExistConfirm.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php'; ?>
        <!-- Main div start here-->
        <div class="main_body"> 
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div> 
            <!-- End of Header Section -->

            <?php 
                $bookBranch = $_POST["bookBranch"];
                $bookQuantity = $_POST["bookQuantity"];
                $bookTitle = $_POST["bookTitle"];
				
				$_SESSION["bookBranch"] = $bookBranch;
				$_SESSION["bookQuantity"] = $bookQuantity;
				$_SESSION["bookTitle"] = $bookTitle;
			?>

            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        Add Exist Book
                    </div>
                    <div style="margin-top: 5px;">
                        <div class="inputtextitle" style="width: 25%;">
                            Book Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 25%; margin-left: 2px;">
                            <div  >
                                <?php echo $bookTitle; ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 25%; margin-left: 2px;">
                            <div  >
                                <?php echo $bookBranch; ?>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Quantity&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 25%; margin-left: 2px;">
                            <div  >
                                <?php echo $bookQuantity; ?> &nbsp;pcs
                            </div>
                        </div>
                    </div> 
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="submit" value="Confirm" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                        </div>
                    </div>
                </form>
            </div> 
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