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

		$stmt = $conn->query("SELECT * FROM admin where adminBranch='$branch'");
	
		print("<table style='margin:auto;'>");
        print("<tr>");
        print("<th style='width:100px;'>ID</th>"
            . "<th style='width:2000px;'>User Name</th>"
            . "<th style='width:5000px;'>Full Name</th>"
            . "<th style='width:5000px;' >E-mail</th>"
            . "<th >Password</th>"
            . "<th >Contact</th>"
            . "<th >Address</th>"
            . "</tr>");
        while ($row = $stmt->fetch())
			{ 
                print("<tr><td style='text-align:center;'>" . $row["id"] . "</td>");
                print("<td style='text-align:center;'>" . $row["adminUserName"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["adminFullName"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["adminEmail"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["adminPassword"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["adminContact"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["adminAddress"] . "</td>"
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