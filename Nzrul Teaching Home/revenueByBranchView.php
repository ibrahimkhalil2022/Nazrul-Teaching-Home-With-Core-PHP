<?php 
session_start();
?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  

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
                width: 1000px;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>revenueByDateView.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include'header.php'; ?>
        <!-- Main div start here-->
		<div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div>
            <!-- End of Header Section -->
			
            <!-- All Extra Code Start Here -->
            <div style="text-align: center; font-size: 18px; color: red; min-height: 10px;">
                <?php 
					
					if(isset($_POST["submit"])){					
					$fromDate = $_POST["fromDate"];
					$toDate = $_POST["toDate"]; 
					$revenueBranch = $_POST["revenueBranch"];
					
					$_SESSION["fromDate"] = $fromDate;
					$_SESSION["toDate"] = $toDate; 
					$_SESSION["revenueBranch"] = $revenueBranch;
					}else{
					$fromDate = $_SESSION["fromDate"];
					$toDate = $_SESSION["toDate"]; 
					$revenueBranch = $_SESSION["revenueBranch"];					
					}
					
					
					include 'connection1.php';
				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$result1 = $conn->query("SELECT sum(payment) as admission FROM `incometable` WHERE incomeType='Admission' AND branch = '$revenueBranch' AND date BETWEEN '$fromDate' AND '$toDate'"); 
					 while ($row = $result1->fetch())
						{  
							$admission=$row['admission']; 
						}	
					if($admission == "")  
						$admission=0;
					
					$result2 = $conn->query("SELECT sum(payment) as bookSell FROM `incometable` WHERE incomeType='Book Sell' AND branch = '$revenueBranch' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result2->fetch())
						{  
							$bookSell=$row['bookSell']; 
						}	
					if($bookSell == "")
						$bookSell=0;
					
					$result3 = $conn->query("SELECT sum(payment) as mockTest FROM `incometable` WHERE incomeType='MOCK Test' AND branch = '$revenueBranch' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result3->fetch())
						{    
							$mockTest=$row['mockTest']; 
						}	
					if($mockTest == "")
						$mockTest=0;
					
					 
					$result4 = $conn->query("SELECT sum(payment) as transferFee FROM `incometable` WHERE incomeType='Transfer Fee' AND branch = '$revenueBranch' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result4->fetch())
						{   
							$transferFee=$row['transferFee']; 
						}	
					if($transferFee == "")
						$transferFee=0;
					
					 
					$result5 = $conn->query("SELECT sum(payment) as reAdmission FROM `incometable` WHERE incomeType='reAdmission' AND branch = '$revenueBranch' AND date BETWEEN  '$fromDate' AND '$toDate'"); 
					 while ($row = $result5->fetch())
						{    
							$reAdmission=$row['reAdmission']; 
						}	
					if($reAdmission == "")
						$reAdmission=0;
					
					 
					$result6 = $conn->query("SELECT sum(payment) as certificateFee FROM `incometable` WHERE incomeType='Certificate Fee' AND branch = '$revenueBranch' AND date BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
						{    
							$certificateFee=$row['certificateFee']; 
						}	
					if($certificateFee == "")
						$certificateFee=0; 
					///////////////////////////////////Cost Start Here/////////////////////////////
					 
					$result6 = $conn->query("SELECT sum(costAmount) as salary FROM `costtable` WHERE costType='salary' AND userBranch = '$revenueBranch' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
						{ 
							$salary=$row['salary']; 
						}	
					if($salary == "")
						$salary=0;
					 
					$result6 = $conn->query("SELECT sum(costAmount) as teacherPayment FROM `costtable` WHERE costType='Teacher Payment' AND userBranch = '$revenueBranch' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
						{   
							$teacherPayment=$row['teacherPayment']; 
						}	
					if($teacherPayment == "")
						$teacherPayment=0;
					
					 
					$result6 = $conn->query("SELECT sum(costAmount) as staffPayment FROM `costtable` WHERE costType='Staff Payment' AND userBranch = '$revenueBranch' AND entryDate BETWEEN '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
						{   
							$staffPayment=$row['staffPayment']; 
						}	
					if($staffPayment == "")
						$staffPayment=0;
					
				 
					$result6 = $conn->query("SELECT sum(costAmount) as officeRent FROM `costtable` WHERE costType='Office Rent' AND userBranch = '$revenueBranch' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
						{   
							$officeRent=$row['officeRent']; 
						}	
					if($officeRent == "")
						$officeRent=0;
					
					$result6 = $conn->query("SELECT sum(costAmount) as officeEquipment FROM `costtable` WHERE costType='Office Equipment' AND userBranch = '$revenueBranch' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
						{   
							$officeEquipment=$row['officeEquipment']; 
						}	
					if($officeEquipment == "")
						$officeEquipment=0;
					
					 
					$result6 = $conn->query("SELECT sum(costAmount) as others FROM `costtable` WHERE costType NOT IN ('Teacher Payment','Staff Payment','Office Rent','Office Equipment','salary') AND userBranch = '$revenueBranch' AND entryDate BETWEEN  '$fromDate' AND '$toDate'");
					while ($row = $result6->fetch())
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
			?>
            </div>

            <!-- Start book sell code here-->
            <div class="adminform" style="width:80%;">
                <div style="text-align: center; font-size: 26px;">
                    Company's Revenue 
                </div>
                <div>
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
							?> Taka (Only) </th>
                        </tr>
                    </table> 
                </div>
                <div style="height: 40px;">
                    <form action="revenuePrintByBranch.php">
                        <input type="submit" value="Generate Report" style="float:right;">
                    </form>
                </div>

            </div>
            <!-- End book sell code here-->


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