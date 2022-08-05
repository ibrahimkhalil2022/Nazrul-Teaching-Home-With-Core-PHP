<?php session_start(); 
$courseBranch = $_SESSION["courseBranch"];
?>
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
		<div>
            <div style="display:inline-table; margin-left: 269px;">
                <input type="submit" value="Print" onclick="printDiv('printThis')">
            </div>
            <div style="display: inline-table;"><form action="courseByBranch.php">
                <input type="submit" value="Go Back"></form>
            </div>
        </div>
        <!--Print Area start here-->
        <div id="printThis" class="PrintPage">
            <div style="min-height: 50%;">
                <img src="title_final2.JPG" alt="Title">
                <hr class="style1">
                <div style="width:90%; margin: auto; padding-bottom:30px;">
<!--                    <div class="dateSerial" style="text-align:left;">MR No.&nbsp;<b><?php echo $mrpNo?></b></div>-->
                    <div class="dateSerial" style="margin-left:280px; border-bottom: 1px solid black;">
                        <font style="font-size: 18px; width:500px;">Offered course of <b><?php echo $courseBranch ;?></b></font><br>
                    </div>
                    <div class="dateSerial" style="float:right;">Date:&nbsp;&nbsp;<b><?php echo $date = date("d, M Y");?></b></div>
                </div>
                
                <!--THIS DIV FOR PRINT INFORMTION-->
                <div style="width:90%; margin:auto">
                    <?php               
	
			include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM course where branch='$courseBranch'");
						
						print("<table style='margin:auto;'>");
						print("<tr><th style='width : 8%;'>Batch No</th>");
						print("<th style='width : 25%;'>Course Title</th>"
							. "<th style='width : 15%;'>Coure Duration</th><th style='width : 15%;'>Class Days</th>"
							. "<th style='width : 12%;'>Class Time</th><th style='width : 10%;'>Course Fee</th>"
							. "<th style='width : 15%;'>Start Date</th>"
							. "</tr>");
						while ($row = $stmt->fetch())
							{ 
								print("<tr><td style='text-align:center'>" . $row["batchNo"] . "</td>");
								print("<td style='text-align:center'>" . $row["courseName"] . "</td>"
									. "<td style='text-align:center'>" . $row["courseDuration"] . "</td>"
									. "<td style='text-align:center'>" . $row["classDays"] . "</td>"
									. "<td style='text-align:center'>" . $row["classTime"] . "</td>"
									. "<td style='text-align:center'>" . $row["courseFee"] . "</td>"
									. "<td style='text-align:center'>" . $row["startDate"] . "</td>"
									. "</tr>");
							}
						print("</table>"); 
				}
	catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}
	$conn = null;
						
?>
				

                    <!--Print report date-->
                    
                    <div style="width:80%; margin: auto; margin-top: 150px; padding-top: 10px;">
                        <div class="signature" style="margin-left: 400px;">Checked by</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Print Area End Here-->
    </body>
</html>
