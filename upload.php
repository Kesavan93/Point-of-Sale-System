<?php 	include'config.php';
		include'header.php';
		
		$item = $_GET['items'];
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<style>

.button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
}


.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>


</head>


<body>
  
<div class="w3-container">
  <h2><b>ADD BARCODE</b></h2>

<form method="POST" action="">

<table class="w3-table-all">
<thead>
<!---	Barcode -->
    <tr>
        <th class="w3-green">Barcode</th>
		<td><input type="text" name="bar" class="form-control" id="number" value="<?php echo $item; ?>" autofocus></td>
	</tr>
	
<!---	ProductName -->		
	<tr>
		<th class="w3-green">Product Name</th>
		<td><input type="text" name="nme" class="form-control" id="name" required></td>
	</tr>
	
<!---	Image		
	<tr>
        <th class="w3-green">Image</th>
		<td><input type="file" name="image" accept="image/*;capture=camera" required></td>
	</tr>
-->
	
<!---	Price-->		
	<tr>
		<th class="w3-green">Price</th>
		<td><input type="text" name="price" class="form-control" id="price" required></td>
	</tr>

<!---	Submit-->	        
	<tr>
		<td><button  type="submit" name="submit" class="button button1">Submit</button></td>
	</tr>

</thead>

</table>
</div>  
  
</form>  





 <?php
 if(isset($_POST['submit']))
 {
	$barcode = $_POST['bar'];
	$proname = $_POST['nme'];
	//$pimage = $_POST['image'];
	$price = $_POST['price'];

	 
	$sql = "INSERT INTO product (pbcode, pname, pprice) VALUES ('$barcode', '$proname', '$price')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
	header("Location:pos.php?items=$barcode");
 }



?>

</body>
</html>


