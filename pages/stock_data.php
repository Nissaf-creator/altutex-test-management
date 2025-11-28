<?php
include_once("config.php");

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

$filePath = 'data_company2.json';
if (file_exists($filePath)) {
    $jsonData = file_get_contents($filePath);
    echo $jsonData;
} else {
    echo json_encode(["error" => "File not found"]);
}



