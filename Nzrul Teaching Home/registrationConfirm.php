<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["submit"])){ 

	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$classDays = $_SESSION["classDays"];
			$classTime = $_SESSION["classTime"];
			
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
			
			if(isset($_POST["payment"])){
			$payment = $_POST["payment"];
			$_SESSION["payment"] = $payment;
			}
			
			if(isset($_POST["value1"])){
			$due1 = $_POST["due1"];
			$paymentDate1 = $_POST["paymentDate1"];
			
			$_SESSION["due1"] = $due1;
			$_SESSION["paymentDate1"] = $paymentDate1;
			}
			
			if(isset($_POST["value2"])){
			$due2 = $_POST["due2"];
			$paymentDate2 = $_POST["paymentDate2"];
			
			$_SESSION["due2"] = $due2;
			$_SESSION["paymentDate2"] = $paymentDate2;		
			
			}
		/*	
			echo "Class Days = ".$classDays."<br>";
			echo "Class Time = ".$classTime."<br>";
			
			echo "Full Name = ".$fullName."<br>";
			echo "Mother's Name = ".$mothersName."<br>";
			echo "studentContact = ".$studentContact."<br>";
			echo "presentAddress = ".$presentAddress."<br>";
			
			echo "email= ".$email."<br>";
			echo "fathersName = ".$fathersName."<br>";
			echo "dob = ".$dob."<br>";
			echo "guardianContact = ".$guardianContact."<br>";
			echo "permanentAddress = ".$permanentAddress."<br>";
			echo "className = ".$className."<br>"."<br>";
			
			echo "classYear = ".$classYear."<br>";
			echo "subjectName = ".$subjectName."<br>";
			echo "instituteName = ".$instituteName."<br>";
			echo "departmentName = ".$departmentName."<br>"."<br>";
			
			echo "designation = ".$designation."<br>";	
			echo "companyName = ".$companyName."<br>";
			echo "departmentName = ".$departmentName."<br>";		
			echo "companyAddress = ".$companyAddress."<br>"."<br>";
			
			echo "degree1 = ".$degree1."<br>";
			echo "year1 = ".$year1."<br>";
			echo "instituteName1 = ".$instituteName1."<br>";
			echo "grade1 = ".$grade1."<br>"."<br>";
			
			echo "degree2 = ".$degree2."<br>"."<br>";
			echo "year2 = ".$year2."<br>";
			echo "instituteName2 = ".$instituteName2."<br>";
			echo "grade2 = ".$grade2."<br>";
			
			echo "degree3 = ".$degree3."<br>"."<br>";
			echo "year3 = ".$year3."<br>";
			echo "instituteName3 = ".$instituteName3."<br>";
			echo "grade3 = ".$grade3."<br>"."<br>";
			
			echo "degree4 = ".$degree4."<br>";
			echo "year4 = ".$year4."<br>";
			echo "instituteName4 = ".$instituteName4."<br>";
			echo "grade4 = ".$grade4."<br>"."<br>";
			
			echo "channel = ".$channel."<br>";
			echo "channelContact = ".$channelContact."<br>";			
			
			
			echo "Cash Pay = ".$payment."<br>";
			
			echo "due1 = ".$due1."<br>";
			echo "paymentDate1  = ".$paymentDate1 ."<br>";
			
			
			echo "due2 = ".$due2."<br>";
			echo "paymentDate2  = ".$paymentDate2 ."<br>";
			
*/
			$stmt = $conn->query("INSERT INTO `studentinfo` (`stdId`, `stdName`, `batchNo`, `faName`, `moName`, `stdContact`, `guaContact`, `email`, `dob`, `presentAddress`, `permanentAddress`, `className`, `classYear`, `subjectName`, `instituteName`, `designation`, `departmentName`, `companyName`, `companyAddress`, `degree1`, `year1`, `instituteName1`, `grade1`, `degree2`, `year2`, `instituteName2`, `grade2`, `degree3`, `year3`, `instituteName3`, `grade3`, `degree4`, `year4`, `instituteName4`, `grade4`, `admissionDate`, `courseName`, `courseFee`, `payment`, `branch`, `admin`, `status`) 
			VALUES (NULL, '$fullName', '$batchNo', '$fathersName', '$mothersName', '$studentContact', '$guardianContact', '$email', '$dob', '$presentAddress', '$permanentAddress', '$className', '$classYear', '$subjectName', '$instituteName', '$designation', '$departmentName', '$companyName', '$companyAddress', '$degree1', '$year1', '$instituteName1', '$grade1', '$degree2', '$year2', '$instituteName2', '$grade2', '$degree3', '$year3', '$instituteName3', '$grade3', '$degree4', '$year4', '$instituteName4', '$grade4','admissionDate', '$courseName', '$courseFee', '$payment', '$registrationBranch', '$user', '1')");
			
			$stmt = $conn->query("SELECT MAX(stdId) as id FROM `studentinfo`");
						while ($row = $stmt->fetch())
						{   
							$stdId=$row["id"]; 
							$_SESSION["stdId"] = $stdId;
						} 
			
			if(isset($_POST["value1"])){
			$stmt = $conn->query("INSERT INTO `duetable` (`id`,`stdId`, `stdName`, `contact`, `courseName`, `branch`, `dueAmount`, `paymentDate`,`status`) 
			VALUES (NULL,'$stdId', '$fullName', '$studentContact', '$courseName', '$registrationBranch', '$due1', '$paymentDate1','1')");
			}
			
			if(isset($_POST["value2"])){
			$stmt = $conn->query("INSERT INTO `duetable` (`id`,`stdId`, `stdName`, `contact`, `courseName`, `branch`, `dueAmount`, `paymentDate`,`status`) 
			VALUES (NULL,'$stdId', '$fullName', '$studentContact', '$courseName', '$registrationBranch', '$due2', '$paymentDate2','1')");
			}
			
			$systemDate = date("Y-m-d");
			
			if(isset($_POST["payment"])){
			$stmt = $conn->query("INSERT INTO `incometable` (`id`,`stdId`, `courseName`, `incomeType`, `branch`, `payment`, `date`) 
			VALUES (NULL,'$stdId', '$courseName', '$courseName', '$registrationBranch', '$payment', '$systemDate')");
			}
			
			header('Location: regStdPrint.php');
			
			
	}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
}
?>