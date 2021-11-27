<?php
session_start();

include("connection.php");

$username = $_POST['username'];
$password = md5($_POST['password']);
 
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['login'] = 'login';
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama'] = $row['nama'];

    header("Location: ../index.php");
} else {
    echo '<script type="text/javascript">'; 
    echo 'alert("username atau password anda salah")'; 
    echo 'window.location= "../login.php"';
    echo '</script>';   
}
?>