<?php
include "connect.php";
$jumlah = $_POST['jumlah'];
$waktu = $_POST['waktu'];
$waktu = date('Y-m-d', strtotime($waktu));
$sql = "INSERT INTO pengeluaran (jumlah, waktu) VALUES ($jumlah, STR_TO_DATE('$waktu', '%Y-%m-%d'))";

if (mysqli_query($conn, $sql)) {
 
  header("location: ../index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
