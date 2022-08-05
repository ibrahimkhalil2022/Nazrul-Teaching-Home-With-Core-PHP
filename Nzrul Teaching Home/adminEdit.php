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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">   
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">
        <title>editAdminForm.jsp | N@zrul</title>
    </head>
    <body style="background-color: #f1f1f1">
	<?php include 'header.php'; ?>
        <div class="main_body"> 
            <div style="margin-top: 100px;">
            </div>

            <?php 
			  $id = $_GET["id"];
			  $_SESSION["id"] = $id;
			  include 'connection1.php';
				try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM admin where id = '$id'");
						while ($row = $stmt->fetch())
						{ 
							$id= $row["id"]; 
							$uName=$row["adminUserName"]; 
							$fullName=$row["adminFullName"]; 
							$branch=$row["adminBranch"]; 
							$email=$row["adminEmail"]; 
							$apass=$row["adminPassword"]; 
							$contact=$row["adminContact"]; 
							$address=$row["adminAddress"]; 	
						}
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
            ?>         
            <!-- Java Code End Here-->
            <div class="adminform">
                <form action="adminEditConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>Edit Admin Information</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>

                        <div style="display: inline-table; width: 45%;">
                            
                            <select name="adminBranch" class="input_box" style="width: 211px;">
                                <option value="Administrator" <?php if($branch == 'Administrator'){ echo "Selected"; } ?> >Nazrul</option>
                                <option value="Mirpur-1" <?php if($branch == 'Mirpur-1'){ echo "Selected"; } ?> >Mirpur-1</option>
                                <option value="Mirpur-2" <?php if($branch == 'Mirpur-2'){ echo "Selected"; } ?> >Mirpur-2</option>
                                <option value="Mirpur-10" <?php if($branch == 'Mirpur-10'){ echo "Selected"; } ?> >Mirpur-10</option>
                                <option value="Barishal" <?php if($branch == 'Barishal'){ echo "Selected"; } ?> >Barishal</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            User Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="adminUserName" class="input_box" value="<?php echo $uName; ?>" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Full Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="adminFullName"class="input_box" value="<?php echo $fullName; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            E-mail&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="email" name="adminEmail" class="input_box" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Password&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="password" name="adminPassword" class="input_box" value="<?php echo $apass; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Contact Number&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="mobile" name="adminContact" class="input_box" value="<?php echo $contact; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Address&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <textarea rows="2" cols="20" name="adminAddress" class="input_box"><?php echo $address; ?></textarea>
                        </div>
                    </div>                    

                    <input type="submit" value="Update" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                </form>
            </div>

            <!-- Footer Start Here -------------------------------------------------------------------- --> 
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
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Career</a>
                </div>
                <div class="icon">
                    <a href="#">Contact US</a>
                </div>
            </div>
            <!-- Footer End Here ------------------------------------------ --> 
        </div><!-- Main Div End Here -------------------------------------- --> 

    </body>
</html>
