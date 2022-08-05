<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["costSubmit"]))
{
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 					
			$costTitle = $_SESSION["costTitle"];
			$personName = $_SESSION["personName"];
			$mobile = $_SESSION["mobile"];
			$purpose = $_SESSION["purpose"];
			$itemAmount = $_SESSION["itemAmount"];
			$costAmount = $_SESSION["costAmount"];
			$dueAmount = $_SESSION["dueAmount"];
			$user = $_SESSION["user"];
			$d=date("Y-m-d");
			
			$stmt = $conn->query("insert into costtable(`id`, `costType`, `receiverName`, `receiverContact`, `costPurpose`, `itemNumber`, `costAmount`, `userName`, `userBranch`, `entryDate`, `status`)
				values ('','$costTitle','$personName','$mobile','$purpose','$itemAmount','$costAmount','$user','$branch','$d','1')");
                
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
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>costConfirm.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'headerall.php'; ?>
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>
            <!-- End of Header Section -->

            <!-- All Extra Code Start Here -->
            <div style="text-align: center; font-size: 18px; color: red; min-height: 10px;">
                <?php  
                    $costTitle = $_POST["costTitle"];
                    $personName = $_POST["personName"];
                    $mobile = $_POST["mobile"];
                    $purpose = $_POST["purpose"];
                    $itemAmount = $_POST["itemAmount"];
                    $costAmount = $_POST["costAmount"];
					
					$_SESSION["costTitle"] = $costTitle;
					$_SESSION["personName"] = $personName;
					$_SESSION["mobile"] = $mobile;
					$_SESSION["purpose"] = $purpose;
					$_SESSION["itemAmount"] = $itemAmount;
					$_SESSION["costAmount"] = $costAmount; 
					
                ?>
            </div>

            <!-- Start book sell code here-->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        Fee Management
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            Cost Type&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" placeholder="Batch No." class="input_box" style="width: 98%;" value="<?php echo $costTitle; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            Name(To whom/Company)&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" placeholder="Batch No." class="input_box" style="width: 98%;" value="<?php echo $personName; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            Mobile &nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" placeholder="Batch No." class="input_box" style="width: 98%;" value="<?php echo $mobile; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            Purpose &nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" placeholder="Batch No." class="input_box" style="width: 98%;" value="<?php echo $purpose; ?>" disabled="" />
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            Amount(Item numbers)&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" placeholder="Batch No." class="input_box" style="width: 98%;" value="<?php echo $itemAmount; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            Amount(Cost)&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" placeholder="Batch No." class="input_box" style="width: 98%;" value="<?php echo $costAmount; ?>" disabled="" />
                        </div>
                    </div> 
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="costSubmit" value="Confirm" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                        </div>
                    </div>  
                </form>
            </div>
            <!-- End book sell code here-->

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
