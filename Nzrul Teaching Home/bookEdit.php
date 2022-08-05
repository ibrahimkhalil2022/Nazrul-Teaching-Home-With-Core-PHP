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
		<script>
            function goBack() {
                window.history.back();
            }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet">   
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">
        <title>editBookForm.jsp | N@zrul</title>
    </head>
    <body style="background-color: #f1f1f1">
	<?php include 'header.php'; ?>
        <div class="main_body"> 
            <div style="margin-top: 100px;">
            </div>

            <?php 
			  $id = $_GET["id"];
			  $_SESSION["id"] = $id;
			  include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM bookstocktable where id = '$id'");
						while ($row = $stmt->fetch())
						{ 
							$id= $row["id"]; 
							$bookTitle=$row["bookTitle"]; 
							$bookAuthor=$row["bookAuthor"]; 
							$isbnNo=$row["isbnNo"]; 
							$bookPrice=$row["bookPrice"]; 
							$Mirpur1=$row["Mirpur1"]; 
							$Mirpur2=$row["Mirpur2"]; 
							$Mirpur10=$row["Mirpur10"]; 
							$Barishal=$row["Barishal"]; 
							$lastUpdateDate=$row["lastUpdateDate"];  
						}
							
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
                    ?>
            <!-- Java Code End Here-->
            <div class="adminform">
                <form action="bookEditConfirm.php" method="POST">
                    <div style="font-size: 35px; text-align: center; font-weight: bolder; padding-bottom: 50px;">
                        <u>Edit Book Information</u>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Book Title&nbsp;:
                        </div> 
                        <div style="display: inline-table; width: 45%;">  
							<input type="text" name="bookTitle" class="input_box" value="<?php echo $bookTitle; ?>" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Book Author&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="bookAuthor" class="input_box" value="<?php echo $bookAuthor; ?>" />
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            ISBN No&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="isbnNo" class="input_box" value="<?php echo $isbnNo; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Book Price&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="bookPrice" class="input_box" value="<?php echo $bookPrice; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Mirpur-1&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="Mirpur1" class="input_box" value="<?php echo $Mirpur1; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            Mirpur-2&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="Mirpur2" class="input_box" value="<?php echo $Mirpur2; ?>">
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Mirpur-10&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="Mirpur10" class="input_box" value="<?php echo $Mirpur10; ?>">
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle">
                            Barishal&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="Barishal" class="input_box" value="<?php echo $Barishal; ?>">
                        </div>
                    </div>
                    <div>
                        <div class="inputtextitle">
                            lastUpdateDate&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 45%;">
                            <input type="text" name="lastUpdateDate" class="input_box" value="<?php echo $lastUpdateDate; ?>">
                        </div>
                    </div>                  

                    <input type="submit" value="Update" style="margin-left: 389px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
