<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require 'config.php';

    // Get JSON data from URL
    if (isset($_GET['data'])) { 
        $json_data = $_GET['data'];
        $data = json_decode($json_data, true); // Convert to array
    } else {
        die(json_encode(["error" => "No data provided"]));
    }

    // Check for decoding errors
    if (json_last_error() !== JSON_ERROR_NONE) {
        die(json_encode(["error" => "Invalid JSON input"]));
    }
    
    /*    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    */
    

    // TAWA IL HEADER SECTION 
    $test_id=$_GET['test_id'];
    $req = "select nom_client, type_teinture, code_couleur, code_article, date_sub from " . $suffix . "_test_results where test_id = $test_id";

    $result = mysqli_query($conn, $req);

    $row = mysqli_fetch_assoc($result);

echo '
    <style>
        @media print {
            table {
                width: 100%;
            }

            body {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                font-family: "Poppins", sans-serif;
                width:100%;
                margin: 0;
                padding: 0;
                font-size: 12px;
            }

            /* Ensure borders are visible when printed */
            table, th, td {
                border: 1px solid black;
            }

            html, body {
                width: 100%;
                height: 100%;
                overflow: hidden;  
            }

            .container {
                max-width: 100%;
            }
        }

        .modal_table { 
            margin-top: 40px; 
            margin-right:20px;
        }
        #date1{
            background: linear-gradient( to top, 
            rgba(19, 121, 172, 0.5),
            rgba(74, 214, 236, 0.43)
            );
            text-align: right;
            padding-right:20px ;
        }

        .headcell{
            background: linear-gradient( to top, 
            rgba(19, 121, 172, 0.5),
            rgba(74, 214, 236, 0.43)
            );
            text-align: center;
        }

        .modal_table th{
            font-size: 17px;
            background: linear-gradient( to top, 
                rgba(19, 121, 172, 0.5),
                rgba(74, 214, 236, 0.43)
            );
            font-style: italic;
        }
        .modal_table td{
            background: linear-gradient( to top, 
                rgba(215, 237, 240, 0.25),  
                rgba(255, 255, 255, 0.947)
            );
            text-align:center;
        }

        .purple{
            color: purple;
            font-weight: bold;
            text-align:left !important;
        }
        .material{
            color: seagreen;
            font-weight: bold;
            text-align:left !important;
        }
        .eau{
            color: rgb(96, 133, 245);
            font-weight: bold;
            text-align:left !important;
        }
        .bg-purple{
            background-color: rgba(205, 102, 219, 0.06); 
            color: rgb(54, 3, 54);
        }
        .bg-material{
            background-color: rgba(93, 208, 110, 0.06); 
            color: rgb(7, 45, 24);
        }
        .bg-eau{
            background-color: rgba(83, 190, 197, 0.11); 
            color: rgb(8, 29, 50);
        }
    </style>
    <div class="container">
    <table class="table modal_table">
        <thead>
        <tr>
                <th id="date1" colspan="8">Date:'.$row['date_sub'].'</th>
            </tr>
            <tr class="info-row">
                <!--<td>Test Id: <span id="test_id1">$test_id</span></td>-->
                <th colspan="1" class="headcell">Client: <span id="client">'.$row['nom_client'].'</span></th>
                <th colspan="2" class="headcell">Teinture: <span id="teinture">'. $row['type_teinture'].'</span></th>
                <th colspan="2" class="headcell">Couleur: <span id="couleur">'.$row['code_couleur'].'</span></th>
                <th colspan="3" class="headcell">Article: <span id="article">'.$row['code_article'].'</span></th>
            </tr>
            <tr>
                <th>Nom du colorant</th>
                <th>Test 1</th>
                <th>Test 2</th>
                <th>Test 3</th>
                <th>Test 4</th>
                <th>Test 5</th>
                <th>Test 6</th>
                <th>Test 7</th>
            </tr>
        </thead>
        <tbody>
            
            <tr class="bg-purple">
                <td class="purple">Rouge</td>
                <td>' . $data[0]["Rouge"][0] . '</td>
                <td>' . $data[0]["Rouge"][1] . '</td>
                <td>' . $data[0]["Rouge"][2] . '</td>
                <td>' . $data[0]["Rouge"][3] . '</td>
                <td>' . $data[0]["Rouge"][4] . '</td>
                <td>' . $data[0]["Rouge"][5] . '</td>
                <td>' . $data[0]["Rouge"][6] . '</td>
            </tr>
            <tr class="bg-purple">
                <td class="purple">Jaune</td>
                <td>' . $data[1]["Jaune"][0] . '</td>
                <td>' . $data[1]["Jaune"][1] . '</td>
                <td>' . $data[1]["Jaune"][2] . '</td>
                <td>' . $data[1]["Jaune"][3] . '</td>
                <td>' . $data[1]["Jaune"][4] . '</td>
                <td>' . $data[1]["Jaune"][5] . '</td>
                <td>' . $data[1]["Jaune"][6] . '</td>
            </tr>
            <tr class="bg-purple">
                <td class="purple">Bleu</td>
                <td>' . $data[2]["Bleu"][0] . '</td>
                <td>' . $data[2]["Bleu"][1] . '</td>
                <td>' . $data[2]["Bleu"][2] . '</td>
                <td>' . $data[2]["Bleu"][3] . '</td>
                <td>' . $data[2]["Bleu"][4] . '</td>
                <td>' . $data[2]["Bleu"][5] . '</td>
                <td>' . $data[2]["Bleu"][6] . '</td>
            </tr>
            <tr class="bg-purple">
                <td class="purple">Noir</td>
                <td>' . $data[3]["Noir"][0] . '</td>
                <td>' . $data[3]["Noir"][1] . '</td>
                <td>' . $data[3]["Noir"][2] . '</td>
                <td>' . $data[3]["Noir"][3] . '</td>
                <td>' . $data[3]["Noir"][4] . '</td>
                <td>' . $data[3]["Noir"][5] . '</td>
                <td>' . $data[3]["Noir"][6] . '</td>
            </tr>
            <tr class="bg-purple">
                <td class="purple">Blanc</td>
                <td>' . $data[4]["Blanc"][0] . '</td>
                <td>' . $data[4]["Blanc"][1] . '</td>
                <td>' . $data[4]["Blanc"][2] . '</td>
                <td>' . $data[4]["Blanc"][3] . '</td>
                <td>' . $data[4]["Blanc"][4] . '</td>
                <td>' . $data[4]["Blanc"][5] . '</td>
                <td>' . $data[4]["Blanc"][6] . '</td>
            </tr>
            <tr class="bg-material">
                <td class="material">Sel(g)</td>
                <td>' . $data[5]["Sel"][0] . '</td>
                <td>' . $data[5]["Sel"][1] . '</td>
                <td>' . $data[5]["Sel"][2] . '</td>
                <td>' . $data[5]["Sel"][3] . '</td>
                <td>' . $data[5]["Sel"][4] . '</td>
                <td>' . $data[5]["Sel"][5] . '</td>
                <td>' . $data[5]["Sel"][6] . '</td>
            </tr>
            <tr class="bg-material">
                <td class="material">Carbonate(mL)</td>
                <td>' . $data[6]["Carbonate"][0] . '</td>
                <td>' . $data[6]["Carbonate"][1] . '</td>
                <td>' . $data[6]["Carbonate"][2] . '</td>
                <td>' . $data[6]["Carbonate"][3] . '</td>
                <td>' . $data[6]["Carbonate"][4] . '</td>
                <td>' . $data[6]["Carbonate"][5] . '</td>
                <td>' . $data[6]["Carbonate"][6] . '</td>
            </tr>
            <tr class="bg-material">
                <td class="material">Soude Caustique(mL)</td>
                <td>' . $data[7]["Soude"][0] . '</td>
                <td>' . $data[7]["Soude"][1] . '</td>
                <td>' . $data[7]["Soude"][2] . '</td>
                <td>' . $data[7]["Soude"][3] . '</td>
                <td>' . $data[7]["Soude"][4] . '</td>
                <td>' . $data[7]["Soude"][5] . '</td>
                <td>' . $data[7]["Soude"][6] . '</td>
            </tr>
            <tr class="bg-eau">
                <td class="eau">Eau(mL)</td>
                <td>' . $data[8]["Eau"][0] . '</td>
                <td>' . $data[8]["Eau"][1] . '</td>
                <td>' . $data[8]["Eau"][2] . '</td>
                <td>' . $data[8]["Eau"][3] . '</td>
                <td>' . $data[8]["Eau"][4] . '</td>
                <td>' . $data[8]["Eau"][5] . '</td>
                <td>' . $data[8]["Eau"][6] . '</td>
            </tr>
        </tbody>
    </table>
    </div>
    ';
