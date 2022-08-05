<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
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
        <title>CourseEditForm.jsp | N@zrul</title>
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
				}}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
			?>    
            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="employeeEditConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Employee Edit Information</u>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Employee Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="empName" class="input_box" value="<?php echo $empName; ?>">
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Fathers Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="fathersName" class="input_box" value="<?php echo $fathersName; ?>">
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Mothers Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="mothersName" class="input_box" value="<?php echo $mothersName; ?>">
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Education&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="education" class="input_box" value="<?php echo $education; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            
                            <select name="branch" class="input_box" style="width: 211px;">
                                <option value="Administrator" <?php if($branch == 'Administrator'){ echo "Selected"; } ?> >Nazrul</option>
                                <option value="Mirpur-1" <?php if($branch == 'Mirpur-1'){ echo "Selected"; } ?> >Mirpur-1</option>
                                <option value="Mirpur-2" <?php if($branch == 'Mirpur-2'){ echo "Selected"; } ?> >Mirpur-2</option>
                                <option value="Mirpur-10" <?php if($branch == 'Mirpur-10'){ echo "Selected"; } ?> >Mirpur-10</option>
                                <option value="Barishal" <?php if($branch == 'Barishal'){ echo "Selected"; } ?> >Barishal</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <div class="inputtextitle">
                            Position&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                             <select name="position" class="input_box" style="width: 211px;" required>
                            <option value="">Select Position</option>
                            <option value="MD" <?php if($position== 'MD'){ echo "Selected"; } ?>>Managing Director</option>
                            <option value="DMD" <?php if($position== 'DMD'){ echo "Selected"; } ?>>Deputy Managing Director</option>
                            <option value="ED" <?php if($position== 'ED'){ echo "Selected"; } ?>>Executive Director</option>
                            <option value="Director" <?php if($position== 'Director'){ echo "Selected"; } ?>>Director</option>
                            <option value="#">------------------------</option>
                            <option value="GM" <?php if($position== 'GM'){ echo "Selected"; } ?>>General Manager</option>
                            <option value="AGM" <?php if($position== 'AGM'){ echo "Selected"; } ?>>Assistant General Manager</option>
                            <option value="Manager" <?php if($position== 'Manager'){ echo "Selected"; } ?>>Manager</option>
                            <option value="AM" <?php if($position== 'AM'){ echo "Selected"; } ?>>Assistant Manager</option>
                            <option value="#">------------------------</option>
                            <option value="SC" <?php if($position== 'SC'){ echo "Selected"; } ?>>Senior Councillor</option>
                            <option value="Councillor" <?php if($position== 'Councillor'){ echo "Selected"; } ?>>Councillor</option>
                            <option value="JC" <?php if($position== 'JC'){ echo "Selected"; } ?>>Junior Councillor</option>
                            <option value="Course Co-ordinator" <?php if($position== 'Course Co-ordinator'){ echo "Selected"; } ?>>Course Co-ordinator</option>
                            <option value="#">------------------------</option>
                            <option value="Senior Teacher" <?php if($position== 'Senior Teacher'){ echo "Selected"; } ?>>Senior Teacher</option>
                            <option value="Teacher" <?php if($position== 'Teacher'){ echo "Selected"; } ?>>Teacher</option>
                            <option value="Assistant Teacher" <?php if($position== 'Assistant Teacher'){ echo "Selected"; } ?>>Assistant Teacher</option> 
                        </select>
                        </div>
                    </div>
                     
                    <div>
                        <div class="inputtextitle">
                            Employee Status&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                             <select name="empStatus" class="input_box" style="width: 211px;">
                                <option value="Administrator" <?php if($empStatus == 'Full Time'){ echo "Selected"; } ?> >Full Time</option>
                                <option value="Mirpur-1" <?php if($empStatus == 'Part Time'){ echo "Selected"; } ?> >Part Time</option> 
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Joining Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="Date" name="joiningDate" placeholder="Course Fee" class="input_box" value="<?php echo $joiningDate; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Basic Salary&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="Text" name="basicSalary" class="input_box" style="width: 195px;" value="<?php echo $basicSalary; ?>">
                        </div>
                    </div>
                    <div style="display: inline-table;">
                        <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px; margin-left: 200px;"/>
                    </div>                    
                    <div style="display: inline-table;">
                        <input type="submit" name="submit1" value="Update Course" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                    </div>
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
