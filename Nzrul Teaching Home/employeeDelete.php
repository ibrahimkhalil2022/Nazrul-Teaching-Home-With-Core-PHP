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
	$id=$_SESSION["id"]; 
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->query("DELETE FROM `employee` where id='$id'");
			header('Location: employeeUpdate.php'); 
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
<?php session_start(); ?><!DOCTYPE html>
<html>
    <head>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/index.css" rel="stylesheet">   
        <title>employeeDeleteConfirm.php</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php';
		?>
        <!--End of Java Code for receive data from createAdmin page-->
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div>
            <!-------------------------------- End of Header Section --------------------------------> 
				<?php
					$id = $_GET["id"];
					$_SESSION["id"] = $id;
					 
				include 'connection1.php';
				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$stmt = $conn->query("SELECT * FROM employee where id = '$id'");
					while ($row = $stmt->fetch())
					{ 
					 $id = $row["id"];
					 $_SESSION["id"] = $id; 
					 
						$empName = $row["empName"];  
						$fathersName =  $row["fathersName"];  
						$mothersName =  $row["mothersName"]; 
						$education =  $row["education"];  
						$branch =  $row["branch"];  
						$position = $row["position"];  
						$empStatus =  $row["empStatus"];  
						$joiningDate =  $row["joiningDate"];  
						$basicSalary =  $row["basicSalary"];   
					}
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
			?>
            <!-------------------------------- Start main Code Here -------------------------------->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Employee Edit Confirmation</u>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Employee Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $empName; ?> </div>
						
                    </div>
					<div>
                        <div class="inputtextitle">
                            Fathers Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $fathersName; ?> </div>
						
                    </div>
					<div>
                        <div class="inputtextitle">
                            Mothers Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $mothersName; ?> </div> 
                    </div>
					<div>
                        <div class="inputtextitle">
                            Education&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $education; ?>  </div> 
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $branch  ?>  </div> 
                    </div>
                    
                    <div>
                        <div class="inputtextitle">
                            Position&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $position; ?>   </div>
                    </div>
                     
                    <div>
                        <div class="inputtextitle">
                            Employee Status&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $empStatus; ?>   </div>
                    </div>
					
                    <div>
                        <div class="inputtextitle">
                            Joining Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $joiningDate; ?>  </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Basic Salary&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;"> <?php echo $basicSalary; ?> </div>
                    </div>
                    <div style="display: inline-table;">
                        <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px; margin-left: 200px;"/>
                    </div>                    
                    <div style="display: inline-table;">
                        <input type="submit" name="Delete" value="Delete" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
<?php } ?>