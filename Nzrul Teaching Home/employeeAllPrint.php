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
                width: auto;
            }
        </style>
        <script>
			function goBack() {
                window.history.back();
            }
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
        </script>
        <title>.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/print.css" rel="stylesheet">
    </head>
    <body style="background-color: darkorchid;">
				<?php
					include 'connection1.php';	
					$date = date("Y-m-d");
				?>
		<div>
            <div style="display:inline-table; margin-left: 269px;">
                <input type="submit" value="Print" onclick="printDiv('printThis')">
            </div>
			
				<div style="display: inline-table;">
					<form action="employeeViewAll.php">
						<input type="submit" value="Go Back">
					</form>
				</div>
        </div>
        <!--Print Area start here-->
        <div id="printThis" class="PrintPage">
            <div style="min-height: 50%;">
                <img src="title_final2.JPG" alt="Title">
                <hr class="style1">
                <div style="width:90%; margin: auto;">
<!--                    <div class="dateSerial" style="text-align:left;">MR No.&nbsp;<b><?php echo $mrpNo?></b></div>-->
                    <div class="dateSerial" style="margin-left:275px; border-bottom: 1px solid black; width:auto;">
                        <font style="font-weight: bolder; font-size: 18px;">Employee Information</font><br>
                    </div>
                    <div class="dateSerial" style="float:right;">Date:&nbsp;&nbsp;<b><?php echo $date?></b></div>
                </div>
                <!--THIS DIV FOR PRINT INFORMTION-->
               <div style="margin:auto; width:99%; min-height: 300px;">
				<div style="width:90%; margin:auto">
                <table style="width:100%; text-align: center; margin-top:20px;">
                    <tr><th style="width:100px;">ID</th>
                        <th style="width:1500px;">Employee Name</th>
                        <th style="width:700px;">Education</th>
                        <th style="width:500px;">Branch</th>
                        <th style="width:800px;">Position</th>
                        <th style="width:500px;">Status</th>
                        <th style="width:500px;">Joining Date</th> 
                    </tr>

                    <!-- Print admin table information -->
                    <?php 
						include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM `employee`");
						while ($row = $stmt->fetch())
						{
							$ts = $row["basicSalary"] + $row["increment"];
							?> 
							<tr>
								<td style="width:100px;"><?php echo $row["id"]; ?></td>
								<td style="width:1500px;"><?php echo $row["empName"]; ?></td>
								<td style="width:700px;"><?php echo $row["education"]; ?></td>
								<td style="width:500px;"><?php echo $row["branch"]; ?></td>
								<td style="width:800px;"><?php echo $row["position"]; ?></td>
								<td style="width:500px;"><?php echo $row["empStatus"]; ?></td>
								<td style="width:500px;"><?php echo $row["joiningDate"]; ?></td>
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
				
				<div style="width:80%; margin: auto; margin-top: 150px; padding-top: 10px;">
                        <div class="signature" style="margin-left: 400px;">Authority</div>
                </div>
            </div>
            </div>
        </div>
        <!--Print Area End Here-->
    </body>
</html>
