<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php 
if(isset($_POST["submite"]))
{  
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			$id=$_SESSION["id"];
			$empName = $_SESSION["empName"];
			$fathersName = $_SESSION["fathersName"];
			$mothersName = $_SESSION["mothersName"];
			$education = $_SESSION["education"];
			$branch = $_SESSION["branch"];
			$position = $_SESSION["position"];
			$empStatus = $_SESSION["empStatus"];
			$joiningDate = $_SESSION["joiningDate"];
			$basicSalary = $_SESSION["basicSalary"];
	 

			$stmt = $conn->query("update employee set `position`='$position',`empName`='$empName',`fathersName`='$fathersName',
			`mothersName`='$mothersName',`education`='$education',`joiningDate`='$joiningDate',`basicSalary`='$basicSalary',
			`branch`='$branch',`empStatus`='$empStatus' where id='$id'");
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
        <title>employeeEditConfirm.php</title>
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
						$id = $_SESSION["id"]; 
					 
						$empName = $_POST["empName"];  
						$fathersName =  $_POST["fathersName"];  
						$mothersName =  $_POST["mothersName"]; 
						$education =  $_POST["education"];  
						$branch =  $_POST["branch"];  
						$position = $_POST["position"];  
						$empStatus =  $_POST["empStatus"];  
						$joiningDate =  $_POST["joiningDate"];  
						$basicSalary =  $_POST["basicSalary"];
						
						$_SESSION["empName"] =  $empName;
						$_SESSION["fathersName"] =  $fathersName;
						$_SESSION["mothersName"] =  $mothersName;
						$_SESSION["education"] =  $education;
						$_SESSION["branch"] =  $branch;
						$_SESSION["position"] =  $position;
						$_SESSION["empStatus"] =  $empStatus;
						$_SESSION["joiningDate"] =  $joiningDate;
						$_SESSION["basicSalary"] =  $basicSalary;
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
                        <input type="submit" name="submite" value="Update Course" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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