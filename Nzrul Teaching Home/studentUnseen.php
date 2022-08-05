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
        <title>newStudents.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php';?>
        <!-- Main div start here-->
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>
            <!-- End of Header Section --> 
            <!-- Print admin table information-->
            <div style="margin:auto; width: 98%; min-height: 300px;">
                <div style="font-size:23px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    Unseen Student's Information
                </div>
                <table style="width:100%; text-align: center;">
                    <tr><th style="width:200px;">Student ID</th>
                        <th style="width:300px;">Batch No.</th>
                        <th style="width:1000px;">Student Name</th>
                        <th style="width:1200px;">Course Name</th>
                        <th style="width:300px;">Course Fee</th>
                        <th style="width:400px;">Contact</th>
                        <th style="width:300px;">Branch</th>
                        <th style="width:300px;">Details</th>
                    </tr> 
                    <!-- Print admin table information -->
                   <?php
					include 'connection1.php';
					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("select *from studentinfo where status=1");
						while ($row = $stmt->fetch())
						{
							$id=$row["stdId"]; 
                    ?> 
                    <tr>
                        <td style="width:200px;"><?php echo $row["stdId"]; ?></td>
                        <td style="width:300px;"><?php echo $row["batchNo"]; ?></td>
                        <td style="width:1000px;"><?php echo $row["stdName"]; ?></td>
                        <td style="width:1200px;"><?php echo $row["courseName"]; ?></td>
                        <td style="width:300px;"><?php echo $row["courseFee"]; ?></td>
                        <td style="width:400px;"><?php echo $row["stdContact"]; ?></td>
                        <td style="width:300px;"><?php echo $row["branch"]; ?></td>
                        <td style="width:300px;"><a href="studentViewDetails.php?id=<?php echo $id; ?>">Show Details</a></td>
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
