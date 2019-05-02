<?php 	include'config.php';
		include'header.php';
		ob_start();
?>

<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/pos.css">

	<style>

	table, th, td {
	  border: 1px solid black;
	}


	</style>

<script>

window.location.hash="#bottom";

</script>

<!--  <input type="text" id="id_arama" />  -->
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>




  
						<script>

						document.body.onkeyup = function(e){
							if(e.keyCode == 32){
								baki.focus();//your code
							}else if(e.keyCode == 27){
								bill.focus();//your code
							}
						}
						</script>
						





<script>
function disp(){
	let x = Number(document.getElementsByName("total").value);
	let y = Number(document.getElementsByName("cash").value);
	let result = y - x;
	document.getElementById("show").innerHTML=result;
}


</script>

<style>

.myButton1 {
	-moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
	-webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
	box-shadow:inset 0px 1px 0px 0px #cf866c;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d0451b), color-stop(1, #bc3315));
	background:-moz-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-webkit-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-o-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:-ms-linear-gradient(top, #d0451b 5%, #bc3315 100%);
	background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d0451b', endColorstr='#bc3315',GradientType=0);
	background-color:#d0451b;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #942911;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:900;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #854629;
}
.myButton1:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc3315), color-stop(1, #d0451b));
	background:-moz-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-webkit-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-o-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:-ms-linear-gradient(top, #bc3315 5%, #d0451b 100%);
	background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc3315', endColorstr='#d0451b',GradientType=0);
	background-color:#bc3315;
}
.myButton1:active {
	position:relative;
	top:1px;
}


.myButton2 {
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
	background-color:#007dc1;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:900;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
.myButton2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}
.myButton2:active {
	position:relative;
	top:1px;
}


.myButton3 {
	-moz-box-shadow:inset 0px 1px 0px 0px #a6827e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a6827e;
	box-shadow:inset 0px 1px 0px 0px #a6827e;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7d5d3b), color-stop(1, #634b30));
	background:-moz-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:-webkit-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:-o-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:-ms-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
	background:linear-gradient(to bottom, #7d5d3b 5%, #634b30 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d5d3b', endColorstr='#634b30',GradientType=0);
	background-color:#7d5d3b;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #54381e;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:900;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #4d3534;
}
.myButton3:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #634b30), color-stop(1, #7d5d3b));
	background:-moz-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:-webkit-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:-o-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:-ms-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
	background:linear-gradient(to bottom, #634b30 5%, #7d5d3b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#634b30', endColorstr='#7d5d3b',GradientType=0);
	background-color:#634b30;
}
.myButton3:active {
	position:relative;
	top:1px;
}
</style>

</head>


<body>
<?php
if(isset($_POST['hold1'])){

	$sql3 = "SELECT * FROM onholdone";
	$result = $conn->query($sql3);

	if ($result->num_rows > 0) {
		$sql4 = "INSERT INTO pos (posbarc, posprod, posprice) SELECT holdbarc, holdprod, holdprice FROM onholdone";
		$sql5 = "DELETE FROM onholdone";
		mysqli_query($conn, $sql4);
		mysqli_query($conn, $sql5);
		echo "<h3 style='color:#d0451b;'><b>HOLD ONE PUSHED</b></h3>";
	}else{
		$sql6 = "INSERT INTO onholdone (holdbarc, holdprod, holdprice) SELECT posbarc, posprod, posprice FROM pos";
		$sql7 = "DELETE FROM pos";
		mysqli_query($conn, $sql6);
		mysqli_query($conn, $sql7);
		echo "<h3 style='color:#d0451b;'><b>ON HOLD</b></h3>";
	}



}
?>


<?php
if(isset($_POST['hold2'])){

	$sql8 = "SELECT * FROM onholdtwo";
	$result = $conn->query($sql8);

	if ($result->num_rows > 0) {
		$sql9 = "INSERT INTO pos (posbarc, posprod, posprice) SELECT holdbarc, holdprod, holdprice FROM onholdtwo";
		$sql10 = "DELETE FROM onholdtwo";
		mysqli_query($conn, $sql9);
		mysqli_query($conn, $sql10);
		echo "<h3 style='color:#007dc1;'><b>HOLD TWO PUSHED</b></h3>";
	}else{
		$sql11 = "INSERT INTO onholdtwo (holdbarc, holdprod, holdprice) SELECT posbarc, posprod, posprice FROM pos";
		$sql12 = "DELETE FROM pos";
		mysqli_query($conn, $sql11);
		mysqli_query($conn, $sql12);
		echo "<h3 style='color:#007dc1;'><b>ON HOLD</b></h3>";
	}



}
?>

<?php
if(isset($_POST['clrhold'])){


	$sql13 = "DELETE FROM onholdone";
	$sql14 = "DELETE FROM onholdtwo";
	mysqli_query($conn, $sql13);
	mysqli_query($conn, $sql14);

	echo "<h3 style='color:#7d5d3b;'><b>HOLD CLEARED</b></h3>";



}
?>

<!--	<h5><b>POINT OF SALES</b></h5> -->
	<form action="pos.php" method="POST" style="float:left;">
	<input type="text" name="item" id="myInput" placeholder="ADD ITEM" autofocus>
	</form>
	
	<form action="pos.php" method="POST">
	
		<button  type="submit" name="hold1" class="myButton1">HOLD ONE</button>
		<button  type="submit" name="hold2" class="myButton2">HOLD TWO</button>
		<button  type="submit" name="clrhold" class="myButton3">CLEAR HOLD</button>
	
	</form>

<?php
if(isset($_POST['item'])){

	$pitem = $_POST['item'];
	$sql = "INSERT INTO pos (posbarc, posprod, posprice) SELECT pbcode, pname, pprice FROM product WHERE pbcode = '$pitem' ";
	$sql22 = "SELECT pbcode, pname, pprice FROM product WHERE pbcode = '$pitem'";
	$result = $conn->query($sql22);

	if ($result->num_rows > 0) {
		mysqli_query($conn, $sql);
		//echo "New record created successfully";
	}else{
		header("Location:upload.php?items=$pitem");
	}
}
?>

<div id="scroll" style="width:40%; height:400px; float: left; overflow-y:auto;" onload="FocusOnBottom();">
<?php

$sql2 = "SELECT * FROM pos";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
?>

	<table id="customers">
		  <tr>
			<th>PRODUCT NAME</th>
			<th>PRICE</th>
			<th>REMOVE</th>
		  </tr>
 
<?php
	
	$total=0.00;
	

    while($row = $result->fetch_assoc()) {
		//$pid = $row['pos_id'];
?>
			  <tr>
				<td><h4><b><?php	echo $row['posprod'];	?></b></h4></td>
				
				<td><h4><b>
<!--Start -->	<?php	
				
				if($row['posprice']==null)
				{
					?><script type="text/javascript">
							window.open('editposmanual.php?id=<?php echo $row['posbarc']; ?>', '_self');
					</script><?php
					//header("Location:addposmanual.php?id='".$row['posbarc']."'");
				}
				else{
					echo $row['posprice'];
				}				
				?></b></h4></td>
<!--End -->
				
				<td><a href="delprod.php?id=<?php echo $row['pos_id']; ?>"style="background-color: #f44336;	color: white;	padding: 10px 20px;	  text-align: center;	text-decoration: none;  display: inline-block;"><b>DELETE</b></a></td>
			  </tr>

<?php

$total = $total + $row['posprice'];		
	}
?>
<!--		<tr><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
-->
		<tr style='border:2px solid black;'>
		<td style="color:blue;"><h2><b>TOTAL :</b></h2></td>
		<td id="bottom"><h2><b><?php echo number_format($total, 2); ?></b></h2></td>
		<td><form method="POST"><input type="text" name="cash" placeholder="CASH PAY" class="form-control" id="baki" value=""></form></td>
		</tr>
		</table>
		<?php
		
		if(isset($_POST['cash'])){
			
			$pay = $_POST['cash'];
			$outp = $pay - $total;
			?>
				<table id="customers">
				<tr style='border:2px solid black;'>
					<th><h2><b>BALANCE :</b></h2></td>
					<th><h2><b><?php echo number_format($outp, 2); ?></b></h2></th>
					<th><h2><b><a id="bill" href="print\example\interface\windows-usb.php?paid=<?php echo $pay; ?>&stotal=<?php echo $total; ?>&balance=<?php echo $outp; ?>" style="text-decoration:none;">RECEIPT</a></b></h2></td>
				</tr>
				</table>
			
			
			
			<?php
			
		}
		
		?>

<?php

}else {
    echo "<h2><b style='color:8B4513;'>0 ITEMS</b></h2>";
}
$conn->close();


?>
</div>

<div style="border:2px solid black; height:400px; width:60%; overflow:auto;">


<?php
$manuid=10;
$files = glob("img/productimg/*.*");
for ($i=0; $i<count($files); $i++)
{
	$manuid=$manuid+1;
	$num = $files[$i];
	echo '<a href="addposmanual.php?id='.$manuid.'"><img src="'.$num.'" alt="product_image" style="height:100px; width:150px; border: 2px solid green; float:auto;"></a>'."&nbsp;&nbsp;";
	}
	
?>

</div>


  
<!-- style="height:40px; width:40px; border: 2px solid black; float:left;"
-->




</body>
</html>