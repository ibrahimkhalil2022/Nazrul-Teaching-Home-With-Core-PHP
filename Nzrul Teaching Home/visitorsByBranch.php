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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">      
        <title>visitorByCourse.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';		
		?>
        <div class="main_body">
            
            <!--End of Menu Bar-->
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar -->
            </div>
            <!-- End of Header Section --->

            <div class="admin">
                <div>
                    <div class="text">
                        Visitors Search Window
                    </div>
                    <form action="visitorsByBranchShow.php" method="POST">
                        <fieldset>
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 30%;">
                                    <div style="text-align: right;font-size: 15px; margin-top:30px;">
                                        Course Name: &nbsp;&nbsp;
                                    </div>
									<?php
										include 'connection1.php';
									try 
									{
										$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$stmt = $conn->query("SELECT DISTINCT preferredBranch FROM visitorsinfo"); 
									?>
                                </div>
                                <div style="display: inline-table; width: 45%;">
                                    <select name="preferredBranch" class="input_box" style="width: 211px;" required="">
                                        <option value="">Select Branch</option>
                                        <?php
										while ($row = $stmt->fetch())
										{
											$preferredBranch = $row["preferredBranch"];	?>										
											<option value="<?php echo $preferredBranch;?>"><?php echo $preferredBranch;?></option>
										<?php
										}
									}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
										?>
                                    </select>
                                </div>
                            </div>
                            <div style="padding: 10px 5px 0px 5px;">
                                <div class="login">
                                    <input type="submit" name="submit" value="Search" style="background: green; width: 210px; font-size: 15px; margin-left: 5px;"> 
                                </div>
                            </div>
                        </fieldset>
                    </form>
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
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    </body>
</html>
