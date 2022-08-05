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
        <title>Administrator.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php include'header.php'; ?>
        <!-- Main div start here-->
        <div class="main_body">
            <!-- End of Header Section --> 
            <!-- Start book sell code here-->
            <div class="adminform" style="margin-top: 100px;">
                <form action="revenueByDateView.php" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        Revenue By Date for All Branch
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            Start Date&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="date" name="fromDate" class="input_box" style="width: 98%;" required="" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 35%;">
                            End Date &nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="date" name="toDate"  class="input_box" style="width: 98%;" required="" />
                        </div>
                    </div>
                    <input type="submit" name = "submit" value="Next" style="margin-left: 500px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
                </form>
            </div>
            <!-- End book sell code here-->

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
