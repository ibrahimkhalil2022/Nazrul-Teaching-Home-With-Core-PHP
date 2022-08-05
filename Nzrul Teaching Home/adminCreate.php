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
        <title>createAdmin.php | N@zrul</title>
    </head>

    <body style="background-color: #f1f1f1">
       <?php
			include 'header.php';
	   ?>
	   <div class="main_body">
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->

            </div>
            <!-- End of Header Section --> 
            <!-- Start input form for Create Admin-->

            <div class="adminform">
                <form action="adminCreateConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>Create Administrator</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <select name="adminBranch" class="input_box" style="width: 211px;" required="">
                                <option value="">Select Branch</option>
                                <option value="Administrator">Nazrul</option>
                                <option value="Mirpur-1">Mirpur-1</option>
                                <option value="Mirpur-2">Mirpur-2</option>
                                <option value="Mirpur-10">Mirpur-10</option>
                                <option value="Barishal">Barishal</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            User Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="adminUserName" placeholder="User Name" class="input_box" required="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Full Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="adminFullName" placeholder="Full Name" class="input_box" required="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            E-mail&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="email" name="adminEmail" placeholder="E-mail" class="input_box" required="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Password&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="password" name="adminPassword" placeholder="password" class="input_box" required="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Contact Number&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="mobile" name="adminMobile" placeholder="mobile number" class="input_box" required="">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Address&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <textarea rows="2" cols="20" name="adminAddress" placeholder="Write Address Here" class="input_box" required=""></textarea>
                        </div>
                    </div>                    

                    <input type="submit" value="Create" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box" />
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
