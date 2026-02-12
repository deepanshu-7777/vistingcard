<!DOCTYPE html>
<html>
<head>
<title>HR Login</title>
<style>
body{
    background:#0a1f44;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Arial;
}
form{
    background:white;
    padding:30px;
    border-radius:10px;
}
input{
    display:block;
    margin:10px 0;
    padding:8px;
    width:200px;
}
button{
    padding:8px 15px;
    background:#0a1f44;
    color:white;
    border:none;
}
</style>
</head>
<body>

<form method="POST" action="authenticate.php">
<h2>HR Login</h2>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>

</body>
</html>