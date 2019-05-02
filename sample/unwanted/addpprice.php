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
$proname = $_GET['name'];
$proimage = $_GET['image'];

?> 

  
<div class="w3-container">
  <h2>Add Product Price</h2>

<form method="GET" action="upload.php">

<table class="w3-table-all">
<thead>

<!---	Price-->		
	<tr>
		<th class="w3-green">Price</th>
		<td><input type="text" name="price" class="form-control" id="text"></td>
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


