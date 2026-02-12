<?php
include "config.php";

$stmt = $conn->prepare("INSERT INTO cards 
(username, company_logo, name, designation, department, phone, whatsapp, email, website, company_address)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssss",
$_POST['username'],
$_POST['company_logo'],
$_POST['name'],
$_POST['designation'],
$_POST['department'],
$_POST['phone'],
$_POST['whatsapp'],
$_POST['email'],
$_POST['website'],
$_POST['company_address']
);

if($stmt->execute()){
    echo "Employee Card Created Successfully!<br>";
    echo "View Card: <a href='index.php?user=".$_POST['username']."'>Click Here</a>";
}else{
    echo "Error inserting data";
}
?>