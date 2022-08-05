<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["submitFee"]))
{
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$d=date("Y-m-d"); 
			$feeTitle = $_SESSION["feeTitle"];
			$feeAmount = $_SESSION["feeAmount"]; 
			$user = $_SESSION["user"];
			
			$stmt = $conn->query("insert into feetable (`id`, `feeTitle`, `feeAmount`, `lastUpdate`, `admin`) 
				values ('','$feeTitle','$feeAmount','$d','$user')");			
			header('Location: administrator.php');
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
        <title>adminCreateConfirm.php</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php';
		?>
        <!--Start Java Code for receive data from createAdmin page-->

        <?php
			$feeTitle = $_POST["feeTitle"];
			$feeAmount = $_POST["feeAmount"];
			
            $_SESSION["feeTitle"]= $feeTitle;
            $_SESSION["feeAmount"]= $feeAmount; 
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
                    <div style="font-size: 24px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>Fee management window Confirm</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Fee Title&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 55%;">
                            <?php echo $feeTitle; ?>
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Amount&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 55%;">
                            <?php echo $feeAmount; ?>
                        </div>
                    </div> 
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit"  name="submitFee" value="Confirm" style="margin-left: 9px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
<?php
}
?>