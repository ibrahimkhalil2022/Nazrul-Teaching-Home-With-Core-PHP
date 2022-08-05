<?php 
$user = $_SESSION["user"];
$pass = $_SESSION["pass"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>Administrator.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
        <div class="main_body">
            <div class="title">
                Naz&#174;ul
                <div class="slogan">
                    #1 for IELTS & Spoken!
                </div>
                <div class="super">TM</div>                    
            </div>
            <div class="printadmin">
                <div style="font-size: 18px;">
                </div>
                <div>
                    <?php
                        $sessionAdminFullName = $_SESSION["sessionAdminFullName"];
                        $sessionAdminBranch = $_SESSION["sessionAdminBranch"];
                    ?>
                </div>
            </div>
            <div class="printadmin">
                <div style="font-size: 18px; color:white;">
                    <?php echo $sessionAdminFullName; ?>
                </div>
                <div>
                    <?php echo $sessionAdminBranch; ?>
                </div>
            </div>
            <!-- Menu Goes Here-->
            <div class="menu">
                <ul class="nav">
                    <li><a href="administrator.php">Home</a></li>
                    <li><a >Registration</a>
                        <ul class="subs">                            
                            <li><a href="studentUnseen.php">New Registrations</a></li>
                            <li><a href="studentById.php">Search By ID</a></li>
                            <li><a href="studentByContact.php">Search By Contact</a></li>
                            <li><a href="studentByBatchNo.php">Search By Batch No.</a></li>
                            <li><a href="studentByBranch.php">Search By Branch</a></li>
                            <li><a href="studentByCourse.php">Search By Course</a></li>
                            <li><a href="studentByCourseBranch.php">Search By Choice</a></li>
                            <li><a href="studentViewAll.php">All Students</a></li>
                        </ul>
                    </li>
                    <li><a >Employee</a>
                        <ul class="subs">
                            <li><a href="employeeAdd.php">New Employee</a></li>
                            <li><a href="employeeViewAll.php">View Employee</a></li>
                            <li><a href="employeeByBranch.php">Search by Branch</a></li>
                            <li><a href="employeeUpdate.php">Update Employee</a></li>
                            <li><a href="employeeIncrement.php">Employee Increment</a></li>
                            <li><a href="employeeIncrementView.php">View Increment</a></li>
                            <li><a href="employeeSalary.php">Employee Salary</a></li>                            
                            <li><a href="employeeXView.php">View x-Employee</a></li>
                        </ul>
                    </li>
                    <li><a >Book</a>
                        <ul class="subs">
                            <li><a href="bookEntry.php">Add New Book</a></li>
                            <li><a href="bookAddExist.php">Add Existing Book</a></li>
                            <li><a href="bookUpdate.php">Update Book</a></li>
                            <li><a href="bookStockShow.php">Show Stock</a></li>
                        </ul>
                    </li>
                     <li><a >Fees</a>
                        <ul class="subs">
                            <li><a href="feeAdd.php">Fee Entry</a></li>
                            <li><a href="feeUpdate.php">Fee Update</a></li>
                            <li><a href="feeTableShow.php">View Fee Table</a></li>
                            <li><a href="feeDue.php">Due Students</a></li>
                        </ul>
                    </li>
                    <li><a >Cost</a>
                        <ul class="subs">
                            <li><a href="costUnseen.php">Unseen Cost</a></li>
                            <li><a href="costSearchByBranch.php">Search By Branch</a></li>
                            <li><a href="costSearchByDate.php">Search By Date</a></li>
                            <li><a href="costSearchByItem.php">Search By Item</a></li>
                            <li><a href="costSearchByItemBranch.php">S_By Item & Branch</a></li>
                            <li><a href="costSearchByItemDate.php">S_By Item & Date</a></li>
                            <li><a href="costViewAll.php">All Cost</a></li>
                        </ul>
                    </li>
                    <li><a >Accounts</a>
                        <ul class="subs">
                            <li><a href="#">View All Transection</a></li>
                            <li><a href="#">View By Date</a></li>
                            <li><a href="#">View By Branch</a></li>
                            <li><a href="#">View By Course</a></li> 
                            <li><a href="#">View By Course</a></li>                            
                        </ul>
                    </li>
                     <li><a >Revenue</a>
                        <ul class="subs">
                            <li><a href="revenueByDate.php">By Date</a></li>
                            <li><a href="revenueByBranch.php">By Branch</a></li>
                            <li><a href="revenueByAllView.php">All Revenue</a></li>                           
                        </ul>
                    </li>
                    <li><a >Courses</a>
                        <ul class="subs">
                            <li><a href="courseOffer.php">New Course offer</a></li>
                            <li><a href="courseUpdate.php">Update Courses</a></li>
                            <li><a href="courseByBranch.php">View by Branch</a></li>
                            <li><a href="courseViewAll.php">All Offered Courses</a></li>
                            <li><a href="courseAdd.php">Add Course</a></li>
                            <li><a href="courseTableUpdate.php">View Course</a></li>
                        </ul>
                    </li>
                    <li><a >Admin</a>
                        <ul class="subs">
                            <li><a href="adminCreate.php">Create Admin</a></li>
                            <li><a href="adminUpdate.php">Update Admin</a></li>
                            <li><a href="adminViewAll.php">View Admin</a></li>
                            <li><a href="adminByBranch.php">Search By Branch</a></li> 
                        </ul>
                    </li>
                </ul>
            </div>
            <div style="float: right;padding-top: 3px; padding-right: 3px;">
                <form action="logOut.php">
                    <input type="submit" value="Logout" style="font-size: 12px;"/>
                </form>
            </div>
            <!--End of Menu Bar-->
		</div>
	</body>
</html>
			