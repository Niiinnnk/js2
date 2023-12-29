<?php
include '../connect.php';
$id = $_POST["id"];
$name = $_POST["name"];
$surname = $_POST["surname"];		
$patronymic = $_POST["patronymic"];	
$phone = $_POST["phone"];	
$email = $_POST["email"];	
$password = $_POST["pass"];	
$sql = "UPDATE users SET name=:name, surname=:surname, patronymic=:patronymic, phone=:phone, email=:email, pass=:password WHERE user_id=$id";
$result = $connection->prepare($sql);
$result->bindParam(":name", $name);
$result->bindParam(":surname", $surname);
$result->bindParam(":patronymic", $patronymic);
$result->bindParam(":phone", $phone);
$result->bindParam(":email", $email);
$result->bindParam(":password", $password);
$query = $result->execute();
header("Location: profile.php");
?>

