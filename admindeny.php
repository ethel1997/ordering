<?php

include('config.php');

$id = $_GET['id'];
$status = "Denied";

$sql = "UPDATE applymua SET status='$status' WHERE id='$id'";

mysqli_query($database, $sql);

echo "<script>alert('Application denied...'); window.location.href='adminviewapplyasmua.php'</script>";

?>