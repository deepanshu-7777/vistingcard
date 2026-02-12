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
<meta charset="UTF-8">
<title>HR Dashboard - Insert Employee</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
    margin:0;
    font-family: "Segoe UI", Arial, sans-serif;
    background: linear-gradient(135deg, #0a1f44, #001233);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.container{
    width:500px;
    background:white;
    padding:40px;
    border-radius:15px;
    box-shadow:0 20px 50px rgba(0,0,0,0.4);
}

h2{
    text-align:center;
    margin-bottom:30px;
    color:#0a1f44;
}

label{
    font-weight:600;
    font-size:14px;
    display:block;
    margin-bottom:5px;
    color:#333;
}

input{
    width:100%;
    padding:10px;
    margin-bottom:18px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:14px;
    transition:0.3s;
}

input:focus{
    border-color:#0a1f44;
    outline:none;
    box-shadow:0 0 5px rgba(10,31,68,0.3);
}

button{
    width:100%;
    padding:12px;
    background:#0a1f44;
    color:white;
    border:none;
    border-radius:6px;
    font-size:15px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#001233;
}

.logout{
    display:block;
    text-align:center;
    margin-top:15px;
    color:#0a1f44;
    text-decoration:none;
    font-weight:600;
}

.logout:hover{
    text-decoration:underline;
}

@media(max-width:600px){
    .container{
        width:90%;
        padding:25px;
    }
}
</style>

</head>
<body>

<div class="container">

<h2>Insert Employee Data</h2>

<form method="POST" action="insert.php">

<label>Username</label>
<input type="text" name="username" required>

<label>Company Logo URL</label>
<input type="text" name="company_logo">

<label>Name</label>
<input type="text" name="name">

<label>Designation</label>
<input type="text" name="designation">

<label>Department</label>
<input type="text" name="department">

<label>Phone</label>
<input type="text" name="phone">

<label>WhatsApp</label>
<input type="text" name="whatsapp">

<label>Email</label>
<input type="email" name="email">

<label>Website</label>
<input type="text" name="website">

<label>Company Address</label>
<input type="text" name="company_address">

<button type="submit">Save Employee Card</button>

</form>

<a class="logout" href="logout.php">Logout</a>

</div>

</body>
</html>