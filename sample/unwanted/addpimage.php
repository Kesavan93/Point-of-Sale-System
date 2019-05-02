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
$bcode
$proname = $_GET['name'];

?>  

  
<div class="w3-container">
  <h2>Add Product Image</h2>

<form method="GET" action="addpprice.php">

<table class="w3-table-all">
<thead>

<!---	Image-->		
	<tr>
        <th class="w3-green">Image</th>
		<td><input type="file" name="image" accept="image/*;capture=camera"></td>
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


