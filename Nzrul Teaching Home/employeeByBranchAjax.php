<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php               
	$branch = $_GET["q"];
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->query("SELECT * FROM employee where branch='$branch'");
			
			print("<table style='margin:auto;'>");
			print("<tr>");
			print("<th style='width:100px;'>Employee ID</th>"
				. "<th style='width:2000px;'>Employee Name</th>"
				. "<th style='width:5000px;'>Father's Name</th>"
				. "<th style='width:5000px;' >Education</th>"
				. "<th >Branch</th>"
				. "<th >Position</th>"
				. "<th >Status</th>"
				. "<th >Joining Date</th>"
				. "<th >Basic Salary</th>"
				. "<th >Increment</th>"
				. "<th >Gross Salary</th>"
				. "</tr>");
        
			while ($row = $stmt->fetch())
				{
				$ts = $row["basicSalary"] + $row["increment"];
									
                print("<tr><td style='text-align:center;'>" . $row["id"] . "</td>");
                print("<td style='text-align:center;'>" . $row["empName"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["fathersName"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["education"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["branch"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["position"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["empStatus"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["joiningDate"] . "</td>"
					. "<td style='text-align:center;'>" . $row["basicSalary"] . "</td>"
					. "<td style='text-align:center;'>" . $row["increment"] . "</td>"
					. "<td style='text-align:center;'>" .  $ts . "</td>"
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