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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 

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

    /*  -------- database custom css --------- */

    .custom-copy, .custom-csv, .custom-excel, .custom-pdf, .custom-print{
        background-color: rgba(85, 87, 87, 0.49); 
        color:white;
        border-color:gray ;
        font-size: 14px;
    }

    .custom-colvis{
        background-color: rgba(38, 38, 39, 0.69);
        color: white;
    }

    #mytabledata_wrapper .bottom {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;

    }

    #mytabledata_wrapper .top { 
        display: flex; 
        flex-wrap: wrap;
        justify-content: start;
        margin-bottom: 20px;
    } 
    #mytabledata_wrapper .top .dt-buttons { 
        margin-right:420px; 
    }
    #mytabledata_wrapper .top .dt-search{
        margin-right: 3px;
    }
    
    

    /*---------------------------------------*/


    body{
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
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
    .container{
        margin-top:10px ;
        min-width: 95%;
    }

    .header1{
        margin-bottom: 20px;
    }
    .ajouter{
        height: 30px;
        transition: transform 0.3s ease;
        border-color: lightgray;
        /*margin-left: 25px;*/
        padding:0 15px;
    }
    .ajouter:hover{
        transform: scale(1.1);
        background-color: lightgray;
    }
    table{
        table-layout: auto;
        text-align: center;
    }
    .columns{
        overflow:hidden;
        width: auto;
        text-align: center !important;
        
    }

    table .jsonbutton{
        background-color: rgba(20, 144, 138, 0.18);
        font-weight: bold;
        font-size: 13px;
        color:rgb(54, 10, 77);
        border:none;
        border-radius: 5px;
        transition: transform 0.3s ease;
    }
    table .jsonbutton:hover{
        cursor: pointer;
        color: rgb(18, 83, 132);
        transform: scale(1.1);
    }

    .icon-edit{
        color: rgb(255, 209, 23);
        transition: transform 0.3s ease;
        margin-right: 6px;
    }
    .icon-delete{
        color: rgb(199, 11, 8);
        transition: transform 0.3s ease;
        margin-right: 6px;
    }
    .icon-edit:hover , .icon-delete:hover{
        color: rgb(97, 114, 210);
        cursor: pointer;
        transform: scale(1.1);
    }
    .icons_column{
        color: rgb(54, 10, 77);
        font-weight: bold;
        font-size: 13px;
    }

    
    .close_button{
        border:none; 
        font-size:20px;
        transition: transform 0.2s ease;
        width: auto;
    }
    .close_button:hover{
        transform: scale(1.15);
    }

    .table {
        background-color: none;
    }
    table tbody tr.highlight {
        background-color: rgb(235, 227, 155) !important; 
        color: black; 
        transition: background-color 0.2s ease;
    }
    .modal-content{
        background: linear-gradient( to top, 
        rgb(248, 241, 250),  
        rgb(255, 255, 255)
        );
    }
    .close-modal{
        background-color: rgb(200, 200, 200);
    }
    .close-modal:hover{
        background-color: gray;
    }
    .highlight{
        background-color: rgba(239, 120, 227, 0.18);
    }

    #printBtn{
        background: linear-gradient( to top, 
        rgba(38, 45, 180, 0.73),  
        rgba(81, 98, 194, 0.77)
        );
        float: right;
        margin-left: 20px;
        transition: transform 0.5s ease;
        margin-right:20px;
    }
    #retour{
        background-color: lightgrey;
        float: right;
        transition: transform 0.5s ease;
    }
    #retour:hover, #printBtn:hover{
      transform: scale(1.1);
    }

    #confirmDelete{
      background: linear-gradient( to top, 
        rgba(38, 45, 180, 0.73),  
        rgba(81, 98, 194, 0.77)
        );
      border-color: rgba(188, 39, 94, 0.176);
      color:rgb(255, 255, 255);
    }
    #confirmDelete:hover{
      background: linear-gradient( to top, 
      rgba(16, 11, 102, 0.68),  
      rgba(22, 22, 119, 0.64)
       );
      border-color: rgba(188, 39, 94, 0.176);
      color:rgb(255, 255, 255);
    }

    .modal-content{
        overflow-x: auto;
    }

    /* Full screen modal */
    .modal-dialog {
        max-width: 100% !important; /* Full width */
        width: 70% !important; 
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
          <div class="container">
            <div  class="header1">
                <a href="remplir_tableau.php"><input type="button" class="ajouter" value="Ajouter un test" title="ajouter un nouveau test" ></a>
            </div>
            <table class="table" id="mytabledata">
                <thead>
                    <tr>
                        <th></th>
                        <th class='columns'>Test id</th>
                        <th class='columns'>Nom Client</th>
                        <th class='columns'>Type Teinture</th>
                        <th class='columns'>Code Couleur</th>
                        <th class='columns'>Code Article</th>
                    </tr> 
                    
                </thead>
                <tbody>
                    <?php
                        require 'config.php';
                        $req = "SELECT * FROM ".$suffix."_test_results ORDER BY test_id DESC";
                        $res = mysqli_query($conn, $req);

                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                
                                $jsonData = json_decode($row['test_data'], true);

                            
                                if ($jsonData === null) {
                                    echo "Invalid JSON data for test_id: " . $row['test_id'] . "<br>";
                                } else {

                                        echo "<tr id='row_" . $row['test_id'] . "'>";
                                        echo "<td class='columns'>
                                            <div class='btn-group icons_column'><span class='crude_update'>Modifier</span>
                                                <a href='update_data.php?test_id=" . $row['test_id'] . "&data=" . urlencode(json_encode($jsonData)) . "'>                                 
                                                    <i class='bi-pencil-fill icon-edit' title='modification' id='edit_" . $row['test_id'] . "' onclick='update_data(" . $row['test_id'] . ")'></i>
                                                </a>
                                            </div>
                                            <div class='btn-group icons_column'><span class='crude_delete'>Supprimer</span>
                                                <i class='bi bi-trash-fill icon-delete' title='suppression' tabindex='0' id='delete_" . $row['test_id'] . "' 
                                                onclick='showDeleteModal(" . $row['test_id'] . ")' onkeydown='handleDeleteKeyDown(event," . $row['test_id'] . ")'></i>
                                            </div>
                                            <button class='jsonbutton' title='données de test' onclick='show_test_data2(" . $row['test_id'] . "," . json_encode($jsonData) . ")'>Afficher</button>
                                        </td>";
                                        echo "<td class='columns' id='".$row['test_id']."'>" . $row['test_id'] . "</td>";
                                        echo "<td class='columns'>" . $row['nom_client'] . "</td>";
                                        echo "<td class='columns'>" . $row['type_teinture'] . "</td>";
                                        echo "<td class='columns'>" . $row['code_couleur'] . "</td>";
                                        echo "<td class='columns'>" . $row['code_article'] . "</td>";
                                        echo "</tr>";
                                
                                    }
                            }
                        }
                        $conn->close();
                    ?>

                </tbody>
            </table>


            <div class="modal fade" tabindex="-1" id="delete_modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_header">Warning !!</h4>
                            <button type="button" class="btn-close ms-auto close_button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body">
                            <p>By pressing the confirm button, the data with test id <span id="deleted_id">.</span> will be deleted </p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn close-modal" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn" id="confirmDelete" onclick="deleteForm()">Confirmer</button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="modal fade" tabindex="-1" id="show_test_data1">
                <div class="modal-dialog modal-lg ">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="btn-close ms-auto close_button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body">
                            <div id="content_test"></div>
                        </div>
                            
                        <div class="modal-footer">
                            <button type="button" id="retour" class="btn close-modal" data-bs-dismiss="modal">Retourner</button>
                            <button id="printBtn" class="btn btn-primary" onclick="printModalContent()">Imprimer</button>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
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

$(document).ready(function() {
    $('#mytabledata').DataTable({
        dom:  '<"top"Bfl>rt<"bottom"ip><"clear">', 
        /*
        B = buttons
        l = Length dropdown
        f = Filter (search box)
        r = Processing (optional)
        t = Table
        i = Table information (ex: "showing 1 to 10 of 50 entries")
        p = Pagination controls
        */
        buttons: [
            {
            extend: 'copy',
            className: 'btn custom-copy'
            },
            {
                extend: 'csv',
                className: 'btn  custom-csv'
            },
            {
                extend: 'excel',
                className: 'btn  custom-excel',
                exportOptions: {
                    columns: ':not(:first)'  // Excludes the first column (index 0) from being printed
                },
            },
            {
                extend: 'pdf',
                className: 'btn  custom-pdf',
                exportOptions: {
                    columns: ':not(:first)'  // Excludes the first column (index 0) from being printed
                },
            },
            {
                extend: 'print',
                className: 'btn custom-print',
                exportOptions: {
                    columns: ':not(:first)'  // Excludes the first column (index 0) from being printed
                }
            },
            {
                extend: 'colvis',
                className: 'btn custom-colvis'
            }

        ],
        responsive: true, 
        paging: true,     
        searching: true,  
        ordering: true,   
        info: true,       
        fixedHeader: true, 
        stateSave: true,  
        order: [[1, 'desc']],
        columnDefs:[{
            targets:[0],
            orderable:false,
        }],

        lengthMenu: [ [30, 60, 90, 120, -1], [30, 60, 90, 120, "All"] ], 
        pageLength: 30,     
    });

    
});




var myModal = new bootstrap.Modal(document.getElementById('show_test_data1'), {
    backdrop: 'static',  
    keyboard: false      
});

function show_test_data2(test_id,jsonData){
    
    let encodedData = encodeURIComponent(JSON.stringify(jsonData));
    fetch("show_modal_data.php?test_id=" + test_id + "&data=" + encodedData, {
        method: "GET"
    })
    .then(response => {
        return response.text();
    })
    .then(data => {
        document.getElementById("content_test").innerHTML = data;
        
        let modalElement = document.getElementById("show_test_data1");
        
        // Use Bootstrap Modal API to show the modal
        var modal = new bootstrap.Modal(modalElement);
        modal.show();
    })
    .catch(error => {
        alert('Error: ' + error);
    });

}


function printModalContent() {
    var content = document.getElementById("content_test").innerHTML; 
    
    var screenWidth = screen.width;
    var screenHeight = screen.height;

    // Open a new window for printing
    var printWindow = window.open('', '', 'width='+screenWidth+',height='+screenHeight);
    
    printWindow.document.write("<html><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'></head><body>")

    printWindow.document.write(content); 

    printWindow.document.write("</body></html>");
    
    printWindow.document.close(); 
    
    printWindow.onload = function () {
        printWindow.print(); 
        printWindow.close(); 
    };

}



function handleDeleteKeyDown(event, testId) {
    if (event.key === "Enter") {
        event.preventDefault(); 
        showDeleteModal(testId); 
    }
}

function showDeleteModal(test_id) {
    // Set the test id in the modal
    document.getElementById('deleted_id').innerText = test_id;

    var deleteModal = new bootstrap.Modal(document.getElementById('delete_modal'));

    deleteModal.show();
}

function deleteForm() {

    var test_id = document.getElementById('deleted_id').innerHTML;

    if (test_id) {
        fetch('delete_data.php?test_id=' + test_id, {
            method: 'GET'
        })
        .then(response => {
            return response.text();
        })
        .then(data => {
            alert(data);  
            location.reload();  
        })
        .catch(error => {
            alert('Error: ' + error);
        });

        // Hide the modal after deletion
        var deleteModal = new bootstrap.Modal(document.getElementById('delete_modal'));
        deleteModal.hide();
    }
}

function update_data(test_id){
    
    var row = document.getElementById('row_' + test_id);


    fetch("update_data.php?test_id=" + test_id)

    .then(response => {
        return response.text();
    })
    .then(data => {
        console.log("Data received:",data);
    })
    .catch(error => {
        console.error("Error:", error);
    });

}
        


</script>
</body>
  <!--end::Body-->
</html>
