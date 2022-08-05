<?php  
	session_start(); 
?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  	
	$courseName = $_GET["q"];
	include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("select feeAmount from feetable where feeTitle = '$courseName'");
						while ($row = $stmt->fetch())
						{      
							$_SESSION["feeAmount"] = $row["feeAmount"];
							echo $row["feeAmount"]. " Taka";
							
						} 
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null; 
?>
 
        