<?php 	include'config.php';
		include'header.php';
?>
<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

table, th, td {
  border: 1px solid black;
}

.button2 {
  background-color: #555555;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


.button3 {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

</style>

</head>
<body>

<h2><b>SEARCH PRODUCT</b></h2>
<form method="POST">
<input type="text" name="search" id="myInput" placeholder="Search for Products" autofocus>
</form>

<!--	FORM DISPLAY -->
<?php
if(isset($_POST['search']))
{
	$pbid = $_POST['search'];
$sql = "SELECT pbcode, pname, pprice FROM product WHERE pbcode='$pbid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
?>
<form method="POST">
		<table class="w3-table-all" >
		<thead>
		<!---	Barcode -->
			<tr>
				<th class="w3-green">Barcode</th>
				<th class="w3-green">Product Name [Details..]</th>
				<th class="w3-green">Price( RM )</th>
				<th class="w3-green">Edit</th>
				<th class="w3-green">Delete</th>
			</tr>
<?php
    while($row = $result->fetch_assoc()) {
		?>

					
					<tr>
						<th><input type="text" name="bar" class="form-control" id="number" value="<?php echo $row["pbcode"]; ?>" autofocus></th>
						
						<th><input type="text" name="nme" class="form-control" id="name" value="<?php echo $row["pname"]; ?>" required></th>
						
						<th>RM <input type="text" name="price" class="form-control" id="price" value="<?php echo $row["pprice"]; ?>" required></th>
						
						<th><button  type="submit" name="edit" class="button button2">EDIT</button></th>
						
						<th><button  type="submit" name="delete" class="button button3">DELETE</button></th>
					</tr>


<?php

    }
?>
					</thead>

			</table>
</form>
<?php
}else {
    echo "0 results";
}
$conn->close();

}
?>

<!--	END OF FORM DISPLAY -->


<!--	EDIT PRODUCT	-->

<?php

if(isset($_POST['edit'])){

$pbcode=$_POST['bar'];
$pname=$_POST['nme'];
$pprice=$_POST['price'];

$sql2 = "UPDATE product SET pname='$pname', pprice='$pprice' WHERE pbcode='$pbcode'";

if (mysqli_query($conn, $sql2)) {
    echo "<strong>".$pname."</strong> updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

}


?>
<!--	END OF EDIT PRODUCT	-->




<!--	DELETE PRODUCT	-->

<?php

if(isset($_POST['delete'])){

$pbcode=$_POST['bar'];

$sql3 = "DELETE FROM product WHERE pbcode='$pbcode'";

if (mysqli_query($conn, $sql3)) {
    echo "Removed product successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

}


?>
<!--	END OF DELETE PRODUCT	-->

</body>
</html>