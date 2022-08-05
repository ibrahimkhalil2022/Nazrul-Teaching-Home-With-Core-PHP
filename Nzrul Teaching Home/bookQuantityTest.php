<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php               
	$bookName = $_GET["q"]; 
	include 'connection1.php';
	try 
	{
		$branch = $_SESSION["sessionAdminBranch"];
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										
			if ($bookName != null) 
				{
					if ($branch == "Mirpur-1") 
						{
							$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'"); 
							while ($row = $stmt->fetch())
								{
									echo $row["Mirpur1"];
									echo " Available books.";
								}
						}
					else if ($branch == "Mirpur-2") 
						{
							$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'");  
							while ($row = $stmt->fetch())
								{
									echo $row["Mirpur2"];
									echo " Available books.";
								}
						} 
					else if ($branch == "Mirpur-10") 
						{
							$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'");  
							while ($row = $stmt->fetch())
								{
								 	echo $row["Mirpur10"];
									echo " Available books.";
								}
						} 
					else if ($branch == "Barishal") 
						{
							$stmt = $conn->query("select  *from bookstocktable where bookTitle = '$bookName'"); 
							while ($row = $stmt->fetch())
								{
								 	echo $row["Barishal"];
									echo " Available books.";
								}
						}
				} 
				else 
				{ 
					header('Location: administrator.php'); 
				}
			
	}
	catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}
	$conn = null;
    
?>