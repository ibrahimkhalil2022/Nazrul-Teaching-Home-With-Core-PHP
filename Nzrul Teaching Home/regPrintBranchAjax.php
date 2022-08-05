<?php               
	$courseName = $_GET["q"];
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->query("SELECT *FROM course where courseName='$courseName'");
			
			while ($row = $stmt->fetch())
			{
				$br = $row["branch"];
                print("<option value = " . $br . ">" . $br . "</option>");
		    }
		}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
?>