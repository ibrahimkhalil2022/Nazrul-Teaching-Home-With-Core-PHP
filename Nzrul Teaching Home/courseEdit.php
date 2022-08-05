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
			  //echo $id;
			  include 'connection1.php';
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->query("SELECT * FROM course where batchNo = '$id'");
			while ($row = $stmt->fetch())
			{
					 $id = $row["batchNo"];
					 $_SESSION["id"] = $id;
					 
                     $branch = $row["branch"];
                     $courseName = $row["courseName"]; 
                     $courseDuration = $row["courseDuration"];
					 $classDays = $row["classDays"]; 
					 $classTime = $row["classTime"];
					 $courseFee = $row["courseFee"];
					 $startDate = $row["startDate"];
				 
			?>     
            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="courseEditConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Course Edit Information</u>
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
                            Course Title&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
						<?php 
							$stmt = $conn->query('SELECT * FROM coursetable'); 
							?>
							<select name="courseName" class="input_box" style="width: 211px;" required="">
                                <option value="">Select course</option>
                                    <?php 
									while ($row1 = $stmt->fetch())
									{ 
                                        ?>
                                        <option value="<?php echo $row1["courseName"];?>" <?php if($courseName==$row1["courseName"]) echo "Selected" ?>>
                                            <?php echo $row1["courseName"];?>
                                        </option>
                                        <?php
                                    }
			}
									}
								catch(PDOException $e)
									{
									echo "Error: " . $e->getMessage();
									}
								$conn = null;
								?> 
                             </select> 
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Course Duration&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="courseDuration" class="input_box" value="<?php echo $courseDuration; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Class Days&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                        <select name="classDays" class="input_box" style="width: 211px;">
                                <option value="Friday" <?php if($branch == 'Friday'){ echo "Selected"; } ?> >Friday</option>
                                <option value="Sat-Mon-Wed" <?php if($branch == 'Sat-Mon-Wed'){ echo "Selected"; } ?> >Sat-Mon-Wed</option>
                                <option value="Sun-Tue-Thu" <?php if($branch == 'Sun-Tue-Thu'){ echo "Selected"; } ?> >Sun-Tue-Thu</option> 
                            </select>
                            <datalist id="classDays" >
                                <option value="Friday" <?php if($classDays == 'Friday'){ echo "Selected"; } ?>>Friday</option>
                                 <option value="Sat-Mon-Wed" <?php if($classDays == 'Sat-Mon-Wed'){ echo "Selected"; } ?>>Sat-Mon-Wed</option>
                                  <option value="Sun-Tue-Thu" <?php if($classDays == 'Sun-Tue-Thu'){ echo "Selected"; } ?>>Sun-Tue-Thu</option> 
                            </datalist>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Class Time&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="time" name="classTime" class="input_box" style="width: 195px;" value="<?php echo $classTime; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Course Fee&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="courseFee" placeholder="Course Fee" class="input_box" value="<?php echo $courseFee; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Start Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="date" name="startDate" class="input_box" style="width: 195px;" value="<?php echo $startDate; ?>">
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
