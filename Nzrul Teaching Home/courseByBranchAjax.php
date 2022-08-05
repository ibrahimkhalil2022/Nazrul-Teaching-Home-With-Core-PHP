<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php               
	$branch = $_GET["q"];
	$_SESSION["courseBranch"] = $branch;
	include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM course where branch='$branch'");
						
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