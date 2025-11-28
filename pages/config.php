<?php 

function createTablesIfNotExist($conn, $suffix) {

    $table_test_results = $suffix . "_test_results";


    $req1 = "CREATE TABLE IF NOT EXISTS $table_test_results (
        test_id INT AUTO_INCREMENT PRIMARY KEY,
        nom_client VARCHAR(20),
        type_teinture VARCHAR(20),
        code_couleur VARCHAR(20),
        code_article VARCHAR(20),
        test_data Json,
        date_sub DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        success_rate varchar(6)

    );";

    mysqli_query($conn, $req1) or die("can't create the table in the database");

        
    $inserts = [
        "INSERT INTO $table_test_results (nom_client, type_teinture, code_couleur, code_article, test_data, success_rate) VALUES 
        ('Armani', 'Direct', 'Red', 'cotton', '[{\"Rouge\":[\"20\",\"22\",\"21\",\"21\",\"\",\"\",\"\"]},{\"Jaune\":[\"25\",\"24\",\"23\",\"24\",\"\",\"\",\"\"]},{\"Bleu\":[\"15\",\"16\",\"16\",\"15\",\"\",\"\",\"\"]},{\"Noir\":[\"10\",\"10\",\"10\",\"9.5\",\"\",\"\",\"\"]},{\"Blanc\":[\"5\",\"5\",\"5\",\"5\",\"\",\"\",\"\"]},{\"Sel\":[\"4000\",\"4000\",\"4000\",\"4000\",\"\",\"\",\"\"]},{\"Carbonate\":[\"1000\",\"1000\",\"1000\",\"1000\",\"\",\"\",\"\"]},{\"Soude\":[\"700\",\"700\",\"700\",\"700\",\"\",\"\",\"\"]},{\"Eau\":[\"2500\",\"2500\",\"2500\",\"2500\",\"\",\"\",\"\"]}]', '100')",
        
        "INSERT INTO $table_test_results (nom_client, type_teinture, code_couleur, code_article, test_data, success_rate) VALUES 
        ('Versace', 'Reactif', 'Blue', 'cotton', '[{\"Rouge\":[\"20\",\"22\",\"21\",\"21\",\"\",\"\",\"\"]},{\"Jaune\":[\"25\",\"24\",\"23\",\"24\",\"\",\"\",\"\"]},{\"Bleu\":[\"15\",\"16\",\"16\",\"15\",\"\",\"\",\"\"]},{\"Noir\":[\"10\",\"10\",\"10\",\"9.5\",\"\",\"\",\"\"]},{\"Blanc\":[\"5\",\"5\",\"5\",\"5\",\"\",\"\",\"\"]},{\"Sel\":[\"4000\",\"4000\",\"4000\",\"4000\",\"\",\"\",\"\"]},{\"Carbonate\":[\"1000\",\"1000\",\"1000\",\"1000\",\"\",\"\",\"\"]},{\"Soude\":[\"700\",\"700\",\"700\",\"700\",\"\",\"\",\"\"]},{\"Eau\":[\"2500\",\"2500\",\"2500\",\"2500\",\"\",\"\",\"\"]}]', '83.33')",

        "INSERT INTO $table_test_results (nom_client, type_teinture, code_couleur, code_article, test_data, success_rate) VALUES 
        ('Gucci', 'Direct', 'Green', 'cotton', '[{\"Rouge\":[\"20\",\"22\",\"21\",\"21\",\"\",\"\",\"\"]},{\"Jaune\":[\"25\",\"24\",\"23\",\"24\",\"\",\"\",\"\"]},{\"Bleu\":[\"15\",\"16\",\"16\",\"15\",\"\",\"\",\"\"]},{\"Noir\":[\"10\",\"10\",\"10\",\"9.5\",\"\",\"\",\"\"]},{\"Blanc\":[\"5\",\"5\",\"5\",\"5\",\"\",\"\",\"\"]},{\"Sel\":[\"4000\",\"4000\",\"4000\",\"4000\",\"\",\"\",\"\"]},{\"Carbonate\":[\"1000\",\"1000\",\"1000\",\"1000\",\"\",\"\",\"\"]},{\"Soude\":[\"700\",\"700\",\"700\",\"700\",\"\",\"\",\"\"]},{\"Eau\":[\"2500\",\"2500\",\"2500\",\"2500\",\"\",\"\",\"\"]}]', '66.67')",
    ];

    $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM $table_test_results");
    $row = mysqli_fetch_assoc($result);

    if ($row['count'] == 0) {
        foreach ($inserts as $sql) {
            mysqli_query($conn, $sql) or die("Insert failed: " . mysqli_error($conn));
        }
    }
}

$servername = "localhost";
$username = "root"; 
$password = ""; 
$suffix = "altutex_international";  

$dbname = $suffix . "_test_teinture";  

// Create a connection to the MySQL server (without selecting the database)
$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
        header('Content-Type: application/json');
        echo json_encode([
            "success" => false,
            "error" => "Database connection failed: " . $conn->connect_error
        ]);
    } else {
        die("Database connection failed: " . $conn->connect_error);
    }
    exit;
}

/*
$result = $conn->query("SELECT VERSION()");
$row = $result->fetch_assoc();
echo "MySQL Version: " . $row['VERSION()'];
*/

// Check if the database exists
$dbCheckQuery = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";
$result = $conn->query($dbCheckQuery);

if ($result->num_rows == 0) {
    $createDbQuery = "CREATE DATABASE $dbname";
    if ($conn->query($createDbQuery) !== TRUE) {
        if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            header('Content-Type: application/json');
            echo json_encode([
                "success" => false,
                "error" => "Error creating database: " . $conn->error
            ]);
        } else {
            die("Error creating database: " . $conn->error);
        }
        exit;
    }
}

// connect the new database to the conn
$conn->select_db($dbname);

// Create the tables if they don't exist
createTablesIfNotExist($conn, suffix: $suffix);


