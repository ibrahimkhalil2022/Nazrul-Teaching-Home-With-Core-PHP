<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php 
if(isset($_POST["submitc"]))
{  
	//session_start();
	include 'connection.php';
	//$conn = mysqli_connect($servername, $username, $password, $dbname);
	include 'connection1.php';
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
				$id = $_SESSION["id"];
				$branch = $_SESSION["branch"]; 
				$courseName = $_SESSION["courseName"]; 
				$courseDuration = $_SESSION["courseDuration"]; 
				$classDays = $_SESSION["classDays"]; 
				$classTime = $_SESSION["classTime"]; 
				$courseFee = $_SESSION["courseFee"]; 
				$startDate = $_SESSION["startDate"]; 
				 
				
				$stmt = $conn->prepare("update course set `branch`='$branch',`courseName`='$courseName',`courseDuration`='$courseDuration',
					`classDays`='$classDays',`classTime`='$classTime',`courseFee`='$courseFee',`startDate`='$startDate' where `batchNo`='$id'");
				$stmt->execute();
			}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
			 
    //echo "Your order successfully processed.";
    header('Location: courseUpdate.php'); 
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
        <title>adminCreateConfirm.php</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php';
		?>
        <!--Start Java Code for receive data from createAdmin page-->

        <?php     
            $branch = $_POST["branch"];
            $courseName = $_POST["courseName"]; 
            $courseDuration = $_POST["courseDuration"];
			$classDays = $_POST["classDays"]; 
			$classTime = $_POST["classTime"];
			$courseFee = $_POST["courseFee"];
			$startDate = $_POST["startDate"];  
			
            $_SESSION["branch"]= $branch; 
            $_SESSION["courseName"]= $courseName; 
            $_SESSION["courseDuration"]= $courseDuration; 
            $_SESSION["classDays"]= $classDays; 
            $_SESSION["classTime"]= $classTime; 
            $_SESSION["courseFee"]= $courseFee; 
            $_SESSION["startDate"]= $startDate; 
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
                        <u>Edit Course Title Confirm</u>
                    </div>
                     
                    <div>
                        <div class="inputtextitle">
                            Brnach&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $branch; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Course Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $courseName; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Course Duration&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $courseDuration; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Class Days&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $classDays; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Class Time&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $classTime; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Course Fee&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $courseFee; ?>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Start Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <?php echo $startDate; ?>
                        </div>
                    </div>
                    
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="submitc" value="Confirm" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
<?php } ?>