<?php               
	$classDays = $_GET["q"];
	 
	session_start();
	include 'connection1.php';
		try 
			{
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$courseName = $_SESSION["courseName"];
				$stmt = $conn->query("SELECT *FROM course where classDays='$classDays' AND courseName = '$courseName'");
				while ($row = $stmt->fetch())
				{ 
					$br = $row["classTime"];
					print("<option value = " . $br . ">" . $br . "</option>");
				}
			}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
?>