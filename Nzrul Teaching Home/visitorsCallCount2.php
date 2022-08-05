<?php

	$id = $_GET["id"];
	include 'connection1.php';
	try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->query("SELECT *FROM visitorsinfo where id='$id'");
			while ($row = $stmt->fetch())
				{ 
					$callTimes = $row["callTimes"];		
				}
			$callTimes++;
			$stmt = $conn->query("UPDATE visitorsinfo SET callTimes = '$callTimes' WHERE id= '$id'");
			header('Location: visitorsByDateShow.php');
		}
	catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}
	$conn = null;
?>