<?php

include('config.php');

$id = $_GET['id'];
$status = "cancelled";

$sql = "UPDATE bookform SET status='$status' WHERE id='$id'";

mysqli_query($database, $sql);

echo "<script>alert('Booking Cancelled...'); window.location.href='cusbooking.php'</script>";

?>