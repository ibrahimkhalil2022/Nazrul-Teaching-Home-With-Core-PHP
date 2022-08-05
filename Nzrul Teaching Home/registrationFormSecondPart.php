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
            table, th, td {
                border: 1px solid #C0C0C0;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index1.css" rel="stylesheet">           
        <link href="css/style.css" rel="stylesheet">
        <title>regForm2ndPart.jsp</title>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <script>

            function showFields(string1)
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
                        document.getElementById("txtHint").innerHTML
                                = xRequest1.responseText;
                    }
                };
                xRequest1.open("get", "regPrintClassTimeAjax.php?q=" + string1, "true");
                xRequest1.send();
            }
        </script>
    </head>
	
    <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';		
		?>
        <div class="main_body">
			<div style="margin-top: 100px;">
					<!--Extra Margin add for menu bar-->
			</div>

            <div class = "admission" >
                Admission Form
            </div>
				<form action="registrationFormThirdPart.php" method="POST"> 
					<div style="width: 90%; margin: auto;">
						<fieldset style="margin-top:20px;">
							<legend style="font-weight: bolder;">Official Details</legend>
							<?php 
								$courseName = $_POST["courseName"];			
								$registrationBranch = $_POST["registrationBranch"];
								
								$_SESSION["courseName"]= $courseName;
								$_SESSION["registrationBranch"]= $registrationBranch;
							?>
							<div class="innerTable" style="border: 1px solid red;">
								<div>
									<div style="padding-left: 5px; display: inline-table; width: 25%;">Branch</div>
									<div style="display: inline-table;"><b>:</b>&nbsp;
										<input value="<?php echo $registrationBranch ?>" style="width:180px; font-size: 15px; margin: 5px;" disabled=""></input>
									</div>
								</div>
								<div>
									<div style="padding-left: 5px; display: inline-table;width: 25%;">Class Days</div>
									<div style="display: inline-table;"> <b>:</b>&nbsp;
										<select name="classDays" style="width:180px; font-size: 15px; margin: 5px;padding: 5px; display: inline-table;" onchange="showFields(this.value)"> 
											<option>Select Class Days</option>
											<?php 
												
																	include 'connection1.php';
										try 
										{
											$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
											// set the PDO error mode to exception
											$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											$stmt = $conn->query("SELECT classDays FROM course where courseName = '$courseName' AND branch = '$registrationBranch'");
											while ($row = $stmt->fetch())
											{ 
												$classDays = $row["classDays"];
												?>
													<option value="<?php echo $classDays;?>"><?php echo $classDays;?></option>    
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
							</div>
							<div class="innerTable" style="border: 1px solid red;">
								<div>
									<div style="padding-left: 5px;width: 25%; display: inline-table;">Course Name</div>
									<div style="display: inline-table;">
										<b>:</b>&nbsp;&nbsp;<input value="<?php echo $courseName ?>" style="width:180px; font-size: 15px; margin: 5px;" disabled="">
									</div>
								</div>
								<div>
									<div style="padding-left: 5px;width: 25%; display: inline-table;">Class Time</div>
									<div style="display:inline-table;"><b>:</b>&nbsp;
										<select name="classTime" style="width:180px; font-size: 15px; margin: 5px;padding: 5px;" id="txtHint">
											<option>Select Class Time</option>
										</select>  
									</div> 
								</div>
							</div>
						</fieldset>
					</div>

			<div class="info" style="margin-top: 30px;">
						<fieldset style="margin-top:20px;">
							<legend style="font-weight: bolder;">Personal Details</legend>
							<div class="innerTable">
								<div style="padding-left: 5px;">Full Name (in Block Letters)</div>
								<div class="input_box"><input type="text" name="fullName" required></div>
								<div style="padding-left: 5px;">Mother's Name</div>
								<div class="input_box"><input type="text" name="mothersName"></div>
								<div style="padding-left: 5px;">Contact Number (Student)</div>
								<div class="input_box"><input type="mobile" name="studentContact" min="11" max="11"></div>                        
								<div style="padding-left: 5px;">Present Address</div>
								<div class="input_box"><input type="text" name="presentAddress"></div>
								<div style="padding-left: 5px;">E-mail</div>
								<div class="input_box"><input type="text" name="email"></div>

							</div>
							<div class="innerTable">
								<div style="padding-left: 5px;">Father's Name</div>
								<div class="input_box"><input type="text" name="fathersName"></div>
								<div style="padding-left: 5px;">Date of Birth (DOB)</div>
								<div class="input_box" style="margin-top:2px;"><input type="date" name="dob" style="font-size:15px;"></div>
								<div style="padding-left: 5px;">Contact Number (Guardian)</div>
								<div class="input_box"><input type="text" name="guardianContact" min="11" max="11"></div>
								<div style="padding-left: 5px;">Permanent Address</div>
								<div class="input_box"><input type="text" name="permanentAddress"></div>

							</div>  
							<div class="profession">
								<div style="padding-left: 5px; font-weight: bolder;">Profession</div><hr>
								<div style="padding-left: 5px; margin-bottom: 10px;">
									<fieldset style="margin-top:20px;">
										<legend style="font-weight: bolder;">Student</legend>
										<div class="innerTable">
											<div style="padding-left: 5px;">Class</div>
											<div class="input_box"><input type="text" name="className"></div>
											<div style="padding-left: 5px;">Year</div>
											<div class="input_box"><input type="text" name="classYear"></div>
										</div>

										<div class="innerTable">
											<div style="padding-left: 5px;">Subject</div>
											<div class="input_box"><input type="text" name="subjectName"></div>
											<div style="padding-left: 5px;">Institute</div>
											<div class="input_box"><input type="text" name="instituteName"></div>
										</div>
									</fieldset>
									<fieldset style="margin-top:20px;">
										<legend style="font-weight: bolder;">Professional</legend>
										<div class="innerTable">
											<div style="padding-left: 5px;">Designation</div>
											<div class="input_box"><input type="text" name="designation"></div>
											<div style="padding-left: 5px;">Department's Name</div>
											<div class="input_box"><input type="text" name="departmentName"></div>
										</div>

										<div class="innerTable">
											<div style="padding-left: 5px;">Company's Name</div>
											<div class="input_box"><input type="text" name="companyName"></div>
											<div style="padding-left: 5px;">Company's Address</div>
											<div class="input_box"><input type="text" name="companyAddress"></div>                                    
										</div>
									</fieldset>

									<fieldset style="margin-top:20px;">
										<legend style="font-weight: bolder;">Educational Information</legend>
										<div class="educationTable">
											<table style="width:100%">
												<tr>
													<th style="width: 15%;">Degree / Exam Title</th>
													<th style="width: 10%;">Passing Year</th> 
													<th >Name of the institute<br>(School / college / university)</th>
													<th style="width: 20%;">Division / Grade</th>
												</tr>
												<tr>
													<td style="width: 15%;">
														<select name="degree1" style="width:100%; padding: 6px; font-size: 16px;">
															<option value="null">Select</option>
															<option value="SSC">SSC</option>
															<option value="SSC(voc)">SSC(VOC)</option>
															<option value="Dakhil">Dakhil</option>
															<option value="0-Level">O-Level</option>
														</select>
													</td>
													<td style="width: 10%;">
														<select name="year1" style="width:100px;padding: 6px; font-size: 16px;">
															<?php
																for ( $i = 1980; $i < 2051; $i++) {
															?>
															<option value="<?php echo $i;?>"><?php echo $i;?></option>
															<?php
																}
															?>
														</select>
													</td> 
													<td >
														<div style="width:97%;">
															<input type="text" name="instituteName1">
														</div>
													</td>
													<td>
														<div style="width:90%;">
															<input type="text" name="grade1">
														</div>
													</td>
												</tr>
												<tr>
													<td style="width: 15%;">
														<select name="degree2" style="width:100%; padding: 6px; font-size: 16px;">
															<option value="null">Select</option>
															<option value="HSC">HSC</option>
															<option value="HSC(voc)">HSC(VOC)</option>
															<option value="HSC(B.Com)">HSC(B.Com)</option>
															<option value="Alim">Alim</option>
															<option value="A-Level">A-Level</option>
															<option value="Diploma in Engineering">Diploma in Engineering</option>
														</select>
													</td>
													<td style="width: 10%;">
														<select name="year2" style="width:100px;padding: 6px; font-size: 16px;">
															<?php
																for ( $i = 1980; $i < 2051; $i++) {
															?>
															<option value="<?php echo $i;?>"><?php echo $i;?></option>
															<?php
																}
															?>
														</select>
													</td> 
													<td >
														<div style="width:97%;">
															<input type="text" name="instituteName2">
														</div>
													</td>
													<td>
														<div style="width:90%;">
															<input type="text" name="grade2">
														</div>
													</td>
												</tr>
												<tr>
													<td style="width: 15%;">
														<select name="degree3" style="width:100%; padding: 6px; font-size: 16px;">
															<option value="null">Select</option>
															<option value="BA">Bachelor of Arts (BA)</option>
															<option value="BSS">Bachelor of Social Science (BSS)</option>
															<option value="BBA">Bachelor of Business Administration (BBA)</option>
															<option value="B.Com">Bachelor of Commerce (B.Com)</option>
															<option value="B.Sc">Bachelor of Science (B.Sc)</option>
															<option value="B.Sc">B.Sc in Engineering (B.Sc in Engr)</option>
															<option value="MBBS">MBBS</option>
														</select>
													</td>
													<td style="width: 10%;">
														<select name="year3" style="width:100px;padding: 6px; font-size: 16px;">
															<?php
																for ( $i = 1980; $i < 2051; $i++) {
															?>
															<option value="<?php echo $i;?>"><?php echo $i;?></option>
															<?php
																}
															?>
														</select>
													</td> 
													<td >
														<div style="width:97%;">
															<input type="text" name="instituteName3">
														</div>
													</td>
													<td>
														<div style="width:90%;">
															<input type="text" name="grade3">
														</div>
													</td>
												</tr>
												<tr>
													<td style="width: 15%;">
														<select name="degree4" style="width:100%; padding: 6px; font-size: 16px;">
															<option value="null">Select</option>
															<option value="MA">Master of Arts (MA)</option>
															<option value="MSS">Master of Social Science (BSS)</option>
															<option value="MBA">Master of Business Administration (BBA)</option>
															<option value="M.Com">Master of Commerce (B.Com)</option>
															<option value="M.Sc">Master of Science (B.Sc)</option>
															<option value="M.Sc">M.Sc in Engineering (B.Sc in Engr)</option>
															<option value="MD">Doctor of Medicine (MD)</option>
														</select>
													</td>
													<td style="width: 10%;">
														<select name="year4"  style="width:100px;padding: 6px; font-size: 16px;">
															<?php
																for ( $i = 1980; $i < 2051; $i++) {
															?>
															<option value="<?php echo $i;?>"><?php echo $i;?></option>
															<?php
																}
															?>
														</select>
													</td> 
													<td>
														<div style="width:97%;">
															<input type="text" name="instituteName4">
														</div>
													</td>
													<td>
														<div style="width:90%;">
															<input type="text" name="grade4">
														</div>
													</td>
												</tr>
											</table>
										</div>
									</fieldset>
								</div>
							</div>
														
							<div class="innerTable" style="margin-top:5px;">
								How did you know us:<br>
								<input list="channel" name="channel" style="margin-top:8px;">
								<datalist id="channel">
									<option value="News Paper">
									<option value="Friend">
									<option value="Classmate">
									<option value="Facebook">
									<option value="Colleguae">
								</datalist>
							</div>
							<div class="innerTable">
								<div style="padding-left: 5px;">Contact</div>
								<div class="input_box"><input type="mobile" name="channelContact"></div>
							</div>
							<div style="padding:15px; font-weight: bolder">
						</fieldset>
					</div>

					<div style="margin-top:20px;margin-bottom: 50px; text-align: right">
						<div style="display: inline-table;">
							<input type="submit" value="Go Back" onclick="goBack()" class="input_box" style="margin-bottom: 15px;margin-top: 10px;">
						</div>
						<div style="width: 15%; display: inline-table;">
							<input type="reset" value="Reset" style="font-weight: bold;font-size: 17px;">
						</div>
						<div style="width: 15%; display: inline-table; margin-right: 20px;">
							<input type="submit" name="submit" value="Next" style="font-weight: bold;">
						</div> 
					</div> 
				</form>
			</div>
		</div>
    </body>
</html>

