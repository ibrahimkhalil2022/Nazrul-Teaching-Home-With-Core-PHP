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
                xRequest1.open("get", "studentByCourseAjax.php?q=" + string1, "true");
                xRequest1.send();
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
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>adminByBranch.jsp</title>
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
            <div class="admin">
                <div>
                    <div class="text">
                        Student Search Window
                    </div>
                    <form action="studentByCourseBranchView.php" method="POST">
                        <fieldset>
                            <div style="padding: 5px;">
							<div style="display: inline-table;width: 30%;">
								<div style="text-align: right;font-size: 15px; margin-top:10px;">
									Course Name: &nbsp;&nbsp;
								</div>
							</div>
							<div style="display: inline-table; width: 45%;">
								<select name="courseName" class="input_box" style="width: 211px;" onchange="showFields(this.value)" required="">
									<option value="">Select course</option>
										<?php 
											include 'connection1.php';
										try {
											$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
											// set the PDO error mode to exception
											$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											$stmt = $conn->query("select distinct courseName from studentinfo");
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
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 30%;">
                                    <div style="text-align: right;font-size: 15px; margin-top: 10px;">
                                        Branch Name: &nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 45%;">
                                    <select name="branch" class="input_box" style="width: 211px;" required="">
                                        <option value="">Select Branch</option>
                                        <option value="Mirpur-1">Mirpur-1</option>
                                        <option value="Mirpur-2">Mirpur-2</option>
                                        <option value="Mirpur-10">Mirpur-10</option>
                                        <option value="Barishal">Barishal</option>
                                    </select>
                                </div>
                            </div>
                            <div style="padding: 20px 5px 0px 5px;">
                                <div class="login">
                                    <input type="submit" value="Search" style="background: green; width: 210px; font-size: 15px;"> 
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
                    <a href="#">Contact US</a>
                </div>
            </div>
        </div>
    </body>
</html>
