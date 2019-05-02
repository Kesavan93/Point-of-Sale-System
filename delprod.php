<?php
include'config.php';
?>

<?php

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM pos WHERE pos_id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "'$id' deleted successfully";
}

header("Location:pos.php");

?>