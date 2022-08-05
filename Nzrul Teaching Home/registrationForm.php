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
                xRequest1.open("get","regPrintBranchAjax.php?q=" + string1, "true");
                xRequest1.send();
            }

        </script>
        <!-- Script by hscripts.com -->
        <!-- Script by hscripts.com -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
           
        <link href="css/index.css" rel="stylesheet">   
        <title>registrationForm.jsp</title> 
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';		
		?>
		<div class="main_body">

            <div style="margin-top: 100px; background-color: #f1f1f1">
            </div>
			<div style="text-align:center; font-size: 23px; color: green;">
			<?php
				$message = $_SESSION["message"];
				echo $message;
				$message = null;
				$_SESSION["message"] = $message;
			?>
			</div>
            <div style="text-align: center; font-size: 18px; color: green; min-height: 400px;">
			<?php
					include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT distinct courseName FROM course");
						
			?>


            <div class="admission">
                Admission Form
            </div>
            <form action="registrationFormSecondPart.php" method="POST">
                <div style="margin-top:25px; margin-bottom: 25px; width: 700px; margin: auto;">
                    <fieldset>
                        <legend style="font-weight: bolder;">Official Details</legend>
                        <div class="#" style="padding: 10px 20px 10px 20px;">
                            <div style="width:45%;display: inline-table; text-align: right; font-size: 20px;">Course Name <b>:</b>&nbsp;</div>
                            <div style="width:45%;display: inline-table;">
                                <select name="courseName" onchange="showFields(this.value)" style="font-size: 15px; padding: 5px; width: 200px;" required>
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
                        <div class="#">
                            <div style="width:45%;display: inline-table; text-align: right; font-size: 20px;">Branch <b>:</b>&nbsp;</div>
                            <div style="width:45%;display: inline-table;">
                                <select name="registrationBranch" style="font-size: 15px; padding: 5px; width: 200px;"  id="txtHint" required></select>

                            </div>

                        </div>
                    </fieldset>

                    <div style="margin-top:20px;margin-bottom: 10px; text-align: right; padding-right: 20px;">
                        <div style="width: 10%; display: inline-table;">
                            <input type="submit" name="submit" value="Next" style="font-weight: bold;"/>
                        </div>                    
                    </div>
                </div>
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
