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

						$stmt = $conn->query("SELECT * FROM coursetable where id = '$id'"); 
						while ($row = $stmt->fetch())
						{ 
						 $id = $row["id"];
						 $courseName = $row["courseName"];  
						}
					}
				catch(PDOException $e)
					{
					echo "Error: " . $e->getMessage();
					}
				$conn = null;
            ?>         
            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="courseTableEditConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Course Edit Information</u>
                    </div> 
					<div>
                        <div class="inputtextitle">
                            Course Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="courseName" class="input_box" value="<?php echo $courseName; ?>">
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
