<?php

include('config.php');

$id = $_GET['id'];
$status = "Cancelled";

$sql = "UPDATE applymua SET status='$status' WHERE id='$id'";

mysqli_query($database, $sql);

echo "<script>alert('Application Cancelled...'); window.location.href='viewapplyasmua.php'</script>";

?>