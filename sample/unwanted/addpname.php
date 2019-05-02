<?php 	include'config.php';
		include'header.php';
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<?php
$bcode = $_GET['bar'];

?>  
<div class="w3-container">
  <h2>Add Product Name</h2>

<form method="GET" action="addpimage.php?$bcode">

<table class="w3-table-all">
<thead>
	
<!---	ProductName -->		
	<tr>
		<th class="w3-green">Product Name</th>
		<td><input type="text" name="name" class="form-control" id="name"></td>
	</tr>


<!---	Submit-->	        
	<tr>
		<td><button type="submit" class="btn btn-default">Submit</button></td>
	</tr>

</thead>

</table>
</div>  
  
</form>  





 <?php
    

?>
</body>
</html>


