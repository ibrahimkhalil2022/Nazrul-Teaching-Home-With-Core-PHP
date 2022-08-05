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
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>visitorEntry.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';		
		?>
        <div class="main_body">
            <?php
					include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT courseName FROM coursetable");
						
			?>
            
            <!--End of Menu Bar-->

            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>

            <!-- End of Header Section -->

            <!-- All Extra Code Start Here -->
            <div class="adminform">
                <form action="visitorsEntryConfirm.php" method="POST">
                    <div style="font-size: 25px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Visitor's information</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Visitor's Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="visitorsName" placeholder="Visitor's Name" class="input_box" required="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Contact Number&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="visitorsContact" placeholder="Contact number " class="input_box" required>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Address&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <textarea name="visitorsAddress" placeholder="Visitor Address" class="input_box" required></textarea>
                        </div>
                    </div>
                    
                    <div>
                        <div class="inputtextitle">
                            Preferred course&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <select name="preferredCourse" class="input_box" style="width: 211px;" required="">
                               <option>Select Course</option>
                                    <?php
                                        while ($row = $stmt->fetch())
					{ 
						$courseName1 = $row["courseName"];
	                                    ?>
	                                    <option value="<?php echo $courseName1;?>"><?php echo $courseName1;?></option>    
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
                    
                    <div>
                        <div class="inputtextitle">
                            Preferred Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="date" name="preferredDate" style="width: 195px; height: 20px;" class="input_box" required="">
                        </div>
                    </div>
                    
                     <div>
                        <div class="inputtextitle">
                            Preferred Time&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="preferredTime" placeholder="Preferred time " class="input_box" required="">
                        </div>
                    </div>
                     <div>
                        <div class="inputtextitle">
                            Preferred Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <select name="preferredBranch" class="input_box" style="width: 211px;" required="">
                                <option value="">Select Branch</option>
                                <option value="Mirpur-1">Mirpur-1</option>
                                <option value="Mirpur-2">Mirpur-2</option>
                                <option value="Mirpur-10">Mirpur-10</option>
                                <option value="Barishal">Barishal</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Submit" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
