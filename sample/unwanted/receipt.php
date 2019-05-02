

<?php
 $connector = null;
 $printername = "XP-80C (copy 1)";
 $connector = new WindowsPrintConnector($printername);
 $printer = new Escpos($connector);
 /* Initialize Printer */
 $printer->initialize();
 $printer->setJustification(Escpos::JUSTIFY_CENTER);
 $printer->setTextSize(2, 2);
 $printer->text("WIFI HOTSPOT\n");
 $logo = new EscposImage("escpos/escposlogo.png");
 $printer->bitImage($logo);
 $printer->setTextSize(1, 1);
 $printer->text("\nNOTE: Each code valid for one\n");
 $printer->text("device only.\n\n");
 $printer->text("Download Speed " . $downloadspeed . " kbps\n");
 $printer->text("Upload Speed " . $uploadspeed . " kbps\n");
 $printer->text("Quota " . $quota . " MB\n");
 $printer->text("\n");
 $printer->setTextSize(2, 2);
 $printer->text($voucherstring . "\n");
 $printer->text("Usable One Time\n\n");
 $printer->setTextSize(1, 2);
 $printer->text("Valid For " . $_POST['length'] . " " . $unitlength . " From Login\n\n");
 $printer->setTextSize(1, 1);
 $printer->text("Connect to Hotspot\n");
 $printer->text("'" . $ssid . "'\n");
 $printer->text("WPA-PSK Password: " . $wpapsk . "\n");
 $printer->text("\n\n\n\n\n");
 $printer->cut();
 $printer->close();
 ?>