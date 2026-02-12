<?php
$conn = new mysqli("localhost", "root", "", "visiting_card");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = isset($_GET['user']) ? $_GET['user'] : '';

$stmt = $conn->prepare("SELECT * FROM cards WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Card Not Found");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $row['name']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    background: linear-gradient(135deg, #0a1f44, #001233);
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    width: 420px;
    background: linear-gradient(160deg, #0f2b5c, #071a3a);
    border: 2px solid silver;
    border-radius: 20px;
    padding: 35px;
    text-align: center;
    color: white;
    box-shadow: 0 20px 50px rgba(0,0,0,0.6);
}

.logo {
    width: 90px;
    margin-bottom: 15px;
}

h2 {
    margin: 5px 0;
    font-size: 26px;
}

.designation {
    color: #cfd8ff;
    font-size: 16px;
}

.department {
    color: #dcdcdc;
    font-size: 14px;
    margin-bottom: 20px;
}

.info {
    margin: 8px 0;
    font-size: 14px;
}

.info a {
    color: #c0c8ff;
    text-decoration: none;
}

.whatsapp-btn {
    display: inline-block;
    margin-top: 15px;
    padding: 8px 15px;
    background: #25D366;
    color: white;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
}

.whatsapp-btn:hover {
    background: #1ebc59;
}
</style>
</head>

<body>

<div class="card">

    <img class="logo" src="<?php echo $row['company_logo']; ?>" />

    <h2><?php echo $row['name']; ?></h2>
    <div class="designation"><?php echo $row['designation']; ?></div>
    <div class="department"><?php echo $row['department']; ?></div>

    <div class="info">📞 <?php echo $row['phone']; ?></div>
    <a class="whatsapp-btn"
       href="https://wa.me/<?php echo preg_replace('/[^0-9]/','',$row['whatsapp']); ?>"
       target="_blank">
       Chat on WhatsApp
    </a>
    <div class="info">📧 <?php echo $row['email']; ?></div>

    <div class="info">
        🌐 <a href="<?php echo $row['website']; ?>" target="_blank">
            <?php echo $row['website']; ?>
        </a>
    </div>

    <div class="info">📍 <?php echo $row['company_address']; ?></div>




</div>

</body>
</html>