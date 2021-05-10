<?php

include('config.php');

$id = $_GET['id'];
$status = "Approved";

$sql = "UPDATE bookform SET status='$status' WHERE id='$id'";

mysqli_query($database, $sql);

echo "<script>alert('Application approved...'); window.location.href='muaviewbooking.php'</script>";

?>