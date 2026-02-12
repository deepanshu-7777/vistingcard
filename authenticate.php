<?php
include "config.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$stmt = $conn->prepare("SELECT * FROM hr_users WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    $_SESSION['hr'] = $username;
    header("Location: dashboard.php");
}else{
    echo "Invalid Login";
}
?>