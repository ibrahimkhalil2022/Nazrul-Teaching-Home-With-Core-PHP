<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                border-collapse: collapse;

            }

            table, td, th {
                border: 1px solid black;
                height: 40px;
                width: 1000px;

            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet"> 
        <link href="css/finalView.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">
        <title>visitorsShow</title>
    </head>
    <body style="background-color: #f1f1f1">
			<?php
			include 'headerall.php';		
			?>
        <div class="main_body">
            
            <!--End of Menu Bar-->

            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>

            <div style="margin-top: 30px; margin-left: auto; margin-right: auto; width: 90%; min-height: 400px;">
                <div style="text-align:center; font-size: 25px; padding: 5px; margin-bottom: 20px;">Visitor's By Date</div>
                <table style="text-align:center;">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Preferred Course</th>
                        <th>Preferred Branch</th>
                        <th>Preferred Time</th>
                        <th>Preferred Date</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Visit Date</th>
                        <th>Contact Times</th>
                        <th>Called</th>
                        <th>Delete</th>                   
                    </tr>
				<?php
					if(isset($_POST["submit"]))
					{
						$fromDate = $_POST["fromDate"];
						$toDate = $_POST["toDate"];
						
						$_SESSION["fromDate"] = $fromDate;
						$_SESSION["toDate"] = $toDate;
																
						include 'connection1.php';
						try 
						{
							$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
							$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

							$stmt = $conn->query("SELECT *FROM `visitorsinfo` WHERE visitDate BETWEEN  '$fromDate' AND '$toDate'");
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
								?>
								<tr>
									<td><?php echo $id; ?></td>
									<td><?php echo $visitorsName; ?></td>
									<td><?php echo $preferredCourse; ?></td>
									<td><?php echo $preferredBranch; ?></td>
									<td><?php echo $preferredTime; ?></td>
									<td><?php echo $preferredDate; ?></td>
									<td><?php echo $visitorsContact; ?></td>
									<td><?php echo $visitorsAddress; ?></td>
									<td><?php echo $visitDate; ?></td>
									<th><?php echo $callTimes; ?></th>
									<th><div style="width:60px; font-size: 15px; padding: 3px; margin: auto; color: red;">
											<a href="visitorsCallCount2.php?id=<?php echo $id; ?>" >Done</a></div></th>
									<th><div style="width:60px; font-size: 15px; padding: 3px; margin: auto; color: red;">
											<a href="visitorsDeletetemp2.php?id=<?php echo $id; ?>" >Delete</a></div></th> 
								</tr>
								<?php
							}
						}
						catch(PDOException $e)
							{
							echo "Error: " . $e->getMessage();
							}
						$conn = null;
					}
						else
						{
							$fromDate = $_SESSION["fromDate"];
							$toDate = $_SESSION["toDate"];
																
						include 'connection1.php';
						try 
						{
							$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
							$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

							$stmt = $conn->query("SELECT *FROM `visitorsinfo` WHERE visitDate BETWEEN  '$fromDate' AND '$toDate'");
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
								?>
								<tr>
									<td><?php echo $id; ?></td>
									<td><?php echo $visitorsName; ?></td>
									<td><?php echo $preferredCourse; ?></td>
									<td><?php echo $preferredBranch; ?></td>
									<td><?php echo $preferredTime; ?></td>
									<td><?php echo $preferredDate; ?></td>
									<td><?php echo $visitorsContact; ?></td>
									<td><?php echo $visitorsAddress; ?></td>
									<td><?php echo $visitDate; ?></td>
									<th><?php echo $callTimes; ?></th>
									<th><div style="width:60px; font-size: 15px; padding: 3px; margin: auto; color: red;">
											<a href="visitorsCallCount2.php?id=<?php echo $id; ?>" >Done</a></div></th>
									<th><div style="width:60px; font-size: 15px; padding: 3px; margin: auto; color: red;">
											<a href="visitorsDeletetemp2.php?id=<?php echo $id; ?>" >Delete</a></div></th> 
								</tr> 
								<?php
							}	
						}
						catch(PDOException $e)
							{
							echo "Error: " . $e->getMessage();
							}
						$conn = null;
					}
                    ?>
                </table>

                <div >
                    
                </div>               
            </div>
            <!-- End of admin table information-->
            <div style="margin-left:53px; margin-top: 5px;">
                <form action="allAdmin.php">
                    <input type="submit" value="Back">
                </form>
            </div>




            <!-- Footer Start Here -------------------------------------------------------------------- --> 

            <hr>
            <div class="footer">
                <div class="icon">
                    <a href="#">N@zrul</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Courses</a>
                </div>
                <div class="icon">
                    <a href="#">Policy</a>
                </div>
                <div class="icon">
                    <a href="#">Suggest</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Career</a>
                </div>
                <div class="icon">
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    </body>
</html>
