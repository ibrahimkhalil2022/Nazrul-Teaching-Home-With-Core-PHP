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
                vertical-align: center;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">      
        <title>feeUpdate.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php'; ?>
        <!-- Main div start here-->
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>

            <!-- End of Header Section --> 
            <!-- All Extra Code Start Here -->
            <div class="adminform" style="width: 95%;">
                <div style="font-size: 22px; text-align: center; font-weight: bolder; padding:10px;">
                    Fee Update Window
                </div>
                <hr> 
                <div style="margin:auto;width: 98%; min-height: 300px;">
                   <table style="text-align:center;">
                        <tr>
                            <th style="width:200px;">ID</th>
                            <th>Fee Type</th>
                            <th>Amount</th>
                            <th>Admin</th>
                            <th>Last Update</th>
                            <th>Update</th>
                        </tr>
                        <?php     
					include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM feetable");
						while ($row = $stmt->fetch())
						{ 
									$id=$row["id"];
                        ?>
                        <tr>
                            <td style="width:200px;"><?php echo $row["id"];?></td>
                            <td><?php echo $row["feeTitle"];?></td>
                            <td><?php echo $row["feeAmount"];?></td>
                            <td><?php echo $row["admin"];?></td>
                            <td><?php echo $row["lastUpdate"];?></td>
							<td><a href="feeDeleteConfirm.php?id=<?php echo $id; ?>" >
								<button type="button" style="background:red;color: white; padding:5px 20px 5px 20px;">Delete</button>
								</a>
							</td>  
                        </tr>
                        <?php 
                            }	
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
                    ?> 
                    </table>
                </div>
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
                    <a href="#">Contact US</a>
                </div>
            </div>
        </div>
    </body>
</html>
