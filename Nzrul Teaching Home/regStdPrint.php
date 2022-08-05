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
            
            .double-underline {
		border-bottom: 4px double;
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
                <div style="margin-right:20px;text-align:right;">Date:&nbsp;&nbsp;<?php echo $date = date("d M, Y");?></div>
                <div style="text-align:center; font-weight:bolder; font-size:25px; margin-bottom:5px;"><span class="double-underline">Admission Form</span></div>
                
                <!--THIS DIV FOR PRINT INFORMTION-->
                <div style="width:80%; margin:auto">
                
                <?php
                	
			$classDays = $_SESSION["classDays"];
			$classTime = $_SESSION["classTime"];
			$stdId= $_SESSION["stdId"];
			
			$fullName = $_SESSION["fullName"];
			$mothersName = $_SESSION["mothersName"];
			$studentContact = $_SESSION["studentContact"];
			$presentAddress = $_SESSION["presentAddress"];
			
			$email = $_SESSION["email"];
			$fathersName= $_SESSION["fathersName"];
			$dob= $_SESSION["dob"];
			$guardianContact = $_SESSION["guardianContact"];
			$permanentAddress = $_SESSION["permanentAddress"];
			$className = $_SESSION["className"];
			
			$classYear = $_SESSION["classYear"];
			$subjectName = $_SESSION["subjectName"];
			$instituteName = $_SESSION["instituteName"];
			$departmentName = $_SESSION["departmentName"];
			
			$designation = $_SESSION["designation"];	
			$companyName = $_SESSION["companyName"];
			$departmentName = $_SESSION["departmentName"];		
			$companyAddress = $_SESSION["companyAddress"];
			
			$degree1 = $_SESSION["degree1"];
			$year1 = $_SESSION["year1"];
			$instituteName1 = $_SESSION["instituteName1"];
			$grade1 = $_SESSION["grade1"];
			
			$degree2 = $_SESSION["degree2"];
			$year2 = $_SESSION["year2"];
			$instituteName2 = $_SESSION["instituteName2"];
			$grade2 = $_SESSION["grade2"];
			
			$degree3 = $_SESSION["degree3"];
			$year3 = $_SESSION["year3"];
			$instituteName3 = $_SESSION["instituteName3"];
			$grade3 = $_SESSION["grade3"];
			
			$degree4 = $_SESSION["degree4"];
			$year4 = $_SESSION["year4"];
			$instituteName4 = $_SESSION["instituteName4"];
			$grade4 = $_SESSION["grade4"];
			
			$channel = $_SESSION["channel"];
			$channelContact = $_SESSION["channelContact"];
			
			$batchNo = $_SESSION["batchNo"];
			$courseName = $_SESSION["courseName"];
			$courseFee = $_SESSION["courseFee"];
			$registrationBranch = $_SESSION["registrationBranch"];
			$user = $_SESSION["user"];
			
			$_SESSION["payment"] = $payment;	
                
                ?>
                
                <!--- Print Area Start -->
                     
                
                	<div style="width:200px; border:1px solid red;">Student ID:&nbsp;<?php echo $stdId;?> </div>
                	<div style="width:300px; min-height:500; border:1px solid red;position:absolute;;"> Photos </div>
               
                
                
                
                
                
                
                
                
                
                
                
                
                <!--- Print Area End  -->
                
                    <!--This section for office use only-->
                    <div>
                    	<div style="width:100%; margin: auto; margin-top: 150px; padding-top: 10px;">
                        	<div class="signature" style="display:inline-table; float:left;">Checked by</div>
                        	<div class="signature" style="display:inline-table; margin-left:93px;"><?php echo $user = $_SESSION["sessionAdminFullName"];?></div>
                        	<div class="signature" style="display:inline-table; float:right;">Checked by</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Print Area End Here-->
    </body>
</html>
