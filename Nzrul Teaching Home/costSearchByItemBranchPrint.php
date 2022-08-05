<?php session_start(); 
$costTitle = $_SESSION["costTitle"];
$costBranch = $_SESSION["costBranch"];
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
            <div style="display: inline-table;"><form action="costSearchByItemBranchShow.php">
                <input type="submit" value="Go Back"></form>
            </div>
        </div>
        <!--Print Area start here-->
        <div id="printThis" class="PrintPage">
            <div style="min-height: 50%;">
                <img src="title_final2.JPG" alt="Title">
                <hr class="style1">
                <div style="width:90%; margin: auto;">
<!--                    <div class="dateSerial" style="text-align:left;">MR No.&nbsp;<b><?php echo $mrpNo?></b></div>-->
                    <div class="dateSerial" style="margin-left:280px; border-bottom: 1px solid black;">
                        <font style="font-weight: bolder; font-size: 20px;">Cost By Item</font><br>
                    </div>
                    <div class="dateSerial" style="float:right;">Date:&nbsp;&nbsp;<b><?php echo $date = date("d, M Y");?></b></div>
                </div>
                <div style="text-align: center; margin:auto; font-size:12px; margin-left:25px;">
                    <b><?php echo $costTitle;?>&nbsp; cost of <?php echo $costBranch;?> &nbsp; branch</b>
                </div>
                <!--THIS DIV FOR PRINT INFORMTION-->
                <div style="width:90%; margin:auto">
                <table style="width:100%; text-align: center; margin-top:30px;">
                    <tr><th style="width:200px;">ID</th>
                        <th style="width:1000px;">Receiver Name</th>
                        <th style="width:700px;">Contact</th>
                        <th style="width:500px;">Purpose</th>
                        <th style="width:400px;">Item Number</th>
                        <th style="width:300px;">Amount</th>

                        <th style="width:300px;">Admin</th>
                        <th style="width:600px;">Date</th> 
                    </tr> 
                    <!-- Print admin table information --> 
                    <?php 
						  include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT *FROM `costtable` WHERE userBranch = '$costBranch' AND costType = '$costTitle'");
						while ($row = $stmt->fetch())
						{ 
							$id=$row["id"]; 
							?>
							<tr>
								<td style="width:200px;"><?php echo $row["id"];?></td>
								<td style="width:1000px;"><?php echo $row["receiverName"];?></td>
								<td style="width:1200px;"><?php echo $row["receiverContact"];?></td>
								<td style="width:300px;"><?php echo $row["costPurpose"];?></td>
								<td style="width:400px;"><?php echo $row["itemNumber"];?></td>
								<td style="width:300px;"><?php echo $row["costAmount"];?></td>

								<td style="width:300px;"><?php echo $row["userName"];?></td>
								<td style="width:300px;"><?php echo $row["entryDate"];?></td> 
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