<?php
include'config.php';
include'header.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

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


<?php
if(isset($_GET['id'])){

$mid = $_GET['id'];

$sql = "SELECT posbarc, posprod, posprice FROM pos WHERE  posprice='' AND posbarc='$mid' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
?>
<body>
<form method="POST">
		<table class="w3-table-all" >
		<thead>
		<!---	Barcode -->
			<tr>
				<th class="w3-green">Barcode</th>
				<th class="w3-green">Product Name [Details..]</th>
				<th class="w3-green">Price( RM )</th>
				<th class="w3-green">Proceed</th>
			</tr>
<?php
    while($row = $result->fetch_assoc()) {
		?>

					
					<tr>
						<th><input type="text" name="bar" class="form-control" id="number" value="<?php echo $row["posbarc"]; ?>" required></th>
						
						<th><input type="text" name="nme" class="form-control" id="name" value="<?php echo $row["posprod"]; ?>" required></th>
						
						<th>RM <input type="text" name="price" class="form-control" id="price" value="<?php echo $row["posprice"]; ?>" required autofocus></th>
						
						<th><button  type="submit" name="edit" class="button button2">ADD</button></th>
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
//$conn->close();

}
?>



<?php

if(isset($_POST['edit'])){

$pbcode=$_POST['bar'];
$pname=$_POST['nme'];
$pprice=$_POST['price'];

$sql2 = "UPDATE pos SET posprice='$pprice' WHERE posbarc='$pbcode' AND posprice='' ";

if (mysqli_query($conn, $sql2)) {
    echo "<strong>".$pname."</strong> updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:pos.php");

}


?>


</body>
</html>