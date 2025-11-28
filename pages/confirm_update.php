<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';


header("Content-Type: application/json");

$all_data = json_decode(file_get_contents("php://input"), true);

$test_id = $all_data['test_id'];  
$data = $all_data['jsonData'];  
    

if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(["error" => "Invalid JSON format"]);
    exit();
}


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


$sqlTestResults = "Update $table_test_results set nom_client='$client', type_teinture='$teinture', code_couleur='$couleur',
code_article='$article', test_data='" . json_encode($body) . "',date_sub=NOW(),success_rate='$success_rate' where test_id='$test_id'";

$res = mysqli_query($conn, $sqlTestResults);



if (!$res) {
    echo json_encode(["error" => "Error executing query: " . mysqli_error($conn)]);
    exit();
}

// Return success response
echo json_encode(["Data updated successfully"]);

$conn->close();
