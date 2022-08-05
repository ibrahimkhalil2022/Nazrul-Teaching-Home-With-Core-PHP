<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["submitFee"]))
{
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$adminUserName = $_SESSION["adminUserName"];
			$adminFullName = $_SESSION["adminFullName"];
			$adminEmail = $_SESSION["adminEmail"];
			$adminPassword = $_SESSION["adminPassword"];
			$adminMobile = $_SESSION["adminMobile"];
			$adminAddress = $_SESSION["adminAddress"];
			$adminBranch = $_SESSION["adminBranch"];

			$stmt = $conn->query("insert into admin (`id`, `adminUserName`, `adminFullName`, `adminEmail`, `adminPassword`, `adminContact`, `adminAddress`, `adminBranch`) 
			values ('','$adminUserName','$adminFullName','$adminEmail','$adminPassword','$adminMobile','$adminAddress','$adminBranch')");
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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>feeAdd.jsp</title>
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
            <div class="adminform">
                <form action="feeAddConfirm.php" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                       Fee management window
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Fee Title&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 55%;">
                            <input type="text" name="feeTitle" placeholder="Title of the fee" class="input_box" style="width: 80%;" required="">
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Amount&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 55%;">
                            <input type="text" name="feeAmount" placeholder="Amount of the fee" class="input_box" style="width: 80%;" required="">
                        </div>
                    </div>
                    <input type="submit" value="Next" style="margin-left: 494px; margin-bottom: 15px;margin-top: 10px;" class="input_box" />
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