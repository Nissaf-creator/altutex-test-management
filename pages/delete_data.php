<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require 'config.php';
     
    $test_id = $_GET['test_id'];
    $req = "delete from " .$suffix."_test_results where test_id = '$test_id'";
    if(mysqli_query($conn,$req)){
      echo "Data with test_id '$test_id' deleted successfully";
    }
    else{
      echo"can't delete the data with test_id = $test_id";
    }
  

    
