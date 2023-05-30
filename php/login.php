<?php 
 
include 'connect.php';
 

 
session_start();
 
if (isset($_SESSION['name'])) { 
    header("Location: ../index.php");
}
 
if ($_POST['submit']) {
    $username = $_POST['name'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM user WHERE name='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $test = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $test['name'];
   
        header("Location: ../index.php");
    } else {
       
        header("Location: ../page_login.php");
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
