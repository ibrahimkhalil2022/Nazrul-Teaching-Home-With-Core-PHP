<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["submit"])){ 

	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$systemDate = date("Y-m-d");
				$visitorsName = $_SESSION["visitorsName"];
				$visitorsContact = $_SESSION["visitorsContact"];
				$visitorsAddress = $_SESSION["visitorsAddress"];
				$preferredCourse = $_SESSION["preferredCourse"];
				$preferredDate = $_SESSION["preferredDate"];
				$preferredTime = $_SESSION["preferredTime"];
				$preferredBranch = $_SESSION["preferredBranch"];
	
			$stmt = $conn->query("INSERT INTO `visitorsinfo` (`id`, `visitorsName`, `visitorsContact`, `visitorsAddress`, `preferredCourse`, `preferredDate`, `preferredTime`, `preferredBranch`, `visitDate`, `callTimes`, `status`) 
								VALUES (NULL, '$visitorsName', '$visitorsContact', '$visitorsAddress', '$preferredCourse', '$preferredDate', '$preferredTime', '$preferredBranch', '$systemDate', '0', '1')");

		$message = "Entry success.";
		$_SESSION["message"] = $message;
		header('Location: allAdmin.php');
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
        <title>visitorEntryConfirm.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';		
		?>
        <div class="main_body">

            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>

            <!-- End of Header Section -->
            <?php
			
                $visitDate = date("Y-m-d");
				
				//echo $sysDate;
				
                $visitorsName = $_POST["visitorsName"];
				$visitorsContact = $_POST["visitorsContact"];
				$visitorsAddress = $_POST["visitorsAddress"];
				$preferredCourse = $_POST["preferredCourse"];
				$preferredDate = $_POST["preferredDate"];
				$preferredTime = $_POST["preferredTime"];
				$preferredBranch = $_POST["preferredBranch"];

				$_SESSION["visitorsName"] = $visitorsName;
				$_SESSION["visitorsContact"] = $visitorsContact;
				$_SESSION["visitorsAddress"] = $visitorsAddress;
				$_SESSION["preferredCourse"] = $preferredCourse;
				$_SESSION["preferredDate"] = $preferredDate;
				$_SESSION["preferredTime"] = $preferredTime;
				$_SESSION["preferredBranch"] = $preferredBranch;
				
            ?>

            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="#" method="POST">
                    <div style="font-size: 25px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Visitor's information</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Visitor's Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" class="input_box" value="<?php echo $visitorsName?>" disabled="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Contact Number&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text"  class="input_box" value="<?php echo $visitorsContact?>" disabled="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Address&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <textarea  class="input_box" disabled ><?php echo $visitorsAddress?></textarea>
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Preferred course&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" class="input_box" value="<?php echo $preferredCourse?>" disabled="">
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Preferred Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="date" name="preferredDate" style="width: 195px; height: 20px;" class="input_box" value="<?php echo $preferredDate?>" disabled="">
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Preferred Time&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="preferredTime"  class="input_box" value="<?php echo $preferredTime?>" disabled="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Preferred Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text"  class="input_box" value="<?php echo $preferredBranch?>" disabled="">
                        </div>
                    </div>
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name ="submit" value="Confirm" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
<?php
}
?>