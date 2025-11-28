<?php 
  require_once("config.php");
  include("backend.php");
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 

    <!-- chart js library --> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>

    <!-- select2 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


  </head>
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
          <div class="container-fluid ">
            <!--begin::Row-->
            <div class="row ">
              <div class="col">
                <!--begin::Small Box Widget test-->
                <div class="small-box text-bg-primary" style="width:180px;">
                  <div class="inner">
                    <h3><?php echo $num_test  ?></h3>
                    <p>Tests</p>
                    <i class="fas fa-clipboard-list small-box-icon" style="opacity: 0.7;"></i> 
                  </div>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget test-->
              </div>
              <div class="col">
                <!--begin::Small Box Widget client-->
                <div class="small-box text-bg-success" style="width:180px;">
                  <div class="inner">
                      <h3><?php echo $num_client  ?></h3>
                      <p>Clients</p>
                      <i class="fas fa-users small-box-icon" style="opacity: 0.7;"></i>
                  </div>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget client-->
              </div>
              <div class="col">
                <!--begin::Small Box Widget teinture-->
                <div class="small-box text-bg-warning" style="width:180px;">
                  <div class="inner">
                    <h3><?php echo $num_teinture  ?></h3>
                    <p>Teinture</p>
                    <i class="fas fa-paint-brush small-box-icon" style="opacity: 0.7;"></i>
                  </div>
                  <a
                    href="#"
                    class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget teinture-->
              </div>
              <div class="col">
                <!--begin::Small Box Widget couleur-->
                <div class="small-box text-bg-danger" style="width:180px;">
                  <div class="inner">
                    <h3><?php echo $num_couleur  ?></h3>
                    <p>Couleur</p>
                    <i class="fas fa-palette small-box-icon" style="opacity: 0.7;"></i>
                  </div>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget couleur-->
            </div>
            <div class="col">
                <!--begin::Small Box Widget test-->
                <div class="small-box text-bg-info" style="width:180px;">
                  <div class="inner">
                    <h3><?php echo $num_article  ?></h3>
                    <p>Article</p>
                    <i class="fas fa-box small-box-icon" style="opacity: 0.7;"></i>
                  </div>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget test-->
              </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-7 connectedSortable" style="width:65%">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Taux de réussite total: &nbsp<?php echo $success_totale  ?> %</h3></div>
                  <div class="card-body">
                    <div class="chart-container">
                      <canvas id="successChart" width="550" height="300"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
                
              <!-- /.Start col -->
            </div>
            <div class="row">
              <!-- Start col -->
              
              <div class="row g-3 mt-4">
                <div class="col-md-6">
                  <div class="chart-container3">
                    <canvas id="barChart1" width="400" height="250"></canvas>
                  </div>
                </div>
              <!-- top clients -->
                <div class="col-md-6">
                  <div class="chart-container3">
                    <canvas id="barChart2" width="400" height="250"></canvas>
                  </div>
                </div>
              </div>

              <!-- top couleurs -->
              <div class="row g-3 mt-4">
                <div class="col-md-6">
                  <div class="chart-container3">
                    <canvas id="barChart3" width="400" height="250"></canvas>
                  </div>
                </div>
              <!-- top teintures -->
                <div class="col-md-6">
                  <div class="chart-container3">
                    <canvas id="barChart4" width="400" height="250"></canvas>
                  </div>
                </div>
              </div>
            
              <hr id="section_clients">

              <!-- Number of clients par year -->
              <div class="row g-3 mt-4">
                <div class="col">
                  <div class="chart-container4">
                    <canvas id="lineChart" width="400" height="200"></canvas>
                  </div>
                </div>
              </div>


                  
              <hr id="section_articles">
              
              <!--taux de réussite articles-->
              <div class="row g-3 mt-4">
                <div class="col-md">
                  <div class="text-center">
                        <h5 id="success_articles">Taux de réussite d'article: &nbsp;
                          <select id="choix_article" style="width:150px">
                            <option></option>
                          </select>
                        </h5>
                    </div>
                </div>

                <div class="col-md mb-5" >
                  <div class="chart-container5 card" >
                    <div class="card-header card1"></div>
                    <div class="card-body">
                      <canvas id="successChart1" width="500" height="250"></canvas>
                    </div>
                  </div>
                </div>
              </div>

                  
              <hr id="section_couleurs">


              <!--taux de réussite couleur-->
              <div class="row g-3 mt-4">
                <div class="col-md">
                  <div class="text-center">
                        <h5 id="success_couleurs">Taux de réussite de couleur: &nbsp;
                          <select id="choix_couleur" style="width:150px">
                            <option></option>
                          </select>
                        </h5>
                    </div>
                </div>

                <div class="col-md mb-5">
                  <div class="chart-container5 card">
                    <div class="card-header card2"></div>
                    <div class="card-body">
                      <canvas id="successChart2" width="500" height="250"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <hr id="section_teintures">


              <!--taux de réussite teinture-->
              <div class="row g-3 mt-4">
                <div class="col-md">
                  <div class="text-center">
                        <h5 id="success_teintures">Taux de réussite de teinture: &nbsp;
                          <select id="choix_teinture" style="width:150px">
                            <option></option>
                          </select>
                        </h5>
                    </div>
                </div>

                <div class="col-md mb-5">
                  <div class="chart-container5 card" >
                    <div class="card-header card3"></div>
                      <div class="card-body">
                        <canvas id="successChart3" width="500" height="250"></canvas>
                      </div>
                  </div>
                </div>
              </div>

                  
              <hr id="section_materials">

              <!-- Line Charts  material consumption-->
              <div class="row g-3 mt-4">
                      <div class="col-md">
                          <div class="chart-container">
                              <canvas id="selChart" width="400" height="200"></canvas>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="chart-container">
                              <canvas id="soudeChart" width="400" height="200"></canvas>
                          </div>
                      </div>
                  </div>

                  <div class="row g-3 mt-4">
                      <div class="col-md">
                          <div class="chart-container">
                              <canvas id="carbonateChart" width="400" height="200"></canvas>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="chart-container">
                              <canvas id="eauChart" width="400" height="200"></canvas>
                          </div>
                      </div>
                  </div>

                  <!-- Pie Chart material consumption -->
                  <div class="row g-3 mt-4">
                      <div class="card ms-4" style="border:none;">
                          <div class="chart-container2">
                              <canvas id="pieChart" width="400" height="250"></canvas>
                          </div>
                          <div class="card-footer"><center>Consommation totale de matériel</center></div>
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
      <!--begin::Footer-->
      <footer class="app-footer" style="height:15px;font-size:12px">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::year-->
          2025-2026&nbsp;
        <!--end::year-->
      </footer>
      <!--end::Footer-->
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

//nombre de clients per year
const years = [];
const nbre_client = [];
const clients_year = <?php echo json_encode($results2); ?>;


for (const [year, clientCount] of Object.entries(clients_year)) {
  years.push(year);
  nbre_client.push(clientCount);
}

// Line Chart
const lineCtx = document.getElementById('lineChart').getContext('2d');
new Chart(lineCtx, {
  type: 'line',
  data: {
    labels: years, 
    datasets: [
      {
        label: 'Nombre de Clients par année',
        data: nbre_client, 
        borderColor: '#1f77b4',
        fill: false
      },
    ]
  }
});



// Convert PHP arrays to JavaScript arrays
const articles = <?php echo json_encode($results['articles']); ?>;
const clients = <?php echo json_encode($results['clients']); ?>;
const couleurs = <?php echo json_encode($results['couleurs']); ?>;
const teintures = <?php echo json_encode($results['teintures']); ?>;


// Bar articles
const barCtx1 = document.getElementById('barChart1').getContext('2d');
new Chart(barCtx1, {
  type: 'bar',
  data: {
    labels: [articles.labels[0], articles.labels[1], articles.labels[2], articles.labels[3], articles.labels[4]],
    datasets: [{
      label: 'Top Articles',
      data: articles.data,
      backgroundColor: ['#746fde', 'rgb(19, 178, 222)', 'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 159, 64, 1)']
    }]
  }

});

// Bar clients
const barCtx2 = document.getElementById('barChart2').getContext('2d');
new Chart(barCtx2, {
  type: 'bar',
  data: {
    labels: [clients.labels[0], clients.labels[1], clients.labels[2], clients.labels[3], clients.labels[4]],
    datasets: [{
      label: 'Top Clients',
      data: clients.data,
      backgroundColor: ['#746fde', 'rgb(19, 178, 222)', 'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 159, 64, 1)']
    }]
  }

});

// Bar couleurs
const barCtx3 = document.getElementById('barChart3').getContext('2d');
new Chart(barCtx3, {
  type: 'bar',
  data: {
    labels: [couleurs.labels[0], couleurs.labels[1], couleurs.labels[2], couleurs.labels[3], couleurs.labels[4]],
    datasets: [{
      label: 'Top Couleurs',
      data: couleurs.data,
      backgroundColor: ['#746fde', 'rgb(19, 178, 222)', 'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 159, 64, 1)']
    }]
  }

});

// Bar teintures
const barCtx4 = document.getElementById('barChart4').getContext('2d');
new Chart(barCtx4, {
  type: 'bar',
  data: {
    labels: [teintures.labels[0], teintures.labels[1], teintures.labels[2], teintures.labels[3], teintures.labels[4]],
    datasets: [{
      label: 'Top Teintures',
      data: teintures.data,
      backgroundColor: ['#746fde', 'rgb(19, 178, 222)', 'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 159, 64, 1)']
    }]
  },
  

});

//total success rate
var months = <?php echo json_encode(array_keys($results3)); ?>;
var successRates = <?php echo json_encode(array_values($results3)); ?>;

var ctxsuccess = document.getElementById('successChart').getContext('2d');
var myChart = new Chart(ctxsuccess, {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            label: 'Taux de réussite (par mois)',
            data: successRates,
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: true,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            tension: 0.2
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) { return value + '%' }
                }
            }
        }
        
    }
});



// ARTICLES SUCCESS RATE
$(document).ready(function () {
$('#choix_article').select2({
    placeholder: "Article", 
});

$('#choix_article').on('change', function () {
    const selectedArticle = $(this).val(); 

    // Send the selected article to the server for data
    $.ajax({
        url: '', // Leave empty for the current file
        method: 'GET',
        data: { article: selectedArticle },
        success: function (response) {
            const monthlyData1 = JSON.parse(response); 

            const successChart1 = Chart.getChart('successChart1'); // Get the chart instance
            successChart1.data.labels = Object.keys(monthlyData1); // Update labels (months)
            successChart1.data.datasets[0].data = Object.values(monthlyData1); // Update data
            successChart1.update(); // Redraw the chart
        }
    });
});
});

document.querySelector('.card1').innerText='Taux de réussite articles';
const ctx7 = document.getElementById('successChart1').getContext('2d');
let successChart1 = new Chart(ctx7, {
type: 'line',
data: {
    labels: [], // Empty labels to be updated dynamically
    datasets: [{
        label: '',
        data: [], // Empty data to be updated dynamically
        borderColor: 'rgb(18, 163, 93)',
        fill: true,
        backgroundColor: 'rgba(75, 192, 169, 0.2)',
        tension: 0.1
    }]
},
options: {
    responsive: true,
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                callback: function (value) {
                    return value + '%'; // Add '%' to y-axis labels
                }
            }
        }
    }
}
});

// Populate the Article Dropdown
fetch("stock_data.php")
.then(response => response.json())
.then(data => {
    console.log(data);
    const articleList = document.getElementById('choix_article');
    Object.keys(data.articles).forEach(article => {
        const option = document.createElement('option');
        option.innerText = article;
        option.value = article;
        articleList.appendChild(option);
    });
})
.catch(error => {
    console.error('Error fetching articles: ', error);
});


// COULEURS SUCCESS RATE
$(document).ready(function () {
$('#choix_couleur').select2({
    placeholder: "Couleur", 
});

$('#choix_couleur').on('change', function () {
    const selectedCouleur = $(this).val(); 

    // Send the selected color to the server for data
    $.ajax({
        url: '', // Leave empty for the current file
        method: 'GET',
        data: { couleur: selectedCouleur },
        success: function (response) {
            const monthlyData2 = JSON.parse(response); 

            const successChart2 = Chart.getChart('successChart2'); // Get the chart instance
            successChart2.data.labels = Object.keys(monthlyData2); // Update labels (months)
            successChart2.data.datasets[0].data = Object.values(monthlyData2); // Update data
            successChart2.update(); // Redraw the chart
        }
    });
});
});

document.querySelector('.card2').innerText='Taux de réussite couleurs';
const ctx8 = document.getElementById('successChart2').getContext('2d');
let successChart2 = new Chart(ctx8, {
type: 'line',
data: {
    labels: [], // Empty labels to be updated dynamically
    datasets: [{
        label: '',
        data: [], // Empty data to be updated dynamically
        borderColor: 'rgb(183, 116, 237)',
        fill: true,
        backgroundColor: 'rgba(240, 207, 255, 0.45)',
        tension: 0.1
    }]
},
options: {
    responsive: true,
    scales: {
        y: {
            beginAtZero: true
        }
    }
}
});

// Populate the Couleur Dropdown
fetch("stock_data.php")
.then(response => response.json())
.then(data => {
    console.log(data);
    const couleurList = document.getElementById("choix_couleur");
    const uniqueColors = new Set(); // Use Set to ensure unique colors

    Object.values(data.articles).forEach(article => {
        article.code_couleur.forEach(couleur => {
            uniqueColors.add(couleur); // Add color to the Set
        });
    });

    uniqueColors.forEach(couleur => {
        const option = document.createElement("option");
        option.innerText = couleur;
        option.value = couleur;
        couleurList.appendChild(option);
    });
})
.catch(error => {
    console.error("Error fetching colors: ", error);
});



// TEINTURE SUCCESS RATE
$(document).ready(function () {
$('#choix_teinture').select2({
    placeholder: "Teinture", 
});

$('#choix_teinture').on('change', function () {
    const selectedTeinture = $(this).val(); 

    // Send the selected color to the server for data
    $.ajax({
        url: '', // Leave empty for the current file
        method: 'GET',
        data: { teinture: selectedTeinture },
        success: function (response) {
            const monthlyData3 = JSON.parse(response); 

            const successChart3 = Chart.getChart('successChart3'); // Get the chart instance
            successChart3.data.labels = Object.keys(monthlyData3); // Update labels (months)
            successChart3.data.datasets[0].data = Object.values(monthlyData3); // Update data
            successChart3.update(); // Redraw the chart
        }
    });
});
});

document.querySelector('.card3').innerText='Taux de réussite Teintures';
const ctx6 = document.getElementById('successChart3').getContext('2d');
let successChart3 = new Chart(ctx6, {
type: 'line',
data: {
    labels: [], // Empty labels to be updated dynamically
    datasets: [{
        label: '',
        data: [], // Empty data to be updated dynamically
        borderColor: 'rgb(75, 116, 192)',
        fill: true,
        backgroundColor: 'rgba(75, 98, 192, 0.2)',
        tension: 0.1
    }]
},
options: {
    responsive: true,
    scales: {
        y: {
            beginAtZero: true
        }
    }
}
});

// Populate the Teinture Dropdown
fetch("stock_data.php")
.then(response => response.json())
.then(data => {
    console.log(data);
    const teintureList = document.getElementById("choix_teinture");
    const uniqueTeinture = new Set(); // Use Set to ensure unique teinture

    Object.values(data.articles).forEach(article => {
        article.type_teinture.forEach(teinture => {
            uniqueTeinture.add(teinture); // Add teinture to the Set
        });
    });

    uniqueTeinture.forEach(teinture => {
        const option = document.createElement("option");
        option.innerText = teinture;
        option.value = teinture;
        teintureList.appendChild(option);
    });
})
.catch(error => {
    console.error("Error fetching teintures: ", error);
});




// material consumption 
const labels10 = <?php echo json_encode($months); ?>;
const selData = <?php echo json_encode($sel_data); ?>;
const soudeData = <?php echo json_encode($soude_data); ?>;
const carbonateData = <?php echo json_encode($carbonate_data); ?>;
const eauData = <?php echo json_encode($eau_data); ?>;

function createLineChart(ctx, label, data, color,bgcolor) {
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels10,
            datasets: [{ label, data, borderColor: color, fill: true,backgroundColor: bgcolor  }]
        },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });
}

createLineChart(document.getElementById('selChart').getContext('2d'), 'Consommation de Sel (g)', selData, 'rgba(75, 192, 192, 1)','rgba(75, 192, 192, 0.43)');
createLineChart(document.getElementById('soudeChart').getContext('2d'), 'Consommation de Soude (mL)', soudeData, 'rgba(153, 102, 255, 1)','rgba(153, 102, 255, 0.43)');
createLineChart(document.getElementById('carbonateChart').getContext('2d'), 'Consommation de Carbonate (mL)', carbonateData, 'rgba(255, 159, 64, 1)','rgba(255, 160, 64, 0.43)');
createLineChart(document.getElementById('eauChart').getContext('2d'), 'Consommation d\'Eau (mL)', eauData, 'rgba(255, 99, 132, 1)','rgba(255, 99, 133, 0.43)');




const pieLabels = <?php echo json_encode($labels10); ?>;
const pieData = <?php echo json_encode($total_consumption_data); ?>;

new Chart(document.getElementById('pieChart').getContext('2d'), {
    type: 'pie',
    data: {
        labels: pieLabels,
        datasets: [{
            label: 'Consommation totale de matériel',
            data: pieData,
            backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(153, 102, 255, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(255, 99, 132, 0.6)']
        }]
    },
    options: { responsive: true }
});


</script>
</body>
  <!--end::Body-->
</html>
