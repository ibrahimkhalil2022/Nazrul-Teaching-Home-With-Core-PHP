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
                vertical-align: center;
            }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <link href="css/index.css" rel="stylesheet"> 
        <link href="css/finalView.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">
        <title>updateCouse.jsp</title>
    </head>
    <body style="background-color: #f1f1f1">
		<?php
			include 'header.php';
		?>
		<!-- Main div start here-->
        <div class="main_body">

            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->

            </div>

            <!-- End of Header Section -->

            <!-- Print admin table information-->

            <div style="margin:auto; width:99%; min-height: 300px;">
                <div style="font-size:30px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    <u>Book Stock Information</u></div>
                <table style="width:100%; text-align: center;">
                    <tr>
                        <th style="width:5%;">ID</th>
                        <th style="width:15%;">BOOK Title</th>
                        <th style="width:10%;">Author</th>
                        <th style="width:8%;">ISBN No.</th> 
                        <th style="width:8%;">Price</th>
                        <th style="width:8%;">Mirpur-1</th>
                        <th style="width:8%;">Mirpur-2</th>
                        <th style="width:8%;">Mirpur-10</th>
                        <th style="width:8%;">Barishal</th>
                        <th style="width:8%;">Last Update</th>
						 
                    </tr>
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
							$id = $row["id"];
							?>	
					<tr>
                        <td style="width:7%;"><?php echo $row["id"]; ?><sup>th</sup></td>
                        <td style="width:8%;"><?php echo $row["bookTitle"]; ?></td>
                        <td><?php echo $row["bookAuthor"]; ?></td>
                        <td style="width:12%;"><?php echo $row["isbnNo"]; ?></td>
                        <td style="width:8%;"><?php echo $row["bookPrice"]; ?>&nbsp;BDT</td>
                        <td style="width:10%;"><?php echo $row["Mirpur1"]; ?></td>
                        <td style="width:8%;"><?php echo $row["Mirpur2"]; ?></td>
                        <td style="width:8%;"><?php echo $row["Mirpur10"]; ?></td>
                        <td style="width:8%;"><?php echo $row["Barishal"]; ?></td>
                        <td style="width:8%;"><?php echo $row["lastUpdateDate"]; ?></td>
						 
                    </tr>
					  
		<?php 	}
	
					}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;
                   		
		
		?>
                </table>
                
                <div style="height: 40px;">
		    <form action="bookStockPrint.php">
		        <input type="submit" value="Generate Report" style="float:right;">
		    </form>
		</div>
            </div>

            <!-- End of admin table information-->
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
