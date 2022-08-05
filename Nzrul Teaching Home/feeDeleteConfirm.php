<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["Delete"]))
{ 
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$id = $_SESSION["id"]; 
			$stmt = $conn->query("DELETE FROM `feetable` WHERE id='$id'");
		    header('Location: feeTableShow.php');
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
				$id = $_GET["id"];
				$_SESSION["id"] = $id;
				
			include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM feetable where id = '$id'");
						while ($row = $stmt->fetch())
						{ 
					$id= $row["id"]; 
					$_SESSION["id"] = $id;
                    $feeTitle=$row["feeTitle"]; 
                    $feeAmount=$row["feeAmount"]; 
                    $admin=$row["admin"]; 
					$lastUpdate=$row["lastUpdate"];  
				} 	
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;	
            ?>         
            <!-- Java Code End Here-->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>Fee Delete Information</u>
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
                    
                    <input type="submit" name="Delete" value="Delete" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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