<?php
include('connect.php');
$ID = $_GET['ID'];
$sql1 = "DELETE FROM diem WHERE ID = '$ID'";
$stmt = $conn->prepare($sql1);
$query = $stmt->execute();
header("location:index.php");
?>