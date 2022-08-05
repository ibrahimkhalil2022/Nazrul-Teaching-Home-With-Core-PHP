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
				<?php
					
            
					$fromDate = $_SESSION["fromDate"];
					$toDate = $_SESSION["toDate"]; 
					 
					include 'connection1.php';
				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$result1 = $conn->query("SELECT sum(payment) as admission FROM `incometable` WHERE incomeType='Admission' AND date BETWEEN '$fromDate' AND '$toDate'"); 
					 while ($row = $result1->fetch())
						{  
							$admission=$row['admission']; 
						}	
					if($admission == "")  
						$admission=0;
					
					$result2 = $conn->query("SELECT sum(payment) as bookSell FROM `incometable` WHERE incomeType='Book Sell' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result2->fetch())
						{  
							$bookSell=$row['bookSell']; 
						}	
					if($bookSell == "")
						$bookSell=0;
					
					$result3 = $conn->query("SELECT sum(payment) as mockTest FROM `incometable` WHERE incomeType='MOCK Test' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result3->fetch())
						{    
							$mockTest=$row['mockTest']; 
						}	
					if($mockTest == "")
						$mockTest=0;
					
					 
					$result4 = $conn->query("SELECT sum(payment) as transferFee FROM `incometable` WHERE incomeType='Transfer Fee' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result4->fetch())
						{   
							$transferFee=$row['transferFee']; 
						}	
					if($transferFee == "")
						$transferFee=0;
					
					 
					$result5 = $conn->query("SELECT sum(payment) as reAdmission FROM `incometable` WHERE incomeType='reAdmission' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result5->fetch())
						{    
							$reAdmission=$row['reAdmission']; 
						}	
					if($reAdmission == "")
						$reAdmission=0;
					
					 
					$result6 = $conn->query("SELECT sum(payment) as certificateFee FROM `incometable` WHERE incomeType='Certificate Fee' AND date BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
						{    
							$certificateFee=$row['certificateFee']; 
						}	
					if($certificateFee == "")
						$certificateFee=0; 
					///////////////////////////////////Cost Start Here/////////////////////////////
					 
					$result7 = $conn->query("SELECT sum(costAmount) as salary FROM `costtable` WHERE costType='salary' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result7->fetch())
						{ 
							$salary=$row['salary']; 
						}	
					if($salary == "")
						$salary=0;
					 
					$result8 = $conn->query("SELECT sum(costAmount) as teacherPayment FROM `costtable` WHERE costType='Teacher Payment' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result8->fetch())
						{   
							$teacherPayment=$row['teacherPayment']; 
						}	
					if($teacherPayment == "")
						$teacherPayment=0;
					
					 
					$result9 = $conn->query("SELECT sum(costAmount) as staffPayment FROM `costtable` WHERE costType='Staff Payment' AND entryDate BETWEEN '$fromDate' AND '$toDate'");
					while ($row = $result9->fetch())
						{   
							$staffPayment=$row['staffPayment']; 
						}	
					if($staffPayment == "")
						$staffPayment=0;
					
				 
					$result10 = $conn->query("SELECT sum(costAmount) as officeRent FROM `costtable` WHERE costType='Office Rent' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result10->fetch())
						{   
							$officeRent=$row['officeRent']; 
						}	
					if($officeRent == "")
						$officeRent=0;
					
					$result11 = $conn->query("SELECT sum(costAmount) as officeEquipment FROM `costtable` WHERE costType='Office Equipment' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result11->fetch())
						{   
							$officeEquipment=$row['officeEquipment']; 
						}	
					if($officeEquipment == "")
						$officeEquipment=0;
					
					 
					$result12 = $conn->query("SELECT sum(costAmount) as others FROM `costtable` WHERE costType NOT IN ('Teacher Payment','Staff Payment','Office Rent','Office Equipment','salary') AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result12->fetch())
						{   
							$others=$row['others']; 
						}	
					if($others == "")
						$others=0;
					
					$sumofallincome = $admission + $bookSell + $mockTest + $transferFee + $reAdmission + $certificateFee;
					$sumofallcost = $salary + $teacherPayment + $staffPayment + $officeRent + $officeEquipment + $others;
					$closingAmount = $sumofallincome - $sumofallcost;
					
				}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
					$date = date("d, M Y");
				?>
		<div>
            <div style="display:inline-table; margin-left: 269px;">
                <input type="submit" value="Print" onclick="printDiv('printThis')">
            </div>
            <div style="display: inline-table;">
            	<form action="revenueByDateView.php">
                	<input type="submit" value="Go Back">
                </form>
            </div>
        </div>
        <!--Print Area start here-->
        <div id="printThis" class="PrintPage">
            <div style="min-height: 50%;">
                <img src="title_final2.JPG" alt="Title">
                <hr class="style1">
                <div style="margin-right:20px;text-align:right;">Date:&nbsp;&nbsp;<?php echo $date?></div>
                <div style="text-align:center; font-weight:bolder; font-size:20px; margin-bottom:5px;"> Company&#39;s Revenue </div>
                <div style="text-align: center; margin:auto; font-size:12px;">
                    <b>From:&nbsp;&nbsp;</b><?php echo $fromDate;?>&nbsp;&nbsp;<b>to&nbsp;&nbsp;</b> <?php echo $toDate;?>
                </div>
                <!--THIS DIV FOR PRINT INFORMTION-->
                <div style="width:80%; margin:auto">
                    <table style="width:100%; margin-top: 20px;">
                        <tr>
                            <th  style="width:50%; font-size: 18px;" colspan="2">Income</th>
                            <th  style="width:50%; font-size: 18px;" colspan="2">Expenditure</th>
                        </tr>
                        <tr>
                            <th style="text-align:center; width: 25%;">Type</th>
                            <th style="text-align:center; width: 25%;">Amount (TK.)</th>
                            <th style="text-align:center; width: 25%;">Type</th>
                            <th style="text-align:center; width: 25%;">Amount (TK.)</th>
                        </tr>
                        <tr>
                            <td style="text-align:center; width: 25%;">Admission</td>
                            <td style="text-align:center; width: 25%;"><?php echo $admission; ?></td>
                            <td style="text-align:center; width: 25%;">Employee Salary</td>
                            <td style="text-align:center; width: 25%;"><?php echo $salary; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width: 25%;">Book Sell</td>
                            <td style="text-align:center; width: 25%;"><?php echo $bookSell; ?></td>
                            <td style="text-align:center; width: 25%;">Teacher's Payment</td>
                            <td style="text-align:center; width: 25%;"><?php echo $teacherPayment; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width: 25%;">MOCK Test</td>
                            <td style="text-align:center; width: 25%;"><?php echo $mockTest; ?></td>
                            <td style="text-align:center; width: 25%;">Staff Payment</td>
                            <td style="text-align:center; width: 25%;"><?php echo $staffPayment; ?></td>
                        </tr>

                        <tr>
                            <td style="text-align:center; width: 25%;">Transfer Fee</td>
                            <td style="text-align:center; width: 25%;"><?php echo $transferFee; ?></td>
                            <td style="text-align:center; width: 25%;">Office Rent</td>
                            <td style="text-align:center; width: 25%;"><?php echo $officeRent; ?></td>
                        </tr>

                        <tr>
                            <td style="text-align:center; width: 25%;">Re-Admission</td>
                            <td style="text-align:center; width: 25%;"><?php echo $reAdmission; ?></td>
                            <td style="text-align:center; width: 25%;">Office Equipment</td>
                            <td style="text-align:center; width: 25%;"><?php echo $officeEquipment; ?></td>
                        </tr>

                        <tr>
                            <td style="text-align:center; width: 25%;">Certificate Fee</td>
                            <td style="text-align:center; width: 25%;"><?php echo $certificateFee; ?></td>
                            <td style="text-align:center; width: 25%;">Others</td>
                            <td style="text-align:center; width: 25%;"><?php echo $others; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width: 25%;">Total Income</td>
                            <td style="text-align:center; width: 25%;"><?php echo $sumofallincome; ?></td>
                            <td style="text-align:center; width: 25%;">Total Expense</td>
                            <td style="text-align:center; width: 25%;"><?php echo $sumofallcost; ?></td>
                        </tr>

                        <tr>
                            <th  style="width:50%; font-size: 16px; text-align: left;" colspan="4">&nbsp;&nbsp;&nbsp; Closing Balance&nbsp;: <?php echo $closingAmount; ?>.00 BDT</th>
                        </tr>
                        <tr>
                            <th  style="width:50%; font-size: 16px; text-align: left;" colspan="4">&nbsp;&nbsp;&nbsp; In words&nbsp;:
								<?php 
									if($closingAmount<0)
										{ $closingAmount = $closingAmount * (-1);
											echo "-".numberTowords("$closingAmount"); }
									else
										{ echo numberTowords("$closingAmount"); }
							?> taka (only) </th>
                        </tr>
                    </table> 
					

                    <!--Print report date-->
                    <div style="margin-top: 15px; font-weight: bold;">
                        This report is generated from date <b><?php echo $fromDate;?></b> to<b> <?php echo $toDate;?>.</b>
                    </div>
                    <!--This section for office use only-->
                    <!--This section for office use only-->
                    <div style="width:80%; margin: auto; margin-top: 150px; padding-top: 10px;">
                        <div class="signature" style="margin-left: 400px;">Checked by</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Print Area End Here-->
    </body>
</html>
