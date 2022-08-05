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
            function showFields(string1)
            {
                var xRequest1;
                if (string1 === "")
                {
                    document.getElementById("Show_update").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {
                    xRequest1 = new XMLHttpRequest();
                } else
                {
                    xRequest1 = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xRequest1.onreadystatechange = function ()
                {
                    if ((xRequest1.readyState === 4) && (xRequest1.status === 200))
                    {
                        document.getElementById("txtHint").innerHTML
                                = xRequest1.responseText;
                    }
                };
                xRequest1.open("get", "studentByBranchAjax.php?q=" + string1, "true");
                xRequest1.send();
            } 
        </script>
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
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome.css">        
        <title>adminByBranch.jsp</title>
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
            <div style="width:100%;">
                <div style="font-size:30px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    <u>Students By Branch</u>
                </div>
                <div style="margin: auto;width: 800px; font-size: 20px;font-weight: bold; margin-bottom: 40px;margin-top: 40px;">
                    <div style="display:inline-table;">
                        Select Branch :&nbsp; 
                    </div>
                    <div style="display:inline-table;"> 
                            <select name="brnach" style="font-size: 18px; width: 200px;padding: 5px;" onchange="showFields(this.value)">
                                 <option>Select Branch</option>
                                <option value="Mirpur-1">Mirpur-1</option>
                                <option value="Mirpur-2">Mirpur-2</option>
                                <option value="Mirpur-10">Mirpur-10</option>
                                <option value="Barishal">Barishal</option>                    
                            </select> 
                    </div>
                </div>
            </div>
            <p id="txtHint"></p> 
			
			
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
