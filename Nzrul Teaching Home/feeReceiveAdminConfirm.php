<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["feesubmit"]))
{
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			
			$stdId = $_SESSION["stdId"];
			$stdName = $_SESSION["stdName"];
			$feeTitle = $_SESSION["feeTitle"];
			$mobile = $_SESSION["mobile"];
			$batch = $_SESSION["batch"];
			$feeAmount = $_SESSION["feeAmount"];
			$branch = $_SESSION["sessionAdminBranch"];		 
			$user = $_SESSION["user"];
			$d=date("Y-m-d");
						
			$stmt = $conn->query("INSERT INTO `incometable`(`id`, `stdId`, `courseName`, `incomeType`, `branch`, `payment`, `date`) 
			values ('','$stdId','$feeTitle','$feeTitle','$branch','$feeAmount','$d')");
			
			$stmt = $conn->query("INSERT INTO `transaction`(`id`, `stdId`, `stdName`, `branch`, `paidAmount`, `transectionType`, `admin`, `date`)
			values ('','$stdId','$stdName','$branch','$feeAmount','$feeTitle','$user','$d')");
			
			header('Location: feePrintAllAdmin.php');
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
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>feeReceiveConfirm.jsp</title> 
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'headerall.php';?>
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>
            <!-- End of Header Section -->

            <!-- All Extra Code Start Here -->
            <div style="text-align: center; font-size: 18px; color: red; min-height: 10px;">
               <?php 
		    $batch = $_POST["batch"];
                    $stdId = $_POST["stdId"];
                    $stdName = $_POST["stdName"];
                    $mobile = $_POST["mobile"];
                    $feeTitle = $_POST["feeTitle"];
                    $feeAmount = $_SESSION["feeAmount"];
					
					$_SESSION["batch"]=$batch;
					$_SESSION["stdId"]=$stdId;
					$_SESSION["stdName"]=$stdName;
					$_SESSION["mobile"]=$mobile; 
					$_SESSION["feeTitle"]=$feeTitle; 
                ?>
            </div>

            <!-- Start book sell code here-->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        Fee Management
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Batch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch"  class="input_box" style="width: 98%;" value="<?php echo $batch; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Student ID&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch"  class="input_box" style="width: 98%;" value="<?php echo $stdId; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Student Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch"  class="input_box" style="width: 98%;" value="<?php echo $stdName; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Mobile&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" class="input_box" style="width: 98%;" value="<?php echo $mobile; ?>" disabled="" />
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Fee Type&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch"  class="input_box" style="width: 98%;" value="<?php echo $feeTitle; ?>" disabled="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Fee&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="batch" class="input_box" style="width: 98%;" value="<?php echo $feeAmount; ?>" disabled="" />
                        </div>
                    </div>
                    
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="feesubmit" value="Confirm" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
<?php } ?>