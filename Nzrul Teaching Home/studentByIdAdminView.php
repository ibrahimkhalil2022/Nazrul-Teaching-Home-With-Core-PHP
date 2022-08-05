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
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet"> 
        <link href="css/finalView.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">
        <title>viewByID2.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'headerall.php'; ?>
        <!-- Main div start here-->
        <div class="main_body"> 
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div> 
            <!-- End of Header Section --> 
			
            <!-- Print admin table information-->
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div> 
            <!-- End of Header Section --> 
            <!-- Print admin table information--> 
            <?php 
				$id = $_POST["id"];
				include 'connection1.php';
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->query("select  *from studentinfo where stdId = '$id'");
			while ($row = $stmt->fetch())
			{
						 
					$stdId = $row["stdId"];
                    $stdName = $row["stdName"];
                    $batchNo = $row["batchNo"];
                    $faName = $row["faName"];

                    $moName = $row["moName"];
                    $stdContact = $row["stdContact"];
                    $guaContact = $row["guaContact"];
                    $email = $row["email"];

                    $dob = $row["dob"];
                    $presentAddress = $row["presentAddress"];
                    $permanentAddress = $row["permanentAddress"];
                    $className = $row["className"];

                    $classYear = $row["classYear"];
                    $subjectName = $row["subjectName"];
                    $instituteName = $row["instituteName"];
                    $faName = $row["designation"];

                    $departmentName = $row["departmentName"];
                    $companyName = $row["companyName"];
                    $companyAddress = $row["companyAddress"];

                    $degree1 = $row["degree1"];
                    $year1 = $row["year1"];
                    $instituteName1 = $row["instituteName1"];
                    $grade1 = $row["grade1"];

                    $degree2 = $row["degree2"];
                    $year2 = $row["year2"];
                    $instituteName2 = $row["instituteName2"];
                    $grade2 = $row["grade2"];

                    $degree3 = $row["degree3"];
                    $year3 = $row["year3"];
                    $instituteName3 = $row["instituteName3"];
                    $grade3 = $row["grade3"];

                    $degree4 = $row["degree4"];
                    $year4 = $row["year4"];
                    $instituteName4 = $row["instituteName4"];
                    $grade4 = $row["grade4"];

                    $admissionDate = $row["admissionDate"];
                    $courseName = $row["courseName"];
                    $courseFee = $row["courseFee"];
                    $payment = $row["payment"];
                    $branch = $row["branch"];
                    $admin = $row["admin"];

				}
				}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
			 
                if ($stdId != null) {
            ?> 
            <div style="margin-top: 30px; margin-left: auto; margin-right: auto; width: 90%;">
                <fieldset>
                    <legend style="font-weight: bolder;">Student Information Window</legend>
                    <div style="text-align:center; font-size: 20px; font-weight: bolder; margin-bottom: 0px;">
                        <?php echo $stdName; ?>
                    </div>
                    <div style="text-align:center; font-size: 18px; font-weight: bolder; margin-bottom: 15px;">
                        Student ID:<?php echo $stdId; ?>
                    </div>

                    <fieldset style="width:90%; margin: auto;">
                        <legend style="font-weight:bolder;">Course Details</legend>
                        <div style="padding: 5px;">
                            <div style="display:inline-table; width: 48%;">
                                <div style="display:inline-table; width: 45%;">Batch No.</div>
                                <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $batchNo; ?></div>
                            </div>
                            <div style="display:inline-table; width: 48%;">
                                <div style="display:inline-table; width: 45%;">Branch</div>
                                <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $branch; ?></div>
                            </div>
                        </div>

                        <div style="padding:5px;">
                            <div style="display:inline-table; width: 100%;">
                                <div style="display:inline-table; width: 21.7%;">Course Name</div>
                                <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $courseName; ?></div>
                            </div>
                        </div>

                        <div style="padding: 5px;">
                            <div style="display:inline-table; width: 100%;">
                                <div style="display:inline-table; width: 21.7%;">Course Fee [BDT]</div>
                                <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $courseFee; ?></div>
                            </div>
                        </div>

                        <div style="padding: 5px;">
                            <div style="display:inline-table; width: 48%;">
                                <div style="display:inline-table; width: 45%;">Paid Amount</div>
                                <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $payment; ?></div>

                            </div>
                            <!-- calculate due amount here -->
                            <?php  
                                $dueAmount = $courseFee - $payment;
                            ?> 
                            <!-- calculate due amount here -->
                            <div style="display:inline-table; width: 48%;">
                                <div style="display:inline-table; width: 45%;">Due Amount</div>
                                <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $dueAmount; ?></div>
                            </div>
                        </div>
                        <div style="padding: 5px;">
                            <div style="display:inline-table; width: 100%;">
                                <div style="display:inline-table; width: 21.7%;">Admission Date</div>
                                <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $admissionDate; ?></div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset style="width:90%; margin: auto; margin-top: 10px;">
                        <legend style="font-weight:bolder;">Personal Details</legend>
                        <div class="innerTable" style="width: 100%; margin-left: 5px;">
                            <div style="padding: 5px;">
                                <div style="display:inline-table; width: 48%">
                                    <div style="display:inline-table; width: 45%">Full Name (in Block Letters)</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $stdName; ?></div>
                                </div>
                                <div style="display:inline-table; width: 48%">
                                    <div style="display:inline-table; width: 45%"></div>
                                    <div style="display:inline-table;"></div>
                                </div>
                            </div>

                            <div style="padding: 5px;">
                                <div style="display:inline-table; width: 48%;">
                                    <div style="display:inline-table; width: 45%">Father's Name</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $faName; ?></div>
                                </div>
                                <div style="display:inline-table; width: 48%;">
                                    <div style="display:inline-table; width: 45%">Mother's Name</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $moName; ?></div>
                                </div>
                            </div>
                            <div style="padding: 5px;">
                                <div style="display:inline-table; width: 98%;">
                                    <div style="display:inline-table; width: 22%">Present Address</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $presentAddress; ?></div>
                                </div>
                            </div>

                            <div style="padding: 5px;">
                                <div style="display:inline-table; width: 98%;">
                                    <div style="display:inline-table; width: 22%">Permanent Address</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $permanentAddress; ?></div>
                                </div>
                            </div>
                            <div style="padding: 5px;">
                                <div style="display:inline-table; width: 48%;">
                                    <div style="display:inline-table; width: 45%">E-mail Address</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $email; ?></div>
                                </div>
                                <div style="display:inline-table; width: 48%;">
                                    <div style="display:inline-table; width: 45%">Date of Birth</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $dob; ?></div>
                                </div>
                            </div>

                            <div style="padding: 5px;">
                                <div style="display:inline-table; width: 48%">
                                    <div style="display:inline-table; width: 45%">Contact (Student)</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $stdContact; ?></div>
                                </div>
                                <div style="display:inline-table; width: 48%">
                                    <div style="display:inline-table; width: 45%">Contact (Guardian)</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $guaContact; ?></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </fieldset>
                <div >
                    <?php  } else {
                           header('location:administrator.jsp');
                        } ?> 
                </div>  
                <fieldset style="margin-top:20px;">
                    <legend style="font-weight:bolder;" >Educational Information</legend>
                    <table style="width:100%;">
                        <tr>
                            <th style="width:20%;">Exam Name</th>
                            <th style="width:20%;">Passing Year</th>
                            <th style="width:50%;">Name of the institute</th>
                            <th style="width:10%;">Grade</th>
                        </tr>
                        
                        <tr style="text-align:center;">
                            <td style="width:20%;"><?php echo $degree1; ?></td>
                            <td style="width:20%;"><?php echo $year1; ?></td>
                            <td style="width:50%;"><?php echo $instituteName1; ?></td>
                            <td style="width:10%;"><?php echo $grade1; ?></td>
                        </tr>
                        <tr style="text-align:center;">
                            <td style="width:20%;"><?php echo $degree2; ?></td>
                            <td style="width:20%;"><?php echo $year2; ?></td>
                            <td style="width:50%;"><?php echo $instituteName2; ?></td>
                            <td style="width:10%;"><?php echo $grade2; ?></td>
                        </tr>
                        <tr style="text-align:center;">
                            <td style="width:20%;"><?php echo $degree3; ?></td>
                            <td style="width:20%;"><?php echo $year3; ?></td>
                            <td style="width:50%;"><?php echo $instituteName3; ?></td>
                            <td style="width:10%;"><?php echo $grade3; ?></td>
                        </tr>
                        <tr style="text-align:center;">
                            <td style="width:20%;"><?php echo $degree4; ?></td>
                            <td style="width:20%;"><?php echo $year4; ?></td>
                            <td style="width:50%;"><?php echo $instituteName4; ?></td>
                            <td style="width:10%;"><?php echo $grade4; ?></td>
                        </tr>
                    </table>
                </fieldset>

            </div>
            <!-- End of student information code-->
            <div>
                <form action="studentViewByIdAdmin.php">
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
