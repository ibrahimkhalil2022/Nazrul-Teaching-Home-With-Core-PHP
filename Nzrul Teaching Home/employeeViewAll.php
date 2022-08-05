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
        <title>viewEmployee.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php'; ?>
        <!-- Main div start here-->
        <div class="main_body"> 
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div>
            <!-- End of Header Section --> 
            <!-- Print admin table information--> 
            <div style="margin:auto; width: 98%; min-height: 300px;">
                <div style="font-size:30px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    <u>Employee Information</u></div>
                <table style="width:100%; text-align: center;">
                    <tr><th style="width:500px;">Employee ID</th>
                        <th style="width:1500px;">Employee Name</th>
                        <th style="width:800px;">Father's Name</th>
                        <th style="width:600px;">Mother's Name</th>
                        <th style="width:700px;">Education</th>
                        <th style="width:500px;">Branch</th>
                        <th style="width:800px;">Position</th>
                        <th style="width:500px;">Status</th>
                        <th>Joining Date</th>
                        <th>Basic Salary</th> 
                        <th>Increment</th>
                        <th>Gross Salary</th>
                    </tr>

                    <!-- Print admin table information -->
                    <?php 
                       						 
						include 'connection1.php';
					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query('SELECT * FROM `employee`');
						while ($row = $stmt->fetch())
						{

							$id=$row["id"];
                    ?> 
							<tr>
								<td style="width:500px;"> <?php echo $row["id"]; ?></td>
								<td style="width:800px;"><?php echo $row["empName"]; ?></td>
								<td style="width:800px;"><?php echo $row["fathersName"]; ?></td>
								<td style="width:600px;"><?php echo $row["mothersName"]; ?></td>
								<td style="width:700px;"><?php echo $row["education"]; ?></td>
								<td style="width:500px;"><?php echo $row["branch"]; ?></td>
								<td style="width:500px;"><?php echo $row["position"]; ?></td>
								<td style="width:500px;"><?php echo $row["empStatus"]; ?></td>
								<td><?php echo $row["joiningDate"]; ?></td>
								<td style="width:500px;"><?php echo $row["basicSalary"]; ?></td>
								<td style="width:500px;"><?php echo $row["increment"]; ?></td>
								<td style="width:500px;"><?php 
									//int bs = Integer.parseInt(rs.getString("basicSalary"));
									//int inc = Integer.parseInt(rs.getString("increment"));
									$ts = $row["basicSalary"] + $row["increment"];
									print($ts);
									?></td>
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
				    <form action="employeeAllPrint.php">
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
