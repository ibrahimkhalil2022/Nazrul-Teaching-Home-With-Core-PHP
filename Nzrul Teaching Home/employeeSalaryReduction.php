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
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$id = $_SESSION["id"];
			$salaryReduction =$_SESSION["salaryReduction"];
			$newReduction = $_POST["reduction"];
			$reduction1 = $salaryReduction + $newReduction;	
	
			$stmt = $conn->query("update employee set `salaryReduction`='$reduction1' where id='$id'");
			header('Location: employeeSalary.php'); 
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
        <title>incrementForm.jsp</title>
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
				$id = $_GET["id"];
				$_SESSION["id"] = $id;
				 
					include 'connection1.php';
					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM `employee` where id = '$id'");
						while ($row = $stmt->fetch())
						{
  
						
						$empName = $row["empName"]; 
						$branch = $row["branch"];
						$position = $row["position"];						
						$empStatus = $row["empStatus"]; 
						 
						$basicSalary = $row["basicSalary"]; 
						$increment = $row["increment"];
						$salaryReduction = $row["salaryReduction"];
						$ts = $basicSalary + $increment - $salaryReduction;
						
						$_SESSION["salaryReduction"] = $salaryReduction;
 
					}}
					catch(PDOException $e)
						{
						echo "Error: " . $e->getMessage();
						}
					$conn = null;
					?> 
            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Employee Salary Reduction</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Employee ID&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $id; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Employee Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $empName; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $branch; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Position&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $position; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Employee Status &nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $empStatus; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Basic Salary&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $basicSalary; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Increment&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $increment; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Gross Salary &nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $ts; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Salary Reduction&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="reduction" placeholder="Amount of increment" class="input_box" style="width: 195px;">
                        </div>
                    </div>                    

                    <input type="submit" name="submit" value="Confirm" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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