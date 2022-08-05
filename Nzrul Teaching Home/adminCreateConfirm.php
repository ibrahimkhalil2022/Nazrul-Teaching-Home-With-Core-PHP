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
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$adminUserName = $_SESSION["adminUserName"];
			$adminFullName = $_SESSION["adminFullName"];
			$adminEmail = $_SESSION["adminEmail"];
			$adminPassword = $_SESSION["adminPassword"];
			$adminMobile = $_SESSION["adminMobile"];
			$adminAddress = $_SESSION["adminAddress"];
			$adminBranch = $_SESSION["adminBranch"];


			$stmt = $conn->query("insert into admin (`id`, `adminUserName`, `adminFullName`, `adminEmail`, `adminPassword`, `adminContact`, `adminAddress`, `adminBranch`) 
			values ('','$adminUserName','$adminFullName','$adminEmail','$adminPassword','$adminMobile','$adminAddress','$adminBranch')");			
	
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
        <title>adminCreateConfirm.php</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php';
		?>
        <!--Start Java Code for receive data from createAdmin page-->

        <?php
            $adminUserName = $_POST["adminUserName"];
			
            $adminFullName = $_POST["adminFullName"];
            $adminEmail = $_POST["adminEmail"];
            $adminPassword = $_POST["adminPassword"];
            $adminMobile = $_POST["adminMobile"];
            $adminAddress = $_POST["adminAddress"];
            $adminBranch = $_POST["adminBranch"];
			
            $_SESSION["adminUserName"]= $adminUserName;
            $_SESSION["adminFullName"]= $adminFullName;
            $_SESSION["adminEmail"]= $adminEmail;
            $_SESSION["adminPassword"]= $adminPassword;
            $_SESSION["adminMobile"]= $adminMobile;
            $_SESSION["adminAddress"]= $adminAddress;
            $_SESSION["adminBranch"]= $adminBranch;
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
                            <?php echo $adminMobile; ?>
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
                            <input type="submit" name="submit" value="Confirm" style="margin-left: 9px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
