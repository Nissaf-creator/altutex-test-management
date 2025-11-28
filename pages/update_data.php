<?php

    require 'config.php';
    
    $test_id = $_GET["test_id"];

    $req = "select nom_client, type_teinture, code_couleur, code_article, test_data from ".$suffix."_test_results where test_id = $test_id";

    $result = mysqli_query($conn, $req);

    $row = mysqli_fetch_assoc($result);

    $client= $row["nom_client"];
    $teinture= $row["type_teinture"];
    $couleur= $row["code_couleur"];
    $article= $row["code_article"];
    $jsondata= json_decode($row["test_data"], true);



    
?>
<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta charset="utf-8" />
    <title>Altutex | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Altutex | Dashboard" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="index-style.css" />

    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />


<!-- javascript link/cdn-->
<!-- jquery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<!-- js bootstrap -->
<!-- bootstrap 4 css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- bootstrap 4 js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- chart js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>

<!-- select2 cdn -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- datatables cdn -->
 <!-- for datatables-->
 <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.2.1/af-2.7.0/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/cr-2.0.4/date-1.5.5/fc-5.0.4/fh-4.0.1/kt-2.12.1/r-3.0.3/rg-1.5.1/sc-2.4.3/sb-1.8.1/sp-2.3.3/sl-3.0.0/sr-1.4.1/datatables.min.css" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.2.1/af-2.7.0/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/cr-2.0.4/date-1.5.5/fc-5.0.4/fh-4.0.1/kt-2.12.1/r-3.0.3/rg-1.5.1/sc-2.4.3/sb-1.8.1/sp-2.3.3/sl-3.0.0/sr-1.4.1/datatables.min.js"></script>



  </head>

  <style>
    
    .error-message {
        color: red;
        font-size: 0.9em;
    }


    ::-webkit-scrollbar {
      width: 15px;
    }

    ::-webkit-scrollbar-thumb {
      background: rgb(183, 182, 184);
    }

    ::-webkit-scrollbar-track {
      background-color: black;
      width: 50px;
    }

    body{
      
      text-shadow: 2px 2px 4px rgba(62, 14, 90, 0.279);
      font-family: 'Poppins', sans-serif;
      
    }

    .container{
      padding-bottom: 5px;
    }
    
    .header-1{
        height: auto;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-left: 40px;
    }
    .form-control-header{
        width: auto;
        background: linear-gradient( to top, 
        rgba(181, 174, 216, 0.309),  
        rgba(183, 200, 223, 0.215)
        );
        border: 1.2px dashed rgb(92, 15, 140);
    }
    .form-control-header:focus{
        border: none; 
        background-color: rgba(164, 155, 219, 0.158); 
        outline: 3px solid rgba(147, 147, 232, 0.462); 
        box-shadow: 5px 6px 4px rgba(166, 166, 237, 0.595) , -5px -5px 6px rgba(166, 166, 237, 0.595) ;
    }

    #headCell{
      font-size: 16px;
      transition: transform 0.3s ease;
    }
    #headCell:hover{
      transform: scale(1.01);
    }

    i {
      transition: transform 0.3s ease;
    }
    i:hover{
      transform: scale(1.3);
    }

    .test_edit{
        color: rgb(8, 39, 86);
        
    }
    .test_edit:hover{
        color: rgba(98, 120, 244, 0.7);
        cursor: pointer;
    }
    .form-control {
      height: 1.8em;
      border-radius: 7px;
    }
    
    #modal_Num{
      margin-bottom: 10px;
    }
    
    #reset1{
      transition: transform 0.5s ease;
      background: linear-gradient( to top, 
      rgba(91, 87, 90, 0.22),  
      rgba(123, 111, 122, 0.314)
      );
    }

    #submit1{
      transition: transform 0.5s ease;
      background: linear-gradient( to top, 
        rgba(38, 45, 180, 0.73),  
        rgba(81, 98, 194, 0.77)
        );
      border-color: rgba(188, 39, 94, 0.176);
      color:rgb(255, 255, 255);
    }

    #afficher1{
      transition: transform 0.5s ease;
      background: linear-gradient( to top, 
        rgba(157, 201, 243, 0.54),  
        rgba(210, 236, 248, 0.66)
        );
      
    }

    #submit1:hover, #reset1:hover, #afficher1:hover{
      transform: scale(1.1);
      background-color: rgba(123, 111, 122, 0.314);
    }

    .main-btn{
      box-shadow: -4px 4px 8px #d9d3d3;
    }

    th{
      padding: 8px;
      background: linear-gradient( to top, 
      rgba(19, 121, 172, 0.5),
      rgba(74, 214, 236, 0.43)
       );
    }
    td{
      background: linear-gradient( to top, 
      rgba(215, 237, 240, 0.25),  
      rgba(255, 255, 255, 0.947)
       );
       max-height: 40.74px;
    }

    .form-control{
        height: 1.8em;
        border: none; 
        border-bottom: solid 2px rgb(98, 7, 163); 
        background-color: rgba(0, 0, 0, 0.05); 
        border-radius: 2px;
    }
    
    .form-control-seagreen{
        border: none; 
        border-bottom: solid 2px rgb(26, 152, 140);
        background-color: rgba(18, 88, 28, 0.056); 
        color: rgb(7, 45, 24);
        border-radius: 2px;
    }
    .form-control-eau{
        border: none; 
        border-bottom: solid 2px rgb(77, 116, 234); 
        background-color: rgba(23, 88, 93, 0.077); 
        color: rgb(8, 29, 50);
        border-radius: 2px;
    }


    .form-control:focus { 
        background-color: rgba(243, 248, 250, 0.489); 
        outline: 1px solid rgb(95, 175, 255) ;
        border: none;
    }
    
    .form-control-seagreen:focus{
      background-color: rgba(243, 248, 250, 0.489); 
      outline:3px solid rgba(95, 175, 255, 0.508)  ;
      border: none;
    }
    .form-control-eau:focus{
      background-color: rgba(243, 248, 250, 0.489); 
      outline:3px solid rgba(95, 175, 255, 0.578) ;
      border: none;
    }


    .purple{
        color: rgb(102, 14, 139);
        font-weight: bold;
    }
    .material{
        color: rgb(26, 152, 104);
        font-weight: bold;

    }
    .Eau{
        color: rgb(96, 133, 245);;
        font-weight: bold;
        
    }

    .footer1{
      display: flex;
      width: 100%;
      flex-wrap: wrap;
      justify-content: right;
    }

</style>

  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <?php require_once "header.html" ?>
      <!--begin::App Main----------------------------------------------------------------------------------------------------->                      
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <form name="f1" id="f1" method="POST">
            <div class="container">
            <h4>Test id : <?php echo"$test_id" ?></h4>
            <div class="row header-1 ">
                <div class="col-lg" id="headCell"><label for="article"> Article &nbsp; </label>
                  <select id="article" name="choix_d'article" class="form-control-header" style="width:220px; height:30px;" required>
                  <option></option>
            
                  </select>
                </div>
                <div class="col-lg" id="headCell"><label for="couleur"> Couleur &nbsp; </label>
                  <select id="couleur" name="choix_de_couleur" class="form-control-header" style="width:220px; height:30px;" required>
                  <option></option>
            
                  </select>
                </div>
                <div class="col-lg" id="headCell"><label for="teinture"> Teinture &nbsp; </label>
                  <select id="teinture" name="choix_de_teinture" class="form-control-header" style="width:220px; height:30px;" required>
                  <option></option>
                      
                  </select>
                </div>
                <div class="col-lg" id="headCell"><label for="client"> Client &nbsp; </label> 
                  <select id="client" name="choix_de_client" class="form-control-header" style="width:220px; height:30px;" required>
                  <option></option>
                      
                  </select>
                </div>
            </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Nom du colorant</th>
                    <th> &nbsp;Test 1 </i> </th>
                    <th> &nbsp;Test 2 </i> </th>
                    <th> &nbsp;Test 3 </i> </th>
                    <th> &nbsp;Test 4 </i> </th>
                    <th> &nbsp;Test 5 </i> </th>
                    <th> &nbsp;Test 6 </i> </th>
                    <th> &nbsp;Test 7 </i> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="purple">Rouge</td>
                            <td title="test_1_Rouge"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_1_Rouge" name="test_1_Rouge" value="<?php echo $jsondata[0]["Rouge"][0]?>" tabindex="5"  ></td>
                            <td title="test_2_Rouge"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_2_Rouge" name="test_2_Rouge" value="<?php echo $jsondata[0]["Rouge"][1]?>" tabindex="14" ></td>
                            <td title="test_3_Rouge"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_3_Rouge" name="test_3_Rouge" value="<?php echo $jsondata[0]["Rouge"][2]?>" tabindex="23" ></td>
                            <td title="test_4_Rouge"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_4_Rouge" name="test_4_Rouge" value="<?php echo $jsondata[0]["Rouge"][3]?>" tabindex="32" ></td>
                            <td title="test_5_Rouge"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_5_Rouge" name="test_5_Rouge" value="<?php echo $jsondata[0]["Rouge"][4]?>" tabindex="41" ></td>
                            <td title="test_6_Rouge"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_6_Rouge" name="test_6_Rouge" value="<?php echo $jsondata[0]["Rouge"][5]?>" tabindex="50" ></td>
                            <td title="test_7_Rouge"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_7_Rouge" name="test_7_Rouge" value="<?php echo $jsondata[0]["Rouge"][6]?>" tabindex="59" ></td>
                        </tr>
                        <tr>
                        <td class="purple">Jaune</td>
                            <td title="test_1_Jaune"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_1_Jaune" name="test_1_Jaune" value="<?php echo $jsondata[1]["Jaune"][0]?>" tabindex="6"  ></td>
                            <td title="test_2_Jaune"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_2_Jaune" name="test_2_Jaune" value="<?php echo $jsondata[1]["Jaune"][1]?>" tabindex="15" ></td>
                            <td title="test_3_Jaune"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_3_Jaune" name="test_3_Jaune" value="<?php echo $jsondata[1]["Jaune"][2]?>" tabindex="24" ></td>
                            <td title="test_4_Jaune"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_4_Jaune" name="test_4_Jaune" value="<?php echo $jsondata[1]["Jaune"][3]?>" tabindex="33" ></td>
                            <td title="test_5_Jaune"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_5_Jaune" name="test_5_Jaune" value="<?php echo $jsondata[1]["Jaune"][4]?>" tabindex="42" ></td>
                            <td title="test_6_Jaune"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_6_Jaune" name="test_6_Jaune" value="<?php echo $jsondata[1]["Jaune"][5]?>" tabindex="51" ></td>
                            <td title="test_7_Jaune"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_7_Jaune" name="test_7_Jaune" value="<?php echo $jsondata[1]["Jaune"][6]?>" tabindex="60" ></td>
                        </tr>
                        <tr>
                            <td class="purple">Bleu</td>
                            <td title="test_1_Bleu"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_1_Bleu" name="test_1_Bleu" value="<?php echo $jsondata[2]["Bleu"][0]?>" tabindex="7"  d></td>
                            <td title="test_2_Bleu"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_2_Bleu" name="test_2_Bleu" value="<?php echo $jsondata[2]["Bleu"][1]?>" tabindex="16" d></td>
                            <td title="test_3_Bleu"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_3_Bleu" name="test_3_Bleu" value="<?php echo $jsondata[2]["Bleu"][2]?>" tabindex="25" d></td>
                            <td title="test_4_Bleu"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_4_Bleu" name="test_4_Bleu" value="<?php echo $jsondata[2]["Bleu"][3]?>" tabindex="34" d></td>
                            <td title="test_5_Bleu"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_5_Bleu" name="test_5_Bleu" value="<?php echo $jsondata[2]["Bleu"][4]?>" tabindex="43" d></td>
                            <td title="test_6_Bleu"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_6_Bleu" name="test_6_Bleu" value="<?php echo $jsondata[2]["Bleu"][5]?>" tabindex="52" d></td>
                            <td title="test_7_Bleu"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_7_Bleu" name="test_7_Bleu" value="<?php echo $jsondata[2]["Bleu"][6]?>" tabindex="61" d></td>
                        </tr>
                        <tr>
                            <td class="purple">Noir</td>
                            <td title="test_1_Noir"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_1_Noir" name="test_1_Noir" value="<?php echo $jsondata[3]["Noir"][0]?>" tabindex="8"  ></td>
                            <td title="test_2_Noir"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_2_Noir" name="test_2_Noir" value="<?php echo $jsondata[3]["Noir"][1]?>" tabindex="17" ></td>
                            <td title="test_3_Noir"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_3_Noir" name="test_3_Noir" value="<?php echo $jsondata[3]["Noir"][2]?>" tabindex="26" ></td>
                            <td title="test_4_Noir"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_4_Noir" name="test_4_Noir" value="<?php echo $jsondata[3]["Noir"][3]?>" tabindex="35" ></td>
                            <td title="test_5_Noir"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_5_Noir" name="test_5_Noir" value="<?php echo $jsondata[3]["Noir"][4]?>" tabindex="44" ></td>
                            <td title="test_6_Noir"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_6_Noir" name="test_6_Noir" value="<?php echo $jsondata[3]["Noir"][5]?>" tabindex="53" ></td>
                            <td title="test_7_Noir"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_7_Noir" name="test_7_Noir" value="<?php echo $jsondata[3]["Noir"][6]?>" tabindex="62" ></td>
                        </tr>
                        <tr>
                            <td class="purple">Blanc</td>
                            <td title="test_1_Blanc"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_1_Blanc" name="test_1_Blanc" value="<?php echo $jsondata[4]["Blanc"][0]?>"tabindex="9"  ></td>
                            <td title="test_2_Blanc"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_2_Blanc" name="test_2_Blanc" value="<?php echo $jsondata[4]["Blanc"][1]?>"tabindex="18" ></td>
                            <td title="test_3_Blanc"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_3_Blanc" name="test_3_Blanc" value="<?php echo $jsondata[4]["Blanc"][2]?>"tabindex="27" ></td>
                            <td title="test_4_Blanc"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_4_Blanc" name="test_4_Blanc" value="<?php echo $jsondata[4]["Blanc"][3]?>"tabindex="36" ></td>
                            <td title="test_5_Blanc"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_5_Blanc" name="test_5_Blanc" value="<?php echo $jsondata[4]["Blanc"][4]?>"tabindex="45" ></td>
                            <td title="test_6_Blanc"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_6_Blanc" name="test_6_Blanc" value="<?php echo $jsondata[4]["Blanc"][5]?>"tabindex="54" ></td>
                            <td title="test_7_Blanc"><input class="form-control" type="number" step="0.001" min="0" max="100" style="width: 80px;" id="test_7_Blanc" name="test_7_Blanc" value="<?php echo $jsondata[4]["Blanc"][6]?>"tabindex="63" ></td>
                        </tr>
                        <tr class="material">
                            <td class="">Sel(g)</td>
                            <td title="test_1_Sel"><input class="form-control-seagreen" type="number" step="0.001" min="0" max="20000" style="width: 80px;" id="test_1_Sel" name="test_1_Sel" value="<?php echo $jsondata[5]["Sel"][0]?>" tabindex="10" ></td>
                            <td title="test_2_Sel"><input class="form-control-seagreen" type="number" step="0.001" min="0" max="20000" style="width: 80px;" id="test_2_Sel" name="test_2_Sel" value="<?php echo $jsondata[5]["Sel"][1]?>" tabindex="19" ></td>
                            <td title="test_3_Sel"><input class="form-control-seagreen" type="number" step="0.001" min="0" max="20000" style="width: 80px;" id="test_3_Sel" name="test_3_Sel" value="<?php echo $jsondata[5]["Sel"][2]?>" tabindex="28" ></td>
                            <td title="test_4_Sel"><input class="form-control-seagreen" type="number" step="0.001" min="0" max="20000" style="width: 80px;" id="test_4_Sel" name="test_4_Sel" value="<?php echo $jsondata[5]["Sel"][3]?>" tabindex="37" ></td>
                            <td title="test_5_Sel"><input class="form-control-seagreen" type="number" step="0.001" min="0" max="20000" style="width: 80px;" id="test_5_Sel" name="test_5_Sel" value="<?php echo $jsondata[5]["Sel"][4]?>" tabindex="46" ></td>
                            <td title="test_6_Sel"><input class="form-control-seagreen" type="number" step="0.001" min="0" max="20000" style="width: 80px;" id="test_6_Sel" name="test_6_Sel" value="<?php echo $jsondata[5]["Sel"][5]?>" tabindex="55" ></td>
                            <td title="test_7_Sel"><input class="form-control-seagreen" type="number" step="0.001" min="0" max="20000" style="width: 80px;" id="test_7_Sel" name="test_7_Sel" value="<?php echo $jsondata[5]["Sel"][6]?>" tabindex="64" ></td>
                        </tr>
                        <tr class="material" >
                            <td class="">Carbonate(mL)</td>
                                <td title="test_1_Carbonate"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_1_Carbonate" name="test_1_Carbonate" value="<?php echo $jsondata[6]["Carbonate"][0]?>" tabindex="11" ></td>
                                <td title="test_2_Carbonate"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_2_Carbonate" name="test_2_Carbonate" value="<?php echo $jsondata[6]["Carbonate"][1]?>" tabindex="20" ></td>
                                <td title="test_3_Carbonate"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_3_Carbonate" name="test_3_Carbonate" value="<?php echo $jsondata[6]["Carbonate"][2]?>" tabindex="29" ></td>
                                <td title="test_4_Carbonate"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_4_Carbonate" name="test_4_Carbonate" value="<?php echo $jsondata[6]["Carbonate"][3]?>" tabindex="38" ></td>
                                <td title="test_5_Carbonate"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_5_Carbonate" name="test_5_Carbonate" value="<?php echo $jsondata[6]["Carbonate"][4]?>" tabindex="47" ></td>
                                <td title="test_6_Carbonate"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_6_Carbonate" name="test_6_Carbonate" value="<?php echo $jsondata[6]["Carbonate"][5]?>" tabindex="56" ></td>
                                <td title="test_7_Carbonate"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_7_Carbonate" name="test_7_Carbonate" value="<?php echo $jsondata[6]["Carbonate"][6]?>" tabindex="65" ></td>
                        </tr>
                        <tr class="material">
                            <td class="material">Soude Caustique(mL)</td>
                                <td title="test_1_Soude"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_1_Soude" name="test_1_Soude" value="<?php echo $jsondata[7]["Soude"][0]?>" tabindex="12" ></td>
                                <td title="test_2_Soude"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_2_Soude" name="test_2_Soude" value="<?php echo $jsondata[7]["Soude"][1]?>" tabindex="21" ></td>
                                <td title="test_3_Soude"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_3_Soude" name="test_3_Soude" value="<?php echo $jsondata[7]["Soude"][2]?>" tabindex="30" ></td>
                                <td title="test_4_Soude"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_4_Soude" name="test_4_Soude" value="<?php echo $jsondata[7]["Soude"][3]?>" tabindex="39" ></td>
                                <td title="test_5_Soude"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_5_Soude" name="test_5_Soude" value="<?php echo $jsondata[7]["Soude"][4]?>" tabindex="48" ></td>
                                <td title="test_6_Soude"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_6_Soude" name="test_6_Soude" value="<?php echo $jsondata[7]["Soude"][5]?>" tabindex="57" ></td>
                                <td title="test_7_Soude"><input class="form-control-seagreen" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_7_Soude" name="test_7_Soude" value="<?php echo $jsondata[7]["Soude"][6]?>" tabindex="66" ></td>
                        </tr>
                        <tr class="Eau" >
                            <td class="">Eau(mL)</td>
                                <td title="test_1_Eau"><input class="form-control-eau" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_1_Eau" name="test_1_Eau" value="<?php echo $jsondata[8]["Eau"][0]?>" tabindex="13" ></td>
                                <td title="test_2_Eau"><input class="form-control-eau" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_2_Eau" name="test_2_Eau" value="<?php echo $jsondata[8]["Eau"][1]?>" tabindex="22" ></td>
                                <td title="test_3_Eau"><input class="form-control-eau" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_3_Eau" name="test_3_Eau" value="<?php echo $jsondata[8]["Eau"][2]?>" tabindex="31" ></td>
                                <td title="test_4_Eau"><input class="form-control-eau" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_4_Eau" name="test_4_Eau" value="<?php echo $jsondata[8]["Eau"][3]?>" tabindex="40" ></td>
                                <td title="test_5_Eau"><input class="form-control-eau" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_5_Eau" name="test_5_Eau" value="<?php echo $jsondata[8]["Eau"][4]?>" tabindex="49" ></td>
                                <td title="test_6_Eau"><input class="form-control-eau" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_6_Eau" name="test_6_Eau" value="<?php echo $jsondata[8]["Eau"][5]?>" tabindex="58" ></td>
                                <td title="test_7_Eau"><input class="form-control-eau" type="number" step="1" min="0" max="20000" style="width: 80px;" id="test_7_Eau" name="test_7_Eau" value="<?php echo $jsondata[8]["Eau"][6]?>" tabindex="67" ></td>
                        </tr>
                </tbody>
                </table>
                <div class="d-flex justify-content-end">
                <a href="data_table.php" tabindex="-1"><button type="button" class="btn main-btn px-5 mr-3" id="afficher1">Retourner</button></a>
                <button type="button" class="btn main-btn px-5 mr-5 btn-success" id="submit1" >Update</button>
                </div>
            </div>
            </form>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    <!--end::App Wrapper--> 




<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
  src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
  integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
  crossorigin="anonymous"
></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"
></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
  crossorigin="anonymous"
></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="../js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
const Default = {
  scrollbarTheme: 'os-theme-light',
  scrollbarAutoHide: 'leave',
  scrollbarClickScroll: true,
};
document.addEventListener('DOMContentLoaded', function () {
  const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
  if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
    OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
      scrollbars: {
        theme: Default.scrollbarTheme,
        autoHide: Default.scrollbarAutoHide,
        clickScroll: Default.scrollbarClickScroll,
      },
    });
  }
});
</script>
<!--end::OverlayScrollbars Configure-->



<!-- my custom js ---------------------------------------------------------------------------------------------------------------------->
<script>

fetch("stock_data.php")
    .then(response => {
      return response.json();
    })
    .then(data => {
        console.log(data);
        selected_article = document.getElementById("article");
        selected_couleur = document.getElementById("couleur");
        selected_teinture = document.getElementById("teinture");
        selected_client = document.getElementById("client");


        Object.keys(data.articles).forEach(code_article => {
          let option = document.createElement("option");
          option.value = code_article;
          option.textContent = code_article;
          if (code_article === "<?php echo $article; ?>") {
              option.selected = true; // Mark this option as selected
          }
          selected_article.appendChild(option);
        });
        
        $('#article').on('change', function() { 
          let the_article = this.value;
          console.log(the_article);
          selected_couleur.innerHTML = "<option value=''></option>";
          selected_teinture.innerHTML = "<option value=''></option>";

          if(the_article && data.articles[the_article]){
            let article_data = data.articles[the_article];

            article_data.code_couleur.forEach(couleur => {
              let couleurOption = document.createElement("option");
              couleurOption.value = couleur;
              couleurOption.textContent = couleur;
              if (couleur === "<?php echo $couleur; ?>") {
                  couleurOption.selected = true;
              }
              selected_couleur.appendChild(couleurOption);
            });

            article_data.type_teinture.forEach(teinture => {
              let teintureOption = document.createElement("option");
              teintureOption.value = teinture;
              teintureOption.textContent = teinture;
              if (teinture === "<?php echo $teinture; ?>") {
                  teintureOption.selected = true;
              }
              selected_teinture.appendChild(teintureOption);
            });

          }
        });

        $('#article').val("<?php echo $article; ?>").trigger('change');
        
        data.Client.forEach(client => {
              let clientOption = document.createElement("option");
              clientOption.value = client;
              clientOption.textContent = client;
              if (client === "<?php echo $client; ?>") {
                  clientOption.selected = true;
              }
              selected_client.appendChild(clientOption);
        });

    })
    .catch(error => {
      console.error( 'error: ',error);
    })


  //TEST WHETHER AT LEAST ONE INPUT OF THE FIRST TEST IS FILLED
  document.getElementById("submit1").addEventListener("click", function(event) {

  //count how many columns are filled
  let nbre_de_tests = 0;

  for (let j = 2; j <= 8; j++) { 
      const columnInputs = document.querySelectorAll(`table tbody tr td:nth-child(${j}) input`);
      let columnFilled = false;

      for (let i = 0; i < columnInputs.length; i++) {
          if (columnInputs[i].value.trim() !== "") {
              columnFilled = true;
              break; 
          }
      }

      if (columnFilled) {
          nbre_de_tests++;
      }
  }
  console.log("Number of filled columns:", nbre_de_tests); 



  var test1Inputs = document.querySelectorAll("table tbody tr td:nth-child(2) input");

  var formValid = false;
  for (var i = 0; i < test1Inputs.length; i++) {
      if (test1Inputs[i].value.trim() !== "") {
          formValid = true;
          break; 
      }
  }

  if (!formValid) {
      alert("Please fill out at least one input in the Test 1 column.");
      event.preventDefault(); 
  } else {
      json_submit2(nbre_de_tests);
  }
  });

  function json_submit2(nbre_de_tests){
    var Success_Rate = ((1 - (nbre_de_tests - 1) / 6) * 100).toFixed(2);

    const form = document.querySelector('#f1');
    if (!form.checkValidity()) {
        alert("Please fill in all required fields and with the right conditions.");
        return;
    }
    let test_id="<?php echo $test_id ?>";
    const material={
      header:[
        {client: document.getElementById('client').value},
        {teinture: document.getElementById('teinture').value},
        {couleur: document.getElementById('couleur').value},
        {article: document.getElementById('article').value},
        {successRate: Success_Rate}
      ],
      body:[
        {"Rouge": []},{"Jaune": []},{"Bleu": []},{"Noir": []},{"Blanc": []},{"Sel": []},{"Carbonate": []},{"Soude": []},{"Eau": []}
      ]
    };
    
    let struct_array = Object.keys(material);
    let struct_num=0;

    while(struct_num<2){

      if(struct_array[struct_num]=="body"){
        let body_array=material.body;
        let index=0;

        while(index<9){
          mat_name=Object.keys(body_array[index])[0];
          console.log(mat_name);
          let test_num=1;
          
          while(test_num<8){
            let id="test_"+String(test_num)+"_"+mat_name;
            material.body[index][mat_name].push(document.getElementById(id).value); 
            test_num++;
          }
          index++;
        }
      }
      struct_num++;
    }
    console.log(JSON.stringify(material,null,4));


    var dataToSend = {
        test_id: test_id,
        jsonData: material
    };

    
    // Send the JSON data to the server
    fetch('confirm_update.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(dataToSend)
    })
    .then(response => {
      return response.text(); // Use text() to capture the raw response
    })
    .then(text => {
        console.log('Raw response:', text); // Log the raw response
        alert(text);
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error: ' + error.message);
    });

}

</script>
</body>
  <!--end::Body-->
</html>
