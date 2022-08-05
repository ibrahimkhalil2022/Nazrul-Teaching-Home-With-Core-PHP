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
            table {
                border-collapse: collapse; 
            } 
            table, td, th {
                border: 1px solid black;
                height: 40px;
                width: 1000px;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>costSearchByDate.jsp</title>
    </head>

    <body style="background-color: #f1f1f1">
		<?php include 'header.php'; ?>
        <div class="main_body"> 
            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar--> 
            </div> 
            <!-- End of Header Section -->

            <!-- Print admin table information-->
            <div style="text-align: center; font-size: 18px; color: green;"> 
            </div>

            <div class="adminform">
                <form action="costSearchByItemShow.php" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        Cost Search By Item
                    </div>
						<div>
                            <div class="inputtextitle" style="width: 35%;">
                                Cost Type&nbsp;:
                            </div>
                            <div style="display: inline-table; width: 51.5%;">
                                <select name="costTitle" required="" style="width:100%; font-size: 17px; height: 36px; padding: 5px; margin-left: 2px; margin-top: 5px;">
                                    <option value="">select Fee Type</option>
                                    <option value="Teacher Payment">Teacher Payment</option>
                                    <option value="OT">O.T</option>
                                    <option value="Office Rent">Office Rent</option>
                                    <option value="Stationary">Stationary</option>
                                    <option value="Conveyance">Conveyance</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Electric Fittings">Electric Fittings</option>
                                    <option value="CNG">CNG</option>
                                    <option value="Electricity Bill">Electricity Bill</option>
                                    <option value="Water-WASA">Water-WASA</option>
                                    <option value="Cleaning Charge">Cleaning Charge</option>
                                    <option value="Newspaper Bill">Newspaper Bill</option>
                                    <option value="Mobile Bill">Mobile Bill</option>
                                    <option value="Internet Bill">Internet Bill</option>
                                    <option value="Mineral Water">Mineral Water</option>
                                    <option value="Maintainance">Maintainance</option>
                                    <option value="Printing">Printing</option>
                                    <option value="Photocopy">Photocopy</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Office Equipment">Office Equipment</option>
                                    <option value="OCTEN">OCTEN</option>
                                    <option value="Wall Writing">Wall Writing</option>
                                    <option value="Cash To MD">Cash To MD</option>
                                </select>
                            </div>
                        </div>
                    <input type="submit" name= "submit" value="Next" style="margin-left: 500px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
