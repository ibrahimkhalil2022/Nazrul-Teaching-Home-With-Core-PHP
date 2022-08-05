<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
$id = $_GET["id"];
if(isset($_POST["submit"]))
{ 
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->query("DELETE FROM `admin` where id='$id'");
			header('Location: adminUpdate.php');
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
        <title>adminCreateConfirm.php</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php';
		?>
        <!--Start Java Code for receive data from createAdmin page-->

        <?php
             //echo $id;
			  include 'connection.php';
				//$conn = mysqli_connect($servername, $username, $password, $dbname);
	
			$sql = "SELECT * FROM admin where id = '$id'";
			$result = mysqli_query($conn, $sql); 
			while($row = mysqli_fetch_assoc($result)) 
				{  
					$id= $row["id"]; 
                    $adminUserName=$row["adminUserName"]; 
                    $adminFullName=$row["adminFullName"]; 
                    $adminBranch=$row["adminBranch"]; 
					$adminEmail=$row["adminEmail"]; 
					$adminPassword=$row["adminPassword"]; 
					$adminContact=$row["adminContact"]; 
					$adminAddress=$row["adminAddress"]; 
					
				}
            ?>         
        ?>

        <!--End of Java Code for receive data from createAdmin page-->
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->

            </div>
            <!-------------------------------- End of Header Section -------------------------------->


            <!-------------------------------- Start main Code Here -------------------------------->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>Administrator Information</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            User Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $adminUserName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Full Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $adminFullName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            E-mail&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $adminEmail; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Password&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $adminPassword; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Contact Number&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $adminContact; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Address&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $adminAddress; ?>
                        </div>
                    </div>                    
                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table;">
                            <?php echo $adminBranch; ?>
                        </div>
                    </div>
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="submit" value="Confirm Delete" style="margin-left: 9px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                        </div>
                    </div>  
                </form>
            </div>
            <!-------------------------------- End of main Code Here -------------------------------->      
			<!--------------------------------- Start Footer Section ---------------------------------> 
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
            <!---------------------- Footer End Here ------------------------------------- ---> 
        </div>
        <!---------------------- Main Div End Here ----------------------------------- -------> 
    </body>
</html>
