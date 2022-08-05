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
        <title>visitorByCourse.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';		
		?>
        <div class="main_body">
            
            <!--End of Menu Bar-->
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar -->
            </div>
            <!-- End of Header Section --->

            <div class="admin">
                <div>
                    <div class="text">
                        Visitors Search Window
                    </div>
                    <form action="visitorsByDateShow.php" method="POST">
                        <fieldset>
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 30%;">
                                    <div style="text-align: right;font-size: 15px; margin-top:30px;">
                                        From Date: &nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 45%;">
                                    <input class="input_box" type="date" name="fromDate" required="" />
                                </div>
                            </div>
                            
                            <div style="padding: 5px;">
                                <div style="display: inline-table;width: 30%;">
                                    <div style="text-align: right;font-size: 15px; margin-top:10px;">
                                        To Date: &nbsp;&nbsp;
                                    </div>
                                </div>
                                <div style="display: inline-table; width: 45%;">
                                    <input class="input_box" type="date" name="toDate"  required="" />
                                </div>
                            </div>
                            <div style="padding: 10px 5px 0px 5px;">
                                <div class="login">
                                    <input type="submit" name="submit" value="Search" style="background: green; width: 210px; font-size: 15px; margin-left: 5px;"> 
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
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    </body>
</html>
