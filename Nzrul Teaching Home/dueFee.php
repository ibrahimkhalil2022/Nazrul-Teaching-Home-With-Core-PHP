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
        <title>feeDue.jsp</title> 
        <style>
            table {
                border-collapse: collapse;
            }
            table, td, th {
                border: 1px solid black;
                height: 40px;
                width: 1000px;
            }
        </style> 
    </head>
    <body style="background-color: #f1f1f1">
		<?php include 'headerall.php'; ?>
        <!-- Main div start here-->
        <div class = "main_body" > 
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
                    <form action="dueFeeStudent.php" method="POST">
                        <fieldset>
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 30%;">
                                    <div style="text-align: right;font-size: 15px; margin-top: 40px;">
                                        From Date:&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 30%;">
                                    <div>
                                        <input type="date" name="fromDate" style="padding: 5px;font-size: 15px;" required>
                                    </div>
                                </div>

                                <div style="display: inline-table;width: 30%;">
                                    <div style="text-align: right;font-size: 15px; margin-top: 20px;">
                                        To Date:&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 30%;">
                                    <div>
                                        <input type="date" name="toDate" style="padding: 5px;font-size: 15px;" required>
                                    </div>
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
            <!-- Print admin table information--> 

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
