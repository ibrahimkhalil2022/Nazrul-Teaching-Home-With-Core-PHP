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
            					
			
					$date = date("Y-m-d");
					
					$mirpur1t = 0;
					$mirpur2t = 0;
					$mirpur10t = 0;
					$barishalt = 0;
					$m1t = 0;
				?>
		<div>
            <div style="display:inline-table; margin-left: 269px;">
                <input type="submit" value="Print" onclick="printDiv('printThis')">
            </div>
			
				<div style="display: inline-table;">
					<form action="bookStockShow.php">
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
                        <font style="font-weight: bolder; font-size: 18px;">Book Stock Information</font><br>
                    </div>
                    <div class="dateSerial" style="float:right;">Date:&nbsp;&nbsp;<b><?php echo $date?></b></div>
                </div>
                
                <!--THIS DIV FOR PRINT INFORMTION-->
        <div style="margin:auto; width:99%; min-height: 300px; margin:auto;">
            <div style="width:80%; margin:auto">
            
            <table style="width:100%; text-align: center; margin-top:30px;">
                    <tr>
                        <th style="width:5%;">ID</th>
                        <th style="width:15%;">BOOK Title</th>
                        <th style="width:8%;">Mirpur-1</th>
                        <th style="width:8%;">Mirpur-2</th>
                        <th style="width:8%;">Mirpur-10</th>
                        <th style="width:8%;">Barishal</th>
						 
                    </tr>
			<?php
			include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM bookstocktable");
						while ($row = $stmt->fetch())
						{ 
							$id = $row["id"];
							?>	
					<tr>
                        <td style="width:7%;"><?php echo $row["id"]; ?><sup>th</sup></td>
                        <td style="width:8%;"><?php echo $row["bookTitle"]; ?></td>
                        <td style="width:8%;"><?php echo $row["Mirpur1"]; ?></td>
                        <td style="width:8%;"><?php echo $row["Mirpur2"]; ?></td>
                        <td style="width:8%;"><?php echo $row["Mirpur10"]; ?></td>
                        <td style="width:8%;"><?php echo $row["Barishal"]; ?></td>
						
						<?php
							
							$mirpur1t = $mirpur1t + $row["Mirpur1"];
							$mirpur2t = $mirpur2t + $row["Mirpur2"];
							$mirpur10t = $mirpur10t + $row["Mirpur10"];
							$barishalt = $barishalt + $row["Barishal"];
						?>
                    </tr>
					  
		<?php 	}
	
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
		?>
		
		<tr>
                        <td style="width:15%;" colspan="2">Total Book</td>
                        <td style="width:8%;"><?php echo $mirpur1t; ?></td>
                        <td style="width:8%;"><?php echo $mirpur2t; ?></td>
                        <td style="width:8%;"><?php echo $mirpur10t; ?></td>
                        <td style="width:8%;"><?php echo $barishalt; ?></td>
                    </tr>
                </table>
				
			<div style="width:80%; margin: auto; margin-top: 20px; padding-top: 10px;">
                        Total book available at this time = <?php echo ($mirpur1t + $mirpur2t + $mirpur10t + $barishalt);?>
					</div>
					<div style="width:80%; margin: auto; margin-top: 150px; padding-top: 10px;">
                        <div class="signature" style="margin-left: 400px;">Authority</div>
					</div>
				
            </div>
        </div>
        <!--Print Area End Here-->
    </body>
</html>
