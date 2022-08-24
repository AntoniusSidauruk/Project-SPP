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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                      <div>
                        <div class="btn-wrapper">

                        </div>
                      </div>
                    </div><br>
                    <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Data Siswa Kelas XII</h4>
                          <p class="card-description">
                            data siswa -<code>modifikasi data seefektif mungkin </code>
                          </p><br>

                          <ul class="navbar-nav ms-auto ">
                            <li class="nav-item d-none d-lg-block">
                              <div id="" class="input-group">
                                <span class="input-group-addon input-group-prepend border-right">
                                  <span class=""></span>
                                </span>
                                <input type="text" id="nama" class="form-control" placeholder="search ..">
                              </div>
                            </li>
                          </ul>

                          <div class="table-responsive pt-3">
                            <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>NO</th>
                                  <th>Nama</th>
                                  <th>NISN</th>
                                  <th>Kelas</th>
                                  <th>Wali Kelas</th>
                                  <th class="text-center">Aksi</th>
                                </tr>
                              </thead>
                              <tbody class="text-muted data-siswa">
                                <tr>

                                 <td>1</td>
                                 <td>Herman Beck</td>
                                 <td>0987123432434</td>
                                 <td>$ 77.99</td>
                                 <td>May 15, 2015</td>

                                 <td>
                                  <center><button type="button" data-bs-toggle="modal" data-bs-target="#editModal" data-id="" style="border: none" class="btn btn-success btn-rounded btn-fw text-white">Detail</button>
                                    <button type="button" onclick="contoh()" style="border: none" class="btn btn-danger btn-rounded btn-fw text-white">Hapus</button></center>                                 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" >
                        <div class="modal-content" style="width:900px; right:220px;bottom:30px">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rincian Data Customer & Order</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="fetched-data text-muted"></div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-black" data-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
      <script src="../template/js/lib/datatables/datatables.min.js"></script>
      <script src="../template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
      <script src="../template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
      <script src="../template/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
      <script src="../template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
      <script src="../template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
      <script src="../template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
      <script src="../template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
      <script src="../template/js/lib/datatables/datatables-init.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
      <script type="text/javascript" src="../style/js/processjs.js"></script>


  </body>
  </html>

