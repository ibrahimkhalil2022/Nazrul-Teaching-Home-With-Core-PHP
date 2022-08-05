<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php 
function numberTowords($num)
{ 
$ones = array( 
1 => "one", 
2 => "two", 
3 => "three", 
4 => "four", 
5 => "five", 
6 => "six", 
7 => "seven", 
8 => "eight", 
9 => "nine", 
10 => "ten", 
11 => "eleven", 
12 => "twelve", 
13 => "thirteen", 
14 => "fourteen", 
15 => "fifteen", 
16 => "sixteen", 
17 => "seventeen", 
18 => "eighteen", 
19 => "nineteen" 
); 
$tens = array( 
2 => "twenty", 
3 => "thirty", 
4 => "forty", 
5 => "fifty", 
6 => "sixty", 
7 => "seventy", 
8 => "eighty", 
9 => "ninety" 
); 
$hundreds = array( 
"hundred", 
"thousand", 
"million", 
"billion", 
"trillion", 
"quadrillion" 
); //limit t quadrillion 
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){ 
if($i < 20){ 
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
$rettxt .= $tens[substr($i,0,1)]; 
$rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
$rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
$rettxt .= " ".$tens[substr($i,1,1)]; 
$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
} 
} 
if($decnum > 0){ 
$rettxt .= " and "; 
if($decnum < 20){ 
$rettxt .= $ones[$decnum]; 
}elseif($decnum < 100){ 
$rettxt .= $tens[substr($decnum,0,1)]; 
$rettxt .= " ".$ones[substr($decnum,1,1)]; 
} 
} 
return $rettxt; 
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
				
		<div>
            <div style="display:inline-table; margin-left: 269px;">
                <input type="submit" value="Print" onclick="printDiv('printThis')">
            </div>
			
				<div style="display: inline-table;">
					<form action="employeeSalary.php">
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
                        <font style="font-weight: bolder; font-size: 18px;">Monthly Salary Sheet</font><br>
                    </div>
                    <div class="dateSerial" style="float:right;">Date:&nbsp;&nbsp;<b><?php echo $date = date("d, M Y");?></b></div>
                </div>
				<?php
					$date = date("Y-m-d");
					$month1 = substr($date,5,2);
					$year = substr($date, 0, 4);
					$month = "";
					
					if($month1 == "01"){
						$month = "January";
					}
					else if($month1 == "02"){
						$month = "February";
					}
					else if($month1 == "03"){
						$month = "March";
					}
					else if($month1 == "04"){
						$month = "April";
					}
					else if($month1 == "05"){
						$month = "May";
					}
					else if($month1 == "06"){
						$month = "June";
					}
					else if($month1 == "07"){
						$month = "July";
					}
					else if($month1 == "08"){
						$month = "August";
					}
					else if($month1 == "09"){
						$month = "September";
					}
					else if($month1 == "10"){
						$month = "October";
					}
					else if($month1 == "11"){
						$month = "November";
					}
					else{
						$month = "December";
					}
				?>
                <div style="text-align: center;">
                    <b>Salary of &nbsp;<?php echo $month; ?>, &nbsp;&nbsp;<?php echo $year; ?></b>
                </div>
                <!--THIS DIV FOR PRINT INFORMTION-->
                <div style="width:90%; margin:auto">
                    <table style="width:100%; text-align: center; margin-top:10px;">
                        <tr><th style="width:5%;">Emp. ID</th>
                            <th style="width:15%;">Employee Name</th>
                            <th style="width:10%;">Branch</th>
                            <th style="width:10%;">Position</th>
                            <th style="width:10%;">Basic Salary</th>
                            <th style="width:10%;">Increment</th>
                            <th style="width:10%;">Salary Reduction</th> 
                            <th style="width:10%;">Gross Salary</th>
                            <th style="width:15%;">Signature</th>  
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

							$ts = $row["basicSalary"] + $row["increment"]-$row["salaryReduction"];
                    ?> 

                        <tr>
                            <td><?php echo $row["id"]; ?> </td>
                            <td><?php echo $row["empName"]; ?></td>
                            <td><?php echo $row["branch"]; ?></td>                        
                            <td><?php echo $row["position"]; ?></td>
                            <td><?php echo $row["basicSalary"]; ?></td>
                            <td><?php echo $row["increment"]; ?></td>
                            <td><?php echo $row["salaryReduction"]; ?></td>
                            <td><?php echo $ts; ?> </td> 
                            <td>
							 
                            </td>

                        </tr>
                        <?php 
                            }}
					catch(PDOException $e)
						{
						echo "Error: " . $e->getMessage();
						}
					$conn = null;
					?>
                    </table>
                    <!--This section for office use only-->
                    <div style="width:80%; margin: auto; margin-top: 150px; padding-top: 10px;">
                        <div class="signature" style="margin-left: 400px;">Accountant</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Print Area End Here-->
    </body>
</html>
