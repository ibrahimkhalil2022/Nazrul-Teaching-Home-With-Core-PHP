<?php
$user = $_SESSION["user"];
$pass = $_SESSION["pass"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">      
        <title>allAdmin.jsp</title>
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
                <div style="font-size: 18px;">
                    <?php echo $sessionAdminFullName; ?>
                </div>
                <div>
                    <?php echo $sessionAdminBranch; ?>&nbsp;&nbsp;Branch
                </div>
            </div>

            <!-- Menu Goes Here-->
            <div class="menu">
                <ul class="nav">
                   <li><a href="allAdmin.php">Home</a></li>
                    <li><a >Registration</a>
                        <ul class="subs">
                            <li><a href="registrationForm.php">New Registration</a></li>
                        </ul>
                    </li>
                    <li><a >Visitors</a>
                        <ul class="subs">
                            <li><a href="visitorsEntry.php">New Visitor</a></li>
                            <li><a href="visitorsByCourse.php">Search By Course</a></li>
                            <li><a href="visitorsByBranch.php">Search By Branch</a></li>
                            <li><a href="visitorsByDate.php">Search By Date</a></li>
                            <li><a href="visitorsExisting.php">Existing Visitors</a></li>
                        </ul>
                    </li>
                     <li><a href="">Students</a>
                        <ul class="subs">
                            <li><a href="studentViewAllAdmin.php">View All</a></li>
                            <li><a href="studentViewByIdAdmin.php">View By ID</a></li>
                            <li><a href="studentByBranchAdmin.php">View By Branch</a></li>
                            <li><a href="studentByBatchNoAdmin.php">View By Batch</a></li>
                        </ul>
                    </li>
                     <li><a >Sell</a>
                        <ul class="subs">
                            <li><a href="bookSell.php">Book Sell</a></li>
                        </ul>
                    </li>
                     <li><a >Fees & Dues</a>
                        <ul class="subs">
                            <li><a href="feeReceiveAdmin.php">Fee Receive</a></li>
                            <li><a href="dueAdmissionFee.php">Due Fee Receive</a></li>
                            <li><a href="dueFee.php">Students By Date</a></li>
                            <li><a href="dueStudentsAll.php">All Due Students</a></li>
                        </ul>
                    </li>
                    <li><a >Cost</a>
                        <ul class="subs">
                            <li><a href="costAdd.php">Cost Management</a></li>
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
        </div><!--End of Main Body--> 
    </body>
</html>