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
        <title>courseOffer.jsp</title>
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
            <div class="adminform">
                <form action="courseOfferConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>New Course Offer</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <select name="branch" class="input_box" style="width: 211px;">
                                <option value="">Select Branch</option>
                                <option value="Mirpur-1">Mirpur-1</option>
                                <option value="Mirpur-2">Mirpur-2</option>
                                <option value="Mirpur-10">Mirpur-10</option>
                                <option value="Barishal">Barishal</option>
                            </select>
                        </div>
                    </div>
                    <?php
						include 'connection1.php';
						try {
							$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
							// set the PDO error mode to exception
							$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

							$stmt = $conn->query('SELECT * FROM coursetable'); 
					?>
                    <div>
                        <div class="inputtextitle">
                            Course Title&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <select name="courseName" class="input_box" style="width: 211px;" required="">
                                <option value="">Select course</option>
                                    <?php 
									while ($row = $stmt->fetch())
											{ 
											?>
											<option value="<?php echo $row["courseName"];?>">
												<?php echo $row["courseName"];?>
											</option>
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
                            Course Duration&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="courseDuration" placeholder="Number of Classes" class="input_box">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Class Days&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input list="classDays" name="classDays" class="input_box">
                            <datalist id="classDays">
                                <option value="Friday">Friday</option>
                                <option value="Sat-Mon-Wed">Sat-Mon-Wed</option>
                                <option value="Sun-Tue-Thu">Sun-Tue-Thu</option>
                            </datalist>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Class Time&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="time" name="classTime" placeholder="Time of Class AM/PM" class="input_box" style="width: 195px;">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Course Fee&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="courseFee" placeholder="Course Fee" class="input_box">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Start Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="date" name="startDate" placeholder="" class="input_box" style="width: 195px;">
                        </div>
                    </div>                    

                    <input type="submit" name="submitcourse" value="Add Course" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
