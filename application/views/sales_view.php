<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inventory</title>
         <script type="text/javascript" src="<?php echo base_url(); ?>content/jquery-1.9.1.min.js"></script>
	<style type="text/css">

	
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
        #navigation 
        {
            
        }
        #navigation a
        {
            text-decoration: none;
        }
        
        .notVisibleFirst
        {
           
           width: 400px;
            box-shadow: 0 0 10px 10px #4F5155;
            
        }
        
	</style>
        <script>
            $(document).ready(function(){
                $("#addNewSales").click(function(){
                  $("#addNewSalesForm").toggle();
                });
              }); 
        </script>
        
        <script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","http://localhost/inventory/content/data.php",true);
xmlhttp.send();
}
</script>
</head>
<body>

<div id="container">
	<h1>Welcome to Inventory!</h1>

        <div id="navigation">
            <p id="addNewSales" >New Sales</p>
            
            <div id="addNewSalesForm" class="notVisibleFirst">
                <form action="#" method="post">
                    <input type="text" name="formInput"/>
                  
                    <input type="submit"/>
                    
                </form>
                
                

            </div>
            
            <div id="myDiv"><h2>Let AJAX change this text</h2></div>
            <button type="button" onclick="loadXMLDoc()">Change Content</button>
	</div>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>