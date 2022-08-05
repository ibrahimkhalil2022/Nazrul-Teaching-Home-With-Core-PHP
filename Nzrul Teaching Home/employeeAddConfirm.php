<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
 <?php
if(isset($_POST["registration"]))
{ 
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
			$position = $_SESSION["position"];
			$empName = $_SESSION["empName"];
			$fathersName = $_SESSION["fathersName"];
			$mothersName = $_SESSION["mothersName"];
			$education = $_SESSION["education"];
			$joiningDate = $_SESSION["joiningDate"];
			$basicSalary = $_SESSION["basicSalary"];
			$branch = $_SESSION["branch"];
			$empStatus = $_SESSION["empStatus"];
	
			$stmt = $conn->query("insert into `employee`(`id`, `position`, `empName`, `fathersName`, `mothersName`, `education`, `joiningDate`, `basicSalary`, `increment`, `salaryReduction`, `branch`, `empStatus`) 
					values ('','$position','$empName','$fathersName','$mothersName','$education','$joiningDate','$basicSalary','0','0','$branch','$empStatus')");
			header('Location: administrator.php');
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
        <title>addEmployeeConfirm.jsp</title>
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
                $position = $_POST["position"];
                $empName = $_POST["empName"];
                $fathersName = $_POST["fathersName"];
                $mothersName = $_POST["mothersName"];
                $education = $_POST["education"];
                $joiningDate = $_POST["joiningDate"];
                $basicSalary = $_POST["basicSalary"];
                $branch = $_POST["branch"];
                $empStatus = $_POST["empStatus"];

                $_SESSION["position"] = $position;
                $_SESSION["empName"] = $empName;
                $_SESSION["fathersName"] = $fathersName;
                $_SESSION["mothersName"] = $mothersName;
                $_SESSION["education"] = $education;
                $_SESSION["joiningDate"] = $joiningDate;
                $_SESSION["basicSalary"] = $basicSalary;
                $_SESSION["branch"] = $branch;
                $_SESSION["empStatus"] = $empStatus;
            ?>
            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Add Employee Confirm</u>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $branch; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Position&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $position; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Employee Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $empName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Father's Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $fathersName; ?>
                        </div>
                    </div>                    
                    <div>
                        <div class="inputtextitle">
                            Mother's Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $mothersName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Educational Qualification&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $education; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Joining Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $joiningDate; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Basic Salary&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $basicSalary; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Employment Status&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $empStatus; ?>
                        </div>
                    </div>

                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Go Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="registration" value="Enroll" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                        </div>
                    </div>
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
