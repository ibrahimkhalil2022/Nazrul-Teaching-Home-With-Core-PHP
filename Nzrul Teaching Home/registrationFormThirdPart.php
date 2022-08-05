<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    header('Location: index.php');
    exit();
}  
?>
<?php
if(isset($_POST["submit"]))
{	
	
	$classDays = $_POST["classDays"];
    $classTime = $_POST["classTime"];
    $fullName = $_POST["fullName"];
    $mothersName = $_POST["mothersName"];
    $studentContact = $_POST["studentContact"];
    $presentAddress = $_POST["presentAddress"];
	
	$email = $_POST["email"];
    $fathersName = $_POST["fathersName"];
    $dob = $_POST["dob"];
    $guardianContact = $_POST["guardianContact"];
    $permanentAddress = $_POST["permanentAddress"];
    $className = $_POST["className"];
	
	$classYear = $_POST["classYear"];
    $subjectName = $_POST["subjectName"];
    $instituteName = $_POST["instituteName"];
	$departmentName = $_POST["departmentName"];
	
    $designation = $_POST["designation"];	
    $companyName = $_POST["companyName"];
    $departmentName = $_POST["departmentName"];		
    $companyAddress = $_POST["companyAddress"];
	
	$degree1 = $_POST["degree1"];
    $year1 = $_POST["year1"];
    $instituteName1 = $_POST["instituteName1"];
    $grade1 = $_POST["grade1"];
	
	$degree2 = $_POST["degree2"];
    $year2 = $_POST["year2"];
    $instituteName2 = $_POST["instituteName2"];
    $grade2 = $_POST["grade2"];
	
	$degree3 = $_POST["degree3"];
    $year3 = $_POST["year3"];
    $instituteName3 = $_POST["instituteName3"];
    $grade3 = $_POST["grade3"];
	
	$degree4 = $_POST["degree4"];
    $year4 = $_POST["year4"];
    $instituteName4 = $_POST["instituteName4"];
    $grade4 = $_POST["grade4"];
	
	$channel = $_POST["channel"];
    $channelContact = $_POST["channelContact"];
	
	
	//<!--Session part -->
	
    $_SESSION["classTime"] = $classTime;
    $_SESSION["classTime"] = $classTime;
	
    $_SESSION["fullName"] = $fullName;
    $_SESSION["mothersName"] = $mothersName;
    $_SESSION["studentContact"] = $studentContact;
    $_SESSION["presentAddress"] = $presentAddress;
	
	$_SESSION["email"] = $email;
	
    $_SESSION["fathersName"] = $fathersName;
    $_SESSION["dob"] = $dob;
    $_SESSION["guardianContact"] = $guardianContact;
    $_SESSION["permanentAddress"] = $permanentAddress;
    $_SESSION["className"] = $className;
	
	$_SESSION["classYear"] = $classYear;
    $_SESSION["subjectName"] = $subjectName;
    $_SESSION["instituteName"] = $instituteName;
	$_SESSION["departmentName"] = $departmentName;
	
    $_SESSION["designation"] = $designation;	
    $_SESSION["companyName"] = $companyName;
    $_SESSION["departmentName"] = $departmentName;		
    $_SESSION["companyAddress"] = $companyAddress;
	
	$_SESSION["degree1"] = $degree1;
    $_SESSION["year1"] = $year1;
    $_SESSION["instituteName1"] = $instituteName1;
    $_SESSION["grade1"] = $grade1;
	
	$_SESSION["degree2"] = $degree2;
    $_SESSION["year2"] = $year2;
    $_SESSION["instituteName2"] = $instituteName2;
    $_SESSION["grade2"] = $grade2;
	
	$_SESSION["degree3"] = $degree3;
    $_SESSION["year3"] = $year3;
    $_SESSION["instituteName3"] = $instituteName3;
    $_SESSION["grade3"] = $grade3;
	
	$_SESSION["degree4"] = $degree4;
    $_SESSION["year4"] = $year4;
    $_SESSION["instituteName4"] = $instituteName4;
    $_SESSION["grade4"] = $grade4;
	
	$_SESSION["channel"] = $channel;
    $_SESSION["channelContact"] = $channelContact;
	
	
}
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid #C0C0C0;
            }

            input:checked {
                height: 50px;
                width: 50px;
            </style>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
            <link href="css/index1.css" rel="stylesheet">           
            <link href="css/style.css" rel="stylesheet">
            <title>regForm3rdPart.jsp</title>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>

            <script>
                function showFields(string)
                {
                    var xRequest;
                    if (string === "")
                    {
                        document.getElementById("Show_update").innerHTML = "";
                        return;
                    }
                    if (window.XMLHttpRequest)
                    {
                        xRequest = new XMLHttpRequest();
                    } else
                    {
                        xRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xRequest.onreadystatechange = function ()
                    {
                        if ((xRequest.readyState === 4) && (xRequest.status === 200))
                        {
                            document.getElementById("txtHint").innerHTML
                                    = xRequest.responseText;
                        }
                    };
                    xRequest.open("get", "regShowBoxAjax.php?q=" + string, "true");
                    xRequest.send();
                }

                function showFields1(string1)
                {
                    var xRequest1;
                    if (string1 === "")
                    {
                        document.getElementById("Show_update").innerHTML = "";
                        return;
                    }
                    if (window.XMLHttpRequest)
                    {
                        xRequest1 = new XMLHttpRequest();
                    } else
                    {
                        xRequest1 = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xRequest1.onreadystatechange = function ()
                    {
                        if ((xRequest1.readyState === 4) && (xRequest1.status === 200))
                        {
                            document.getElementById("txtHint1").innerHTML
                                    = xRequest1.responseText;
                        }
                    };
                    xRequest1.open("get", "regShowBoxAjax2.php?q=" + string1, "true");
                    xRequest1.send();
                }
            </script>
        </head>
        <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';
			
			$courseName = $_SESSION["courseName"];
			$registrationBranch = $_SESSION["registrationBranch"];
				
		?>
        <div class="main_body">
                <div style="margin-top: 100px;">
                    <!--Extra Margin add for menu bar-->
                </div>
                <!-- End of Header Section -->
                <div class = "admission" >
                    Admission Form
                </div>
                <form action="registrationConfirm.php" method="POST">
                    <div style="width: 90%; margin: auto;">
                        <fieldset>
                            <legend style="font-weight: bolder;">Official Details</legend>
                            <?php
							include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT *FROM course where courseName = '$courseName' AND branch = '$registrationBranch' AND classDays = '$classDays' AND classTime = '$classTime'");
						while ($row = $stmt->fetch())
						{ 
							$batchNo = $row["batchNo"];
							$courseFee = $row["courseFee"];
							$courseDuration = $row["courseDuration"];
							$startDate = $row["startDate"];
						}
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
							
                            ?>
                            <div class="innerTable">
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table; width: 25%;">Batch No.</div>
                                    <div style="display: inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $batchNo; 
									$_SESSION["batchNo"] = $batchNo;?>
                                    </div>
                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table;width: 25%;">Course Name</div>
                                    <div style="display: inline-table;"> <b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $courseName?></div>

                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table;width: 25%;">Class Days</div>
                                    <div style="display: inline-table;"> <b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $classDays;
									
									$_SESSION["classDays"] = $classDays;
									?></div>
                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table;width: 25%;">Course Fee</div>
                                    <div style="display: inline-table;"> <b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $courseFee;
									$_SESSION["courseFee"] = $courseFee; 
									?>&nbsp;BDT</div>
                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table;width: 25%;">Cash Amount</div>
                                    <div style="display: inline-table;"> <b>:</b>&nbsp;&nbsp;&nbsp;<input type="text" name="payment" style="display: inline-table; width: 200px; font-size: 15px;"/>&nbsp;BDT</div>
                                </div>

                            </div>
                            <div class="innerTable">
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px;width: 30%; display: inline-table;">Branch</div>
                                    <div style="display: inline-table;">
                                        <b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $registrationBranch;?>
                                    </div>
                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px;width: 30%; display: inline-table;">Course Duration</div>
                                    <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $courseDuration;
									$_SESSION["courseDuration"] = $courseDuration;
									?> classes</div> 
                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table;width: 30%;">Class Time</div>
                                    <div style="display: inline-table;"> <b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $classTime;?></div>
                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table;width: 30%;">Starting Date</div>
                                    <div style="display: inline-table;"> <b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $startDate;
									$_SESSION["startDate"] = $startDate;
									?></div>
                                </div>
                                <div style="padding: 5px;">
                                    <div style="padding-left: 5px; display: inline-table;width: 25%;"></div>
                                    <div style="display: inline-table; height: 25px;"></div>
                                </div>
                            </div>
                            <div style="font-size:20px; color: deeppink;">Instalment (if necessary)<b>:</b></div>
                            <div>
                                <div style="padding: 5px; display: inline-table; width: 20%; padding-left:27px;">
                                    <div style="padding-left: 5px; display: inline-table;">Instalment-1</div>
                                    <div style="display: inline-table;">&nbsp;&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;
                                        <input type="checkbox" name="value1" value="true" style="display: inline-table; width: 15px;height: 15px;" onchange="showFields(this.value)"/>
                                    </div>
                                </div>
                                <b id="txtHint"> </b>
                            </div>

                            <div>
                                <div style="padding: 5px; display: inline-table; width: 20%; padding-left:27px;">
                                    <div style="padding-left: 5px; display: inline-table;">Instalment-2</div>
                                    <div style="display: inline-table;">&nbsp;&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;
                                        <input type="checkbox" name="value2" value="true" style="display: inline-table; width: 15px;height: 15px;" onchange="showFields1(this.value)"/>
                                    </div>
                                </div>
                                <b id="txtHint1"> </b>
                            </div>
                        </fieldset>
                    </div>

                    <!-- PHP Code Start Here -->
                   

                    <!-- PHP Code End Here -->
                    <div class="#" style="margin-top: 30px; margin-left: auto; margin-right: auto; width: 90%;">
                        <fieldset>
                            <legend style="font-weight: bolder;">Personal Details</legend>
                            <div class="innerTable" style="width: 100%; margin-left: 5px;">
                                <div style="padding: 5px;">
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">Full Name (in Block Letters)</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $fullName; ?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%"></div>
                                            <div style="display:inline-table;"></div>
                                    </div>
                                </div>

                                <div style="padding: 5px;">
                                    <div style="display:inline-table; width: 48%;">
                                        <div style="display:inline-table; width: 45%">Father's Name</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $fathersName; ?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%;">
                                        <div style="display:inline-table; width: 45%">Mother's Name</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $mothersName; ?></div>
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
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $studentContact; ?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">Contact (Guardian)</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $guardianContact; ?></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="profession">
                        <div style="padding-left: 5px; font-weight: bolder; margin-bottom: 10px;margin-top: 20px;">Profession</div><hr>
                    </div>

                    <div class="#" style="margin-top: 30px; margin-left: auto; margin-right: auto; width: 90%;">
                        <fieldset>
                            <legend style="font-weight: bolder;">Student</legend>
                            <div class="innerTable" style="width: 100%; margin-left: 5px;">
                                <div style="padding: 5px;">
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">Class</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $className; ?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">Subject</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $subjectName; ?></div>
                                    </div>
                                </div>

                                <div style="padding: 5px;">
                                    <div style="display:inline-table; width: 48%;">
                                        <div style="display:inline-table; width: 45%">Year</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $classYear; ?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%;">
                                        <div style="display:inline-table; width: 45%">Institute Name</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $instituteName; ?></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="#" style="margin-top: 30px;margin-bottom: 30px; margin-left: auto; margin-right: auto; width: 90%;">
                        <fieldset>
                            <legend style="font-weight: bolder;">Professional</legend>
                            <div class="innerTable" style="width: 100%; margin-left: 5px;">
                                <div style="padding: 5px;">
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">Designation</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $designation; ?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">Department</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $departmentName; ?></div>
                                    </div>
                                </div>

                                <div style="padding: 5px;">
                                    <div style="display:inline-table; width: 48%;">
                                        <div style="display:inline-table; width: 45%">Company Name</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $companyName; ?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%;">
                                        <div style="display:inline-table; width: 45%">Address</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $companyAddress; ?></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>                    


                    <!--Start Education Part Here-->
                    <div  class="#" style="margin-top: 30px;margin-bottom: 30px; margin-left: auto; margin-right: auto; width: 90%;">
                        <fieldset>
                            <legend style="font-weight: bolder;">Educational Information</legend>
                            <div class="educationTable">
                                <table style="width:100%">
                                        <tr>
                                            <th style="width: 15%;">Degree / Exam Title</th>
                                        <th style="width: 10%;">Passing Year</th> 
                                        <th >Name of the institute<br>(School / college / university)</th>
                                        <th style="width: 20%;">Division / Grade</th>
                                    </tr>
                                    <tr style="height:30px; text-align: center; background: white;">
                                        <td style="width: 15%;"><?php echo $degree1;?></td>
                                        <td style="width: 10%;"><?php echo $year1;?></td> 
                                        <td ><?php echo $instituteName1;?></td>
                                        <td><?php echo $grade1;?></td>
                                    </tr>
                                    <tr style="height:30px; text-align: center; background: white;">
                                        <td style="width: 15%;"><?php echo $degree2;?></td>
                                        <td style="width: 10%;"><?php echo $year2;?></td> 
                                        <td ><?php echo $instituteName2;?></td>
                                        <td><?php echo $grade2;?></td>
                                    </tr>
                                    <tr style="height:30px; text-align: center; background: white;">
                                        <td style="width: 15%;"><?php echo $degree3;?></td>
                                        <td style="width: 10%;"><?php echo $year3;?></td> 
                                        <td ><?php echo $instituteName3;?></td>
                                        <td><?php echo $grade3;?></td>
                                    </tr>
                                    <tr style="height:30px; text-align: center; background: white;">
                                        <td style="width: 15%;"><?php echo $degree4;?></td>
                                        <td style="width: 10%;"><?php echo $year4;?></td> 
                                        <td ><?php echo $instituteName4;?></td>
                                        <td><?php echo $grade4;?></td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset>
                    </div>

                    <div class="#" style="margin-top: 30px; margin-left: auto; margin-right: auto; width: 90%;">
                        <fieldset>
                            <legend style="font-weight: bolder;"></legend>
                            <div class="innerTable" style="width: 100%; margin-left: 5px;">
                                <div style="padding: 5px;">
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">How did you know us</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $channel;?></div>
                                    </div>
                                    <div style="display:inline-table; width: 48%">
                                            <div style="display:inline-table; width: 45%">Contact No.</div>
                                            <div style="display:inline-table;"><b>:</b>&nbsp;&nbsp;&nbsp;<?php echo $channelContact; ?></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>                

                    <div style="margin-top:20px;margin-bottom: 50px; text-align: right">
                            <div style="display: inline-table;">
                            <input type="submit" value="Go Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;"/>
                        </div>

                        <div style="width: 15%; display: inline-table; margin-right: 20px;">
                            <input type="submit" name="submit" value="Submit" style="font-weight: bold;"/>
                        </div>
                    </div>
                </form>
            </div>
        </body>
    </html>
