<?php
session_start();
?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  

if(isset($_POST["Update"]))
{
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$d=date("Y-m-d"); 
			$id = $_SESSION["id"];
			$feeTitle = $_SESSION["feeTitle"];
			$feeAmount = $_SESSION["feeAmount"]; 
			$admin = $_SESSION["user"];
			$lastUpdate = $_SESSION["lastUpdate"];
			$d=date("Y-m-d");
			$stmt = $conn->query("update feetable set `feeTitle`='$feeTitle', `feeAmount`='$feeAmount', `admin`='$admin', `lastUpdate`='$d' where id='$id'");
			header('Location: feeUpdate.php');
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
        <title>editAdminForm.jsp | N@zrul</title>
    </head>
    <body style="background-color: #f1f1f1">
	<?php include 'header.php'; ?>
        <div class="main_body"> 
            <div style="margin-top: 100px;">
            </div>

            <?php 
				$id = $_SESSION["id"];

				$feeTitle= $_POST["feeTitle"]; 
                $feeAmount= $_POST["feeAmount"];  
                $admin= $_POST["admin"];  
                $lastUpdate= $_POST["lastUpdate"]; 

				$_SESSION["feeTitle"] = $feeTitle;
				$_SESSION["feeAmount"] = $feeAmount;
				$_SESSION["admin"] = $admin;
				$_SESSION["lastUpdate"] = $lastUpdate;				
            ?>         
            <!-- Java Code End Here-->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>Fee Update Information</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Fee Title&nbsp;:
                        </div>

                        <div style="display: inline-table; width: 45%;">
                             <?php echo $feeTitle; ?> 
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Fee Amount&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                             <?php echo $feeAmount; ?> 
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Admin&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                             <?php echo $admin; ?> 
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Last Update&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                             <?php echo $lastUpdate; ?> 
                        </div>
                    </div>
                    
                    <input type="submit" name="Update" value="Update" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                </form>
            </div>

            <!-- Footer Start Here -------------------------------------------------------------------- --> 
            <hr style="border: 1px solid violet;">
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
            <!-- Footer End Here ------------------------------------------ --> 
        </div><!-- Main Div End Here -------------------------------------- --> 

    </body>
</html>
<?php 
}
?>