<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");
include_once $_SERVER["DOCUMENT_ROOT"] . "/app/lib/functions.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Connection.php";
http_accepted_request(["POST"]);

$con = new Connection();
$con->connect();

$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$pin = $data['pin'];

$user = $con->select("SELECT email, name FROM User WHERE email = '$email' and pin = '$pin'");
if (!$user) {
    $con->response(400, "Credenciales invalidas.");
}

// Login successful
$response = [];
$response = $user;
$_SESSION['username'] = $user->email;
$_SESSION['name'] = $user->name;

http_response_code(200);
echo json_encode($response, JSON_NUMERIC_CHECK | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
