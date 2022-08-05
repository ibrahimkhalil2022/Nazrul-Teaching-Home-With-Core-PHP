<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
	include 'connection.php';
	//$conn = mysqli_connect($servername, $username, $password, $dbname);
	$fromDate=$_POST["fromDate"];
	$toDate=$_POST["toDate"];
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                border-collapse: collapse; 
            } 
            table, td, th {
                border: 1px solid black;
                height: 40px;
                width: 1000px;
                vertical-align: center;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet"> 
        <link href="css/finalView.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">
        <title>FeeDueStudent.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'headerall.php'; ?>
        <div class="main_body"> 
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div> 
            <!-- End of Header Section -->

            <!-- Print admin table information--> 
            <div style="margin:auto; width: 98%; min-height: 300px;">
                <div style="font-size:30px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    <u>All Due students information</u></div>
                <table style="width:100%; text-align: center;">
                    <tr><th style="width:200px;">Serial</th>
                        <th style="width:200px;">ID</th>
                        <th style="width:1200px;">Name</th>
                        <th style="width:1200px;">Contact</th>
                        <th style="width:1200px;">Course Name</th>
                        <th style="width:300px;">Due Amount</th>
                        <th style="width:400px;">Branch</th>
                        <th style="width:400px;">Payment Date</th>
                    </tr>

                    <!-- Print admin table information -->
                    <?php  
					include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT *FROM `duetable`");
						while ($row = $stmt->fetch())
						{   
							$id=$row["id"]; 
							?> 
                    <tr>
                        <td style="width:200px;"><?php echo $row["id"]; ?></td>
                        <td style="width:200px;"><?php echo $row["stdId"]; ?></td>
                        <td style="width:200px;"><?php echo $row["stdName"]; ?></td>
                        <td style="width:200px;"><?php echo $row["contact"]; ?></td>
                        <td style="width:1200px;"><?php echo $row["courseName"]; ?></td>
                        <td style="width:300px;"><?php echo $row["dueAmount"]; ?></td>
                        <td style="width:400px;"><?php echo $row["branch"]; ?></td>
                        <td style="width:300px;"><?php echo $row["paymentdate"]; ?></td>
                    </tr>
                    <?php 
                      	}
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
                    ?>  
                </table>
                
                <div style="height: 40px;">
                    <form action="dueStudentsAllPrint.php">
                        <input type="submit" value="Generate Report" style="float:right;">
                    </form>
            	</div>
            </div> 
            <!-- End of admin table information-->

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
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    </body>
</html>
