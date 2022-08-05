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
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->query("SELECT * FROM studentinfo where branch='$branch'"); 
print("<table style='margin:auto;'>");
        print("<tr>");
        print("<th style='width:100px;'>Student ID</th>"
            . "<th style='width:2000px;'>Batch No.</th>"
            . "<th style='width:5000px;'>Student Name</th>"
            . "<th style='width:5000px;' >Course Name</th>"
            . "<th >Course Fee</th>"
            . "<th >Contact</th>"
            . "<th >Branch</th>"
            . "</tr>");
        while ($row = $stmt->fetch())
			{
                print("<tr><td style='text-align:center;'>" . $row["stdId"] . "</td>");
                print("<td style='text-align:center;'>" . $row["batchNo"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["stdName"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["courseName"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["courseFee"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["stdContact"] . "</td>"
                    . "<td style='text-align:center;'>" . $row["branch"] . "</td>"
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