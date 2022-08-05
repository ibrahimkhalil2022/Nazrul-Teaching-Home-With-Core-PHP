<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["submit"]))
{
//session_start();

	include 'connection1.php';
	//$conn = mysqli_connect($servername, $username, $password, $dbname);
	 try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$admin = $_SESSION["user"];
	$batch = $_SESSION["batch"];
    $stdId = $_SESSION["stdId"];
    $stdName = $_SESSION["stdName"];
    $mobile = $_SESSION["mobile"];
    $bookName = $_SESSION["bookName"];
    $bookQuantity = $_SESSION["bookQuantity"];
    $bookRemain = $_SESSION["bookRemain"];
    $totalPrice = $_SESSION["totalPrice"];
    $branch = $_SESSION["sessionAdminBranch"]; 
	
	if ($branch == "Mirpur-1") 
		{
			$stmt = $conn->query("update bookstocktable set `Mirpur1`='$bookRemain' where bookTitle='$bookName'");
		} 
	elseif ($branch == "Mirpur-2") 
		{
			$stmt = $conn->query("update bookstocktable set `Mirpur2`='$bookRemain' where bookTitle='$bookName'");
		}
	elseif ($branch == "Mirpur-10") 
		{
			$stmt = $conn->query("update bookstocktable set `Mirpur10`='$bookRemain' where bookTitle='$bookName'"); 
		}
	elseif ($branch == "Barishal") 
		{
			$stmt = $conn->query("update bookstocktable set `Barishal`='$bookRemain' where bookTitle='$bookName'"); 
		}
	  $d = date("Y-m-d");
	
	$stmt = $conn->query("INSERT INTO `incometable`(`id`, `stdId`, `courseName`, `incomeType`, `branch`, `payment`, `date`) 
	VALUES ('','$stdId','$stdName','Book Sell','$branch','$totalPrice','$d')");
	
	$stmt = $conn->query("INSERT INTO `transaction`(`id`, `stdId`, `stdName`, `branch`, `paidAmount`, `transectionType`, `admin`, `date`) 
	VALUES ('','$stdId','$stdName','$branch','$totalPrice','Book Sell','$admin','$d')");
        header('Location: allAdmin.php');
	 }
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>bookSell2.jsp</title>
        <script>
            function goBack() {
                window.history.back();
            } 
            function myFunction() {
                window.print();
            }
        </script>
    </head>

    <body style="background-color: #f1f1f1">
		<?php include 'headerall.php';?>
		<div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>
            <!-- End of Header Section -->
            
			<!-- All Extra Code Start Here -->
            <div style="text-align: center; font-size: 18px; color: green; min-height: 10px;">
                <!-- message print hele -->
            </div>
            <!-- Start code for receive data from session here-->
            <?php
			include 'connection1.php';
			$branch = $_SESSION["sessionAdminBranch"];
                $batch = $_POST["batch"];
                $stdId = $_POST["stdId"];
                $stdName = $_POST["stdName"];
                $mobile = $_POST["mobile"];
                $bookName = $_POST["bookName"]; 
                $bookQuantitySell = $_POST["bookQuantity"];
			try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					if ($branch == "Mirpur-1") 
					{
						$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'"); 
						while ($row = $stmt->fetch())
							{ 
								$bookPrice = $row["bookPrice"]; 
								$bookAmount = $row["Mirpur1"];
							}
					} 
					elseif ($branch == "Mirpur-2") 
					{
						$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'"); 
						while ($row = $stmt->fetch())
							{ 
								$bookPrice = $row["bookPrice"]; 
								$bookAmount = $row["Mirpur2"];
							}
					}
					elseif ($branch == "Mirpur-10") 
					{
						$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'"); 
						while ($row = $stmt->fetch())
							{ 
								$bookPrice = $row["bookPrice"]; 
								$bookAmount = $row["Mirpur10"];
							}
					}
					elseif ($branch == "Barishal") 
					{
						$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'"); 
						while ($row = $stmt->fetch())
							{ 
								$bookPrice = $row["bookPrice"]; 
								$bookAmount = $row["Barishal"];
							}
					}
							 
						 
                $totalPrice = $bookPrice * $bookQuantitySell;
                $bookRemain = $bookAmount - $bookQuantitySell;
				
				 $_SESSION["batch"]=$batch;
				 $_SESSION["stdId"]=$stdId;
				 $_SESSION["stdName"]=$stdName;
				 $_SESSION["mobile"]=$mobile;
				 $_SESSION["bookName"]=$bookName;
				 $_SESSION["bookQuantity"]=$bookQuantitySell;
				 $_SESSION["bookRemain"]=$bookRemain;
				 $_SESSION["totalPrice"]=$totalPrice; 
				 }
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
			
			if($bookQuantitySell < $bookAmount)
			{
            ?>
            <!-- End code for receive data from session here-->
            <!-- Start book sell code here-->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        Book Selling
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Batch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <?php echo $batch; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Student ID&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <?php echo $stdId; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Student Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <?php echo $stdName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Contact&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <?php echo $mobile; ?>
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Book Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 51.5%;">
                            <?php echo $bookName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Quantity&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 20%;">
                            <?php echo $bookQuantitySell; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Book remain&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 20%;">
                            <?php echo $bookRemain; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Unit Price&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 20%;">
                            <?php echo $bookPrice; ?>&nbsp;&nbsp;BDT
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Total Price&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 20%;">
                            <?php echo $totalPrice; ?>&nbsp;&nbsp;BDT
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
			<?php
			}
			else
			{
			?>
			<div class="adminform">
                 U can Sell Maximum <?php echo $bookAmount; ?> books
            </div>
			<?php 
			}
			?>
            <!----------------------------- End book sell code here------------------------------------>
            <!----------------------------- Footer Start Here -----------------------------------------> 
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