<?php session_start(); ?>
<?php
//session_start();

if(isset($_POST["submit"]))
{
	$branch = $_POST["adminBranch"];
	$user = $_POST["adminUserName"];
	$pass = $_POST["adminPassword"];
	//echo $branch.$user.$pass; 
	include 'connection1.php';
	try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->query("SELECT * FROM admin where adminUserName='$user' AND adminBranch='$branch'");
			  while ($row = $stmt->fetch())
				{
					$_SESSION["sessionAdminFullName"]= $row["adminFullName"];
					$_SESSION["user"]= $row["adminUserName"];
					$_SESSION["pass"]= $row["adminPassword"];
					$dbpass = $row["adminPassword"];
					$dbbranch = $row["adminBranch"];
					$_SESSION["sessionAdminBranch"]= $branch; 
				}  
				if($dbbranch == 'Administrator' && $dbpass == $pass)
				{
					header('Location: administrator.php');
				}
				elseif($dbbranch == 'Mirpur-1'|| $dbbranch == 'Mirpur-2' || $dbbranch == 'Mirpur-10' || $dbbranch == 'Barishal' && $dbpass == $pass)
				{
					header('Location: allAdmin.php');
				}
				else
				{
					header('Location: index.php');
				}
				 
		
		}
	catch(PDOException $e)
		{
			echo "Error: " . $e->getMessage();
		}
	$conn = null;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">        
        <title>Home || N@zrul</title>
    </head>
    <body style="background-color: #f1f1f1">
        <!-- Main div start here-->
        <div class="main_body">
            <div class="title">
                Naz&#174;ul
                <div class="slogan">
                    #1 for IELTS & Spoken!
                </div>
                <div class="super">TM</div>                    
            </div>
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->
            </div>

            <!-- All Extra Code Start Here -->
            <!-- Code strat for admin login panel-->
            <div style="color: red; text-align: center;">
            </div>
            <div class="admin">
                <div>
                    <div class="text" style="font-size: 30px; padding-top: 0px;">
                        Login !
                    </div>
                    <form action="#" method="post">
                        <fieldset>
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 25%;">
                                    <div style="text-align: right;font-size: 20px;">
                                        Branch:&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 25%;">
                                    <div>
                                        <select name="adminBranch" style="font-size: 16px;padding: 5px; width: 210px;" required>
                                            <option value="">select branch</option>
                                            <option value="Administrator">Nazrul</option>
                                            <option value="Mirpur-1">Mirpur-1</option>
                                            <option value="Mirpur-2">Mirpur-2</option>
                                            <option value="Mirpur-10">Mirpur-10</option>
                                            <option value="Barishal">Barishal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 25%;">
                                    <div style="text-align: right;font-size: 20px;">
                                        User:&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 25%;">
                                    <div>
                                        <input type="text" name="adminUserName" placeholder="Enter user name" style="padding: 5px;font-size: 16px;" required>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 25%;">
                                    <div style="text-align: right;font-size: 20px;">
                                        Password:&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 25%;">
                                    <div>
                                        <input type="password" name="adminPassword" placeholder="Enter password" style="padding: 5px;font-size: 16px;" required>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px 0px 0px 0px;">
                                <div>
                                    <input type="submit" name="submit" value="Login" style="background: green; width: 210px; margin-left:102px;;"> 
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

            <!-- Code end for admin login panel-->


            <!-- All Extra Code End Here -->

            <!-- Footer Start Here-->
            <hr style="border: 1px solid violet;">
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
                    <a href="#">Career</a>
                </div>
                <div class="icon">
                    <a href="#">Contact us</a>
                </div>
            </div>
            <!-- End of Footer Here-->

        </div><!--End of Main Body-->

    </body>
</html>
