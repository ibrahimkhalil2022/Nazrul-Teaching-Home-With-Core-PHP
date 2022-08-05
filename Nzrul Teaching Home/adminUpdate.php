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
        <link href="css/finalView.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">
        <title>updateAdmin.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'header.php';
		?>
		<!-- Main div start here-->
        <div class="main_body">

            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->

            </div>

            <!-- End of Header Section -->

            <!-- Print admin table information-->

            <div style="margin:auto; width:70%; min-height: 300px;">
                <div style="font-size:30px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    <u>Edit Administrator Information</u></div>
                <table style="width:100%; text-align: center;">
                    <tr><th style="width:500px;">ID</th>
                        <th style="width:800px;">User Name</th>
                        <th style="width:1500px;">Full Name</th>
                        <th style="width:500px;">Branch</th>
                        <th style="width:500px;">Edit</th>
                        <th style="width:500px;">Delete</th>
                    </tr> 
			<?php
			
			include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM admin");
						while ($row = $stmt->fetch())
						{ 
					$id=$row["id"];
			?>	
					<tr>
                        <td style="width:500px;"><?php echo $row["id"]; ?></td>
                        <td style="width:800px;"><?php echo $row["adminUserName"]; ?></td>
                        <td style="width:1500px;"><?php echo $row["adminFullName"]; ?></td>
                        <td style="width:500px;"><?php echo $row["adminBranch"]; ?></td>
                        <td style="width:500px;">
                            <a href="adminEdit.php?id=<?php echo $id; ?>" >Edit</a>
                        </td>
						<?php if ($row["id"] != 1) { ?>
                                        
                        <td style="width:500px;">
                            <a href="adminDelete.php?id=<?php echo $id; ?>" >
                                <button type="button" style="background:red;color: white; padding:5px 20px 5px 20px;">Delete</button>
                            </a>
                        </td>
									<?php }
										
									else {?>
						<td style="width:500px;">
                        </td>
									<?php } ?>
                    </tr>
		<?php 	} 
		}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;?>
                </table>
            </div>

            <!-- End of admin table information-->
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