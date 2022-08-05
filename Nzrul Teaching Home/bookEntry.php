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
        <title>bookEntry.jsp</title>
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
                <form action="bookEntryConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        <u>New Book Entry</u>
                    </div> 
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Book Title&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;">
                            <input type="text" name="bookTitle" placeholder="Title of the Book" class="input_box" style="width: 98%;" required=""/>
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Author&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;">
                            <input type="text" name="bookAuthor" placeholder="Title of the book" class="input_box" style="width: 98%;" required=""/>
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            ISBN No.&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;">
                            <input type="text" minlength="17" maxlength ="17" name="isbnNo" placeholder=" 13 Digit number like this 000-0-00-000000-0" class="input_box" style="width: 98%;" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Price&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 70%;;">
                            <input type="text" name="bookPrice" placeholder="Price of the Book" class="input_box" style="width: 98%;" required=""/>
                        </div>
                    </div>
                   
                    <input type="submit" name="submit" value="Next" style="margin-left: 500px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
