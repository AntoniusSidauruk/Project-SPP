<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <link rel="stylesheet" href="../template/vendors/feather/feather.css">
  <link rel="stylesheet" href="../template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../template/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../template/js/select.dataTables.min.css">
  <link rel="stylesheet" href="../template/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="../template/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
    </div>

    <?php include "../navbar.php" ?>

    <div class="container-fluid page-body-wrapper">
      <div class="theme-setting-wrapper">
        <div id="theme-settings" class="settings-panel">
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">              
              </div>             
            </div>          
          </div>
        </div>

        <?php include "../sidebar.php" ?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active ps-0" href="index.php?dashI" >Dashboard I</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?dashII">Dashboard II</a>
                      </li>
                    </ul>
                    <div>
                      <div class="btn-wrapper">
                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                      </div>
                    </div>
                  </div>

                  <?php if (isset($_GET['dashI'])){ ?>

                    <div class="tab-content tab-content-basic">
                      <div class="tab-pane fade show active" id="dashI" role="tabpanel" aria-labelledby="dashI"> 
                        <div class="row">
                          <div class="col-sm-12">

                          </div>
                        </div> 
                        <div class="row">
                          <div class="col-lg-8 d-flex flex-column">
                            <div class="row flex-grow">
                              <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                  <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                      <div>
                                       <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                       <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                     </div>
                                     <div id="performance-line-legend"></div>
                                   </div>
                                   <div class="chartjs-wrapper mt-5">
                                    <canvas id="performaneLine"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>

                  <?php } ?>

                    <?php if (isset($_GET['dashII'])){ ?>

                      <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="dashII" role="tabpanel" aria-labelledby="dashII"> 
                          <div class="row">
                            <div class="col-sm-12">

                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-lg-8 d-flex flex-column">
                              <div class="row flex-grow">
                                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                  <div class="card card-rounded">
                                    <div class="card-body">
                                      <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                         <h4 class="card-title card-title-dash">Performance Line Chartsss</h4>
                                         <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                       </div>
                                       <div id="performance-line-legend"></div>
                                     </div>
                                     <div class="chartjs-wrapper mt-5">
                                      <canvas id="performaneLine"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php } ?>

                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed by Orbs Group 2022</span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <script src="../template/vendors/js/vendor.bundle.base.js"></script>
    <script src="../template/vendors/chart.js/Chart.min.js"></script>
    <script src="../template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../template/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../template/js/off-canvas.js"></script>
    <script src="../template/js/hoverable-collapse.js"></script>
    <script src="../template/js/template.js"></script>
    <script src="../template/js/settings.js"></script>
    <script src="../template/js/todolist.js"></script>
    <script src="../template/js/dashboard.js"></script>
    <script src="../template/js/Chart.roundedBarCharts.js"></script>

  </body>
  </html>

