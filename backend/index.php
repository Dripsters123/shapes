<?php
include "Rectangle.php";
header("Access-Control-Allow-Origin: *");
$data = ["message" => "Hi from backend!"];
echo json_encode($data) . "<br/>";

$rectangle = new Rectangle("Purple", 12, 24);
echo json_encode($rectangle, JSON_PRETTY_PRINT);
