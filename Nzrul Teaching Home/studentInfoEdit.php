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
                
        <title>allAdmin.php</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'headerall.php';		
		?>
		<div class="main_body">

            <div style="margin-top: 100px; background-color: #f1f1f1">
            </div>
			<div style="text-align:center; font-size: 23px; color: green;">
			<?php
				$message = $_SESSION["message"];
				echo $message;
				$message = null;
				$_SESSION["message"] = $message;
			?>
			</div>
            <div style="text-align: center; font-size: 18px; color: green; min-height: 20px;">
            </div>
            
            			<!-- Section of Edit Student Information-->
            			
            	<div style="margin-left:350px; width:80%;">
	            <div>
		            	<div style="display:inline-table;">
			            <form action="stdPersonal.php">
			            	<input type="submit" value="Edit Personal Info" style="width:250px;">
			            </form>
		            	</div>
	            	
		            	<div style="display:inline-table">
			            <form action="">
			            	<input type="submit" value="Edit Educational Info"style="width:250px;">
			            </form>
		            	</div>
	            </div>
	            <div>
		        <div style="display:inline-table">
			    <form action="">
			     	<input type="submit" value="Edit Professonal Info"style="width:250px;">
			     </form>
		         </div>
	            	
		          <div style="display:inline-table">
			     <form action="">
			      	<input type="submit" value="Edit Service Info"style="width:250px;">
			     </form>
		           </div>
	            </div>
          	</div>  	
		<div style="text-align: center; min-height: 180px;">
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
