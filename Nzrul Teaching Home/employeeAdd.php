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
        <title>Employee Enrollment</title>
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
                <form action="employeeAddConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>Employee Enrollment</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <select name="branch" class="input_box" style="width: 211px; " required>
                                <option value="">Select Branch</option>
                                <option value="Mirpur-1">Mirpur-1</option>
                                <option value="Mirpur-2">Mirpur-2</option>
                                <option value="Mirpur-10">Mirpur-10</option>
                                <option value="Barishal">Barishal</option>
                            </select>
                        </div>
                    </div>

                    <div class="inputtextitle">
                        Position&nbsp;:
                    </div>
                    <div style="display: inline-table; width: 45%;">
                        <select name="position" class="input_box" style="width: 211px;" required>
                            <option value="">Select Position</option>
                            <option value="MD">Managing Director</option>
                            <option value="DMD">Deputy Managing Director</option>
                            <option value="ED">Executive Director</option>
                            <option value="Director">Director</option>
                            <option value="#">------------------------</option>
                            <option value="GM">General Manager</option>
                            <option value="AGM">Assistant General Manager</option>
                            <option value="Manager">Manager</option>
                            <option value="AM">Assistant Manager</option>
                            <option value="#">------------------------</option>
                            <option value="SC">Senior Councillor</option>
                            <option value="Councillor">Councillor</option>
                            <option value="JC">Junior Councillor</option>
                            <option value="Course Co-ordinator">Course Co-ordinator</option>
                            <option value="#">------------------------</option>
                            <option value="Senior Teacher">Senior Teacher</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Assistant Teacher">Assistant Teacher</option> 
                        </select>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Employee Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="empName" placeholder="Employee Name" class="input_box" required>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Father's Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="fathersName" placeholder="Father's Name" class="input_box" required>
                        </div>
                    </div>                    
                    <div>
                        <div class="inputtextitle">
                            Mother's Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="mothersName" placeholder="Mother's Name" class="input_box" required>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Educational Qualification&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="education" placeholder="Educational Qualification" class="input_box" required>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Joining Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="date" name="joiningDate" class="input_box" style="width:195px;" required>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Basic Salary&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="basicSalary" placeholder="Basic Salary" class="input_box" >
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle">
                            Employment Status&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <select name="empStatus" class="input_box" style="width: 211px;">
                                <option value="">Select status</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                    </div>

                    <input type="submit" name="submit" value="Next" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
