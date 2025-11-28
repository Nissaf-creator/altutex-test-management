<?php

              $req1 = "SELECT * FROM ".$suffix."_test_results";
              $req2="select distinct code_article from ".$suffix."_test_results";
              $req3="select distinct nom_client from ".$suffix."_test_results";
              $req4="select distinct code_couleur from ".$suffix."_test_results";
              $req5="select distinct type_teinture from ".$suffix."_test_results";

              $res1 = mysqli_query($conn, $req1);
              $res2 = mysqli_query($conn, $req2);
              $res3 = mysqli_query($conn, $req3);
              $res4 = mysqli_query($conn, $req4);
              $res5 = mysqli_query($conn, $req5);

              $num_test=mysqli_num_rows($res1); 
              $num_article=mysqli_num_rows($res2);
              $num_client=mysqli_num_rows($res3);
              $num_couleur=mysqli_num_rows($res4);
              $num_teinture=mysqli_num_rows($res5);

              $queries = [
                'articles' => "
                    SELECT code_article, COUNT(code_article) AS article_count
                    FROM {$suffix}_test_results
                    GROUP BY code_article
                    ORDER BY article_count DESC
                    LIMIT 5
                ",
                'clients' => "
                    SELECT nom_client, COUNT(nom_client) AS client_count
                    FROM {$suffix}_test_results
                    GROUP BY nom_client
                    ORDER BY client_count DESC
                    LIMIT 5
                ",
                'couleurs' => "
                    SELECT code_couleur, COUNT(code_couleur) AS couleur_count
                    FROM {$suffix}_test_results
                    GROUP BY code_couleur
                    ORDER BY couleur_count DESC
                    LIMIT 5
                ",
                'teintures' => "
                    SELECT type_teinture, COUNT(type_teinture) AS teinture_count
                    FROM {$suffix}_test_results
                    GROUP BY type_teinture
                    ORDER BY teinture_count DESC
                    LIMIT 5
                "
            ];
            
            
    //Total success rate 
            $somme=0;
            while ($row = mysqli_fetch_array($res1)) {
              $somme+= $row["success_rate"];
            }
            $success_totale = 0;
            if(!$success_totale==0){
                $success_totale=$somme/$num_test;
                // Format the success rate to 2 decimals
                $success_totale = number_format($success_totale, 2, '.', '');
            }
            

    //Total success rate per month
            $results3 = [];
            $req_months = "SELECT DISTINCT EXTRACT(YEAR FROM date_sub) AS year, EXTRACT(MONTH FROM date_sub) AS month 
                          FROM " . $suffix . "_test_results 
                          ORDER BY year ASC, month ASC";
            $res_months = mysqli_query($conn, $req_months);

            while ($row_month = mysqli_fetch_assoc($res_months)) {
                $year = $row_month['year'];
                $month = str_pad($row_month['month'], 2, '0', STR_PAD_LEFT);// form 01 not 1
                
                $query_success = "SELECT AVG(success_rate) AS avg_success_rate 
                                  FROM " . $suffix . "_test_results 
                                  WHERE EXTRACT(YEAR FROM date_sub) = $year 
                                  AND EXTRACT(MONTH FROM date_sub) = $month";
                $res_success = mysqli_query($conn, $query_success);
                $row_success = mysqli_fetch_assoc($res_success);
                
                $results3["$year-$month"] = $row_success['avg_success_rate'] 
                    ? number_format($row_success['avg_success_rate'], 2, '.', '') 
                    : 0;
            }





    // Top cards
            $results = [];

            foreach ($queries as $key => $query) {
                $res = mysqli_query($conn, $query);
                $labels = [];
                $data = [];
                
            
                while ($row = mysqli_fetch_assoc($res)) {
                    switch ($key) {
                        case 'articles':
                            $labels[] = $row['code_article'];  // Article code
                            $data[] = $row['article_count'];  // Count of article occurrences
                            break;
                        case 'clients':
                            $labels[] = $row['nom_client'];  // Client code
                            $data[] = $row['client_count'];  // Count of client occurrences
                            break;
                        case 'couleurs':
                            $labels[] = $row['code_couleur'];  // Color code
                            $data[] = $row['couleur_count'];  // Count of color occurrences
                            break;
                        case 'teintures':
                            $labels[] = $row['type_teinture'];  // Teinture code
                            $data[] = $row['teinture_count'];  // Count of teinture occurrences
                            break;
                    }
                }
                
                // Store the labels and data in the results array for each chart
                $results[$key] = ['labels' => $labels, 'data' => $data];
            } 


    //Number of clients per year
            $results2 = [];

            $req_years = "SELECT DISTINCT EXTRACT(YEAR FROM date_sub) AS year FROM ".$suffix."_test_results ORDER BY year ASC";
            $res_years = mysqli_query($conn, $req_years);

            while ($row_year = mysqli_fetch_assoc($res_years)) {
                $year = $row_year['year'];
                
                
                $query_clients = "SELECT COUNT(DISTINCT nom_client) AS client_count FROM ".$suffix."_test_results WHERE EXTRACT(YEAR FROM date_sub) = $year";
                $res_clients = mysqli_query($conn, $query_clients);
                $row_clients = mysqli_fetch_assoc($res_clients);
                
                // Store year and client count in results2
                $results2[$year] = $row_clients['client_count'];
            }



    // The succcess rate of the article
            $selected_article = $_GET['article'] ?? ''; // Get selected article from GET request using AJAX 

            if ($selected_article) {
                $query_success1 = "SELECT 
                    EXTRACT(YEAR FROM date_sub) AS year, 
                    EXTRACT(MONTH FROM date_sub) AS month, 
                    AVG(success_rate) AS avg_success_rate 
                    FROM {$suffix}_test_results 
                    WHERE code_article = '$selected_article'
                    GROUP BY year, month
                    ORDER BY year ASC, month ASC";

                $res_success1 = mysqli_query($conn, $query_success1);

                $monthly_data1 = [];
                while ($row_success1 = mysqli_fetch_assoc($res_success1)) {
                    $year_month1 = $row_success1['year'] . '-' . str_pad($row_success1['month'], 2, '0', STR_PAD_LEFT);
                    $monthly_data1[$year_month1] = $row_success1['avg_success_rate']
                        ? number_format($row_success1['avg_success_rate'], 2, '.', '')
                        : 0;
                }

                // Return the monthly data as JSON
                echo json_encode($monthly_data1);
                exit; 
            }



    // The succcess rate of the couleur
            $selected_couleur = $_GET['couleur'] ?? ''; // Get selected couleur from GET request using AJAX 

            if ($selected_couleur) {
                $query_success2 = "SELECT 
                    EXTRACT(YEAR FROM date_sub) AS year, 
                    EXTRACT(MONTH FROM date_sub) AS month, 
                    AVG(success_rate) AS avg_success_rate 
                    FROM {$suffix}_test_results 
                    WHERE code_couleur = '$selected_couleur'
                    GROUP BY year, month
                    ORDER BY year ASC, month ASC";

                $res_success2 = mysqli_query($conn, $query_success2);

                $monthly_data2 = [];
                while ($row_success2 = mysqli_fetch_assoc($res_success2)) {
                    $year_month2 = $row_success2['year'] . '-' . str_pad($row_success2['month'], 2, '0', STR_PAD_LEFT);
                    $monthly_data2[$year_month2] = $row_success2['avg_success_rate']
                        ? number_format($row_success2['avg_success_rate'], 2, '.', '')
                        : 0;
                }

                // Return the monthly data as JSON
                echo json_encode($monthly_data2);
                exit; 
            }

    
    // The succcess rate of the couleur
            $selected_teinture = $_GET['teinture'] ?? ''; // Get selected teinture from GET request using AJAX 

            if ($selected_teinture) {
                $query_success3 = "SELECT 
                    EXTRACT(YEAR FROM date_sub) AS year, 
                    EXTRACT(MONTH FROM date_sub) AS month, 
                    AVG(success_rate) AS avg_success_rate 
                    FROM {$suffix}_test_results 
                    WHERE type_teinture = '$selected_teinture'
                    GROUP BY year, month
                    ORDER BY year ASC, month ASC";

                $res_success3 = mysqli_query($conn, $query_success3);

                $monthly_data3 = [];
                while ($row_success3 = mysqli_fetch_assoc($res_success3)) {
                    $year_month3 = $row_success3['year'] . '-' . str_pad($row_success3['month'], 2, '0', STR_PAD_LEFT);
                    $monthly_data3[$year_month3] = $row_success3['avg_success_rate']
                        ? number_format($row_success3['avg_success_rate'], 2, '.', '')
                        : 0;
                }

                // Return the monthly data as JSON
                echo json_encode($monthly_data3);
                exit; 
            }



    // Material consumption
            $req10 = "SELECT test_data, date_sub FROM {$suffix}_test_results";
            $res10 = mysqli_query($conn, $req1);
            function clean_data($values) {
                return array_map(function($value) {
                    return is_numeric($value) && $value !== '' ? $value : 0; // Replace non-numeric or empty values with 0
                }, $values);
            }

            // Pie chart - material data total
            $material_data = [
                'Sel' => 0,
                'Soude' => 0,
                'Carbonate' => 0,
                'Eau' => 0
            ];

            // Line chart - material data by month
            $material_data_by_month = [
                'Sel' => [],
                'Soude' => [],
                'Carbonate' => [],
                'Eau' => [],
            ];

            $months = []; 

            while ($row = mysqli_fetch_assoc($res10)) {
                $json_data = json_decode($row['test_data'], true);

                foreach ($json_data as $entry) {
                    // Loop through each material (like "Sel", "Soude", etc.)
                    foreach ($entry as $material => $values) {
                        // Clean the data by replacing empty strings with 0
                        $clean_values = array_map(function($value) {
                            return is_numeric($value) && $value !== '' ? $value : 0;
                        }, $values);

                        // Sum the values for the pie chart total
                        $total_consumption = array_sum($clean_values);

                        // Capitalize the material name
                        $material = ucfirst(strtolower($material));

                        // Add to total for pie chart
                        if (array_key_exists($material, $material_data)) {
                            $material_data[$material] += $total_consumption;
                        }

                        // Get the month for line chart
                        $date = new DateTime($row['date_sub']);
                        $month_year = $date->format('Y-m'); // Format: "YYYY-MM"

                        // Add to months array if not exists
                        if (!in_array($month_year, $months)) {
                            $months[] = $month_year;
                        }

                        // Add to monthly data for line chart
                        if (!isset($material_data_by_month[$material][$month_year])) {
                            $material_data_by_month[$material][$month_year] = 0;
                        }
                        $material_data_by_month[$material][$month_year] += $total_consumption;
                    }
                }
            }

            // Prepare data for the pie chart
            $labels10 = array_keys($material_data); // ['Sel', 'Soude', 'Carbonate', 'Eau']
            $total_consumption_data = array_values($material_data); // Values for pie chart

            // Ensure all months are present in the material_data_by_month arrays
            foreach ($material_data_by_month as &$data) {    // il & bech ybaddal fil original sinon ya3mal copy
                foreach ($months as $month) {
                    if (!isset($data[$month])) {
                        $data[$month] = 0; // Default to 0 if month is missing
                    }
                }
                ksort($data); // Ensure chronological order
            }
            unset($data);

            // Prepare data for the line charts
            $sel_data = array_values($material_data_by_month['Sel']);
            $soude_data = array_values($material_data_by_month['Soude']);
            $carbonate_data = array_values($material_data_by_month['Carbonate']);
            $eau_data = array_values($material_data_by_month['Eau']);



