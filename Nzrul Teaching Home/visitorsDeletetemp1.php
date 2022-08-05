<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
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
					$id=$row["id"];
					$visitorsName=$row["visitorsName"];
					$preferredCourse=$row["preferredCourse"];
					$preferredBranch=$row["preferredBranch"];
					$preferredTime=$row["preferredTime"];
					$preferredDate=$row["preferredDate"];
					$visitorsContact=$row["visitorsContact"];
					$visitorsAddress=$row["visitorsAddress"];
					$visitDate=$row["visitDate"];
					$callTimes=$row["callTimes"];
				}
			$stmt = $conn->query("INSERT INTO `visitorsexistingtable` (`id`, `visitorsName`, `visitorsContact`, `visitorsAddress`, `preferredCourse`, `preferredDate`, `preferredTime`, `preferredBranch`, `visitDate`, `callTimes`, `status`) 
								VALUES (NULL, '$visitorsName', '$visitorsContact', '$visitorsAddress', '$preferredCourse', '$preferredDate', '$preferredTime', '$preferredBranch', '$systemDate', '0', '1')");
			$stmt = $conn->query("DELETE FROM visitorsinfo where id='$id'");
			header('Location: visitorsByBranchShow.php');
		}
	catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}
	$conn = null;
?>