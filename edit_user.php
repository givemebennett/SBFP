<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbfp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$birthday = $_POST['birthday'];
$role = $_POST['role'];

$sql = "UPDATE users SET firstname=?, lastname=?, email=?, phone_number=?, birthday=?, role=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $firstname, $lastname, $email, $phone_number, $birthday, $role, $id);

$response = array();

if ($stmt->execute()) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

$stmt->close();
$conn->close();

echo json_encode($response);
?>
