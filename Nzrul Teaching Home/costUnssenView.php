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
		<script>
            function goBack() {
                window.history.back();
            }
        </script>
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
        <title>CostUnseenView.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'header.php'; ?>
        <!-- Main div start here-->
        <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>


            <!-- End of Header Section -->
            <!-- Print admin table information -->
            <?php 
				include 'connection.php';
				//$conn = mysqli_connect($servername, $username, $password, $dbname);
				$id=$_GET["id"]; 
				include 'connection1.php';
				try 
				{
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$stmt = $conn->query("SELECT * FROM costtable where id='$id'");
					while ($row = $stmt->fetch())
						{
							$id=$row["id"];
						 ?> 
				<!-- Start book sell code here-->
				<div class="adminform">
					<form action="costUnseenViewConfirm" method="get">
						<div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
							Cost Management
						</div>
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Cost Type&nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
									<?php echo $row["costType"];?>
							</div>
						</div>
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Name(To whom/Company)&nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
								<?php echo $row["receiverName"];?>
							</div>
						</div>
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Mobile &nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
							   <?php echo $row["receiverContact"];?>
							</div>
						</div>
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Purpose &nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
							   <?php echo $row["costPurpose"];?>
							</div>
						</div>

						<div>
							<div class="inputtextitle" style="width: 35%;">
								Amount(Item numbers)&nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
								<?php echo $row["itemNumber"];?>
							</div>
						</div>
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Amount(Cost)&nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
								<?php echo $row["costAmount"];?>    
							</div>
						</div>
						
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Admin&nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
								<?php echo $row["userName"];?>    
							</div>
						</div>
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Branch&nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
								<?php echo $row["userBranch"];?>    
							</div>
						</div>
						<div>
							<div class="inputtextitle" style="width: 35%;">
								Date&nbsp;:
							</div>
							<div style="display: inline-table; width: 50%;">
								<?php echo $row["entryDate"];?>    
							</div>
						</div> 
						
						<div style="margin-left: 350px;">
							<div style="display: inline-table;">
								<input type="submit" value="Back" onclick="goBack()" style="margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
							</div>
						</div> 
						
						<?php 
							}
						?>
						<?php 
						$stmt = $conn->prepare("update costtable set `status`='0' where id='$id'");
						$stmt->execute(); 
				}
				catch(PDOException $e)
					{
						echo "Error: " . $e->getMessage();
					}
				$conn = null;
                    ?>	
					</form>
				</div>
				
				
				<div style="height: 40px;">
				    <form action="employeeXPrint.php">
				        <input type="submit" value="Generate Report" style="float:right;">
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
                    <a href="#">Contact US</a>
                </div>
            </div>
        </div>
    </body>
</html>
