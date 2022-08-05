<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["submitfee"]))
{
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			$id = $_SESSION["id"];
			$stdId = $_SESSION["stdId"];
			$stdName = $_SESSION["stdName"];
			$contact = $_SESSION["contact"];
			$courseName = $_SESSION["courseName"];
			$branch = $_SESSION["branch"];
			$dueAmount = $_SESSION["dueAmount"];
			$user = $_SESSION["user"];
			$d=date("Y-m-d");
			
			$stmt = $conn->query("delete  from duetable where id = '$id' AND stdId = '$stdId'");
			
			$stmt = $conn->query("INSERT INTO `incometable`(`id`, `stdId`, `courseName`, `incomeType`, `branch`, `payment`, `date`) 
			values ('','$stdId','$courseName','Admission','$branch','$dueAmount','$d')");
			
			$stmt = $conn->query("INSERT INTO `transaction`(`id`, `stdId`, `stdName`, `branch`, `paidAmount`, `transectionType`, `admin`, `date`)
			values ('','$stdId','$stdName','$branch','$dueAmount','Admission','$user','$d')");
			
			header('Location: allAdmin.php');
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
        <title>dueFeeConfirm.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'headerall.php'; ?>
        <div class="main_body"> 
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>

            <!-- End of Header Section -->
            <?php
                $id = $_GET["id"];
				include 'connection1.php';
				try 
				{
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$stmt = $conn->query("select  *from duetable where stdId = '$id'");
					while ($row = $stmt->fetch())
					{   
						$id = $row["id"];
						$stdId = $row["stdId"];
						$stdName = $row["stdName"];
						$contact = $row["contact"];
						$courseName = $row["courseName"];
						$branch = $row["branch"];
						$dueAmount = $row["dueAmount"];
						$paymentDate = $row["paymentdate"];
					}
                
					$_SESSION["id"] = $id;
					$_SESSION["stdId"] = $stdId;
					$_SESSION["stdName"] = $stdName;
					$_SESSION["contact"] = $contact;
					$_SESSION["courseName"] = $courseName;
					$_SESSION["branch"] = $branch;
					$_SESSION["dueAmount"] = $dueAmount;
				}
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
                        <u>Due Student Information</u>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Student ID&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $stdId; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $stdName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Course Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $courseName; ?>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Contact&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $contact; ?>
                        </div>
                    </div>                    
                    <div>
                        <div class="inputtextitle">
                            Due Amount&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            &nbsp;&nbsp;<?php echo $dueAmount; ?>
                        </div>
                    </div>
                    <div style="margin-left: 350px;">                        
                        <div style="display: inline-table;">
                            <input type="submit" value="Go Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>
                        <div style="display: inline-table;">
                            <input type="submit" name="submitfee" value="Pay" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
