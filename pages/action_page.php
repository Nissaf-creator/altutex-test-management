<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'config.php';

header("Content-Type: application/json");


$jsonData = file_get_contents('php://input');
 

$data = json_decode($jsonData, true); //raddineha array min strings


if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(["error" => "Invalid JSON format"]);
    exit();
}


// Extract header data dynamically
$header = $data['header'];
$client = $header[0]['client'];
$teinture = $header[1]['teinture']; 
$couleur = $header[2]['couleur'];
$article = $header[3]['article'];
$success_rate = $header[4]['successRate'];



$table_test_results= $suffix."_test_results";



// Extract body data (material percentages for each test)
$body = $data['body'];

if (empty($body)) { 
    echo json_encode(["test_data is empty"]);
    exit();
}


// Insert everything into test_results
$sqlTestResults = "INSERT INTO $table_test_results (test_id, nom_client, type_teinture, code_couleur, code_article, test_data, success_rate) 
                   VALUES ('','$client', '$teinture', '$couleur', '$article', '" . json_encode($body) . "', '$success_rate')";


$res = mysqli_query($conn, $sqlTestResults);

if (!$res) {
    echo json_encode(["error" => "Error executing query: " . mysqli_error($conn)]);
    exit();
}

// Return success response
echo json_encode(["Data saved successfully"]);

$conn->close();
