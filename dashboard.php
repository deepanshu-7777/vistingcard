<?php
include "config.php";
if(!isset($_SESSION['hr'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>HR Dashboard</title>
</head>
<body>

<h2>Insert Employee Data</h2>

<form method="POST" action="insert.php">

Username: <input type="text" name="username" required><br><br>
Company Logo URL: <input type="text" name="company_logo"><br><br>
Name: <input type="text" name="name"><br><br>
Designation: <input type="text" name="designation"><br><br>
Department: <input type="text" name="department"><br><br>
Phone: <input type="text" name="phone"><br><br>
WhatsApp: <input type="text" name="whatsapp"><br><br>
Email: <input type="text" name="email"><br><br>
Website: <input type="text" name="website"><br><br>
Address: <input type="text" name="company_address"><br><br>

<button type="submit">Save</button>

</form>

<br>
<a href="logout.php">Logout</a>

</body>
</html>