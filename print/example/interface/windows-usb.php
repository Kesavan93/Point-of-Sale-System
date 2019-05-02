<?php 	include'config.php';

$paid = $_GET['paid'];
$stotal = $_GET['stotal'];
$balance = $_GET['balance'];
$stotal = number_format($stotal, 2);
$paid = number_format($paid, 2);
$balance = number_format($balance, 2);
//echo $stotal."\n".$paid."\n =".number_format($balance, 2);

?>

<?php
/* Change to the correct path if you copy this example! */
require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

/**
 * Install the printer using USB printing support, and the "Generic / Text Only" driver,
 * then share it (you can use a firewall so that it can only be seen locally).
 *
 * Use a WindowsPrintConnector with the share name to print.
 *
 * Troubleshooting: Fire up a command prompt, and ensure that (if your printer is shared as
 * "Receipt Printer), the following commands work:
 *
 *  echo "Hello World" > testfile
 *  copy testfile "\\%COMPUTERNAME%\Receipt Printer"
 *  del testfile
 */
 $printerName = "XPrinter Kesa";
try {
    // Enter the share name for your USB printer here
    //$connector = null;
    $connector = new WindowsPrintConnector($printerName);

    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
	//$printer->setJustification(Printer::JUSTIFY_CENTER);
	

		$sql = "SELECT posprod, posprice FROM pos";
		$result = $conn->query($sql);
		
	date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date('d-m-Y H:i:s a', time()); //Returns IST
	$printer -> text("Printed on ".$date."\n\n");
	$printer -> text("YourSMart : The Choice is YourS\n\n");
		if ($result->num_rows > 0) {
			$items = array();
			while($row = $result->fetch_assoc()) {
				
				$prod = $row['posprod'];
				$price = $row['posprice'];
				$pprod = substr($prod, 0, 15);
				
				$printer -> text($pprod);
				$printer -> text("------------ ");
				$printer -> text(" RM ".$price);
				$printer -> text("\n");
				$items[] = $pprod;
			}
			
		}else {
			echo "0 results";
		}
		
	$items = json_encode($items);

	$printer -> text("\n");
	$printer -> text("TOTAL :----------------------- RM ");
	$printer -> text($stotal);
	$printer -> text("\n");
	$printer -> text("PAID :------------------------ RM ");
	$printer -> text($paid);
	$printer -> text("\n");
	$printer -> text("BALANCE :--------------------- RM ");
	$printer -> text($balance);
	$printer -> text("\n");
    $printer -> text("Please Come Again");
	$printer -> text("\n\n");
    $printer -> cut();
    
	
	$sql2="INSERT INTO customer (datetimepurch, cust_items, cust_total, cust_paid, cust_bal)
VALUES ('$date', '$items', '$stotal', '$paid', '$balance')";
	
	mysqli_query($conn, $sql2);
	
	$sql3="DELETE FROM pos;";
	mysqli_query($conn, $sql3);
	
	/* Close config */
	$conn->close();
    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
header("Location:../../../pos.php");