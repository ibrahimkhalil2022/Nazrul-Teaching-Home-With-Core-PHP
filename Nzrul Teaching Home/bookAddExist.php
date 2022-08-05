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
        <title>bookAddExist.jsp</title>
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
                <form action="bookAddExistConfirm.php" method="POST">
                    <div style="font-size: 22px; text-align: center; font-weight: bolder; padding-bottom: 50px; padding-top: 20px;">
                        Add Exist Book
                    </div>
                    <div style="margin-top: 5px;">
                        <div class="inputtextitle" style="width: 25%;">
                            Book Name&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 25%; margin-left: 2px;">
                            <div>
                                <select name="bookTitle" style="font-size: 16px;padding: 5px; width: 210px;" required>
                                    <option value="">select book</option>
                                    <?php  
										 
										include 'connection1.php';
									try 
									{
										$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
										// set the PDO error mode to exception
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

										$stmt = $conn->query("SELECT * FROM bookstocktable");
										while ($row = $stmt->fetch())
										{  
                                    ?>
                                    <option value="<?php echo $row["bookTitle"]; ?>"><?php echo $row["bookTitle"]; ?></option>
                                    <?php 
                                        }}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
                    ?>  
                                </select>
                            </div>
                        </div>
                    </div>
					<div>
                        <div class="inputtextitle" style="width: 25%;">
                            Branch&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%; margin-left: 2px;">
                            <select name="bookBranch" style="font-size: 17px;padding: 6px; width: 210px;" required>
                                <option value="">select branch</option>
                                <option value="Mirpur-1">Mirpur-1</option>
                                <option value="Mirpur-2">Mirpur-2</option>
                                <option value="Mirpur-10">Mirpur-10</option>
                                <option value="Barishal">Barishal</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="inputtextitle" style="width: 25%;">
                            Quantity&nbsp;:
                        </div>
                        <div style="display: inline-table; width: 50%;">
                            <input type="text" name="bookQuantity" placeholder="Number of books" class="input_box"/>
                        </div>
                    </div>
                    <input type="submit" value="Next" style="margin-left: 300px; margin-bottom: 15px;margin-top: 10px;" class="input_box"/>
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
