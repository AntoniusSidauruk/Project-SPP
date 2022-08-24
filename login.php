<?php 
session_start();
if (isset($_SESSION['level'])){
  header("location:./page/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="template/vendors/feather/feather.css">
  <link rel="stylesheet" href="template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="template/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="template/images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="template/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <div class="mb-2" id="failed">
                <button type="button" style="width: 100%; text-align: left;" class="btn btn-danger btn-block">
                  <i class="ti-close me-2" style="font-weight:bold"></i>Sorry, Username or Password failed
                  <span style="float: right" id="count">no</span>
                </button>
              </div>
              <form class="pt-3" method="POST" action="action/checklog.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="user" id="user" placeholder="Username">
                  <p id="msgUser" style="color:red; ">* username cannot empty</p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="pass" id="pass" placeholder="Password">
                  <p id="msgPass" style="color:red; ">* password cannot empty</p>
                </div>
                <div class="mt-3">
                  <button type="button"  name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="hitung"><span>login!</span></button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="remember" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-danger auth-form-btn">
                    <i class="ti-email me-2"></i>Connect using gmail
                  </button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="template/js/off-canvas.js"></script>
  <script src="template/js/hoverable-collapse.js"></script>
  <script src="template/js/template.js"></script>
  <script src="template/js/settings.js"></script>
  <script src="template/js/todolist.js"></script>
  <!-- endinject -->
  <script type="text/javascript">
    $(document).ready(function(){
      $("#msgUser").hide();
      $("#msgPass").hide();
      $("#failed").hide();
    })


    $("#hitung").click(function(){
      var user = $("#user").val();
      var pass = $("#pass").val();  

      if(user == ''){
        $("#msgUser").show();
        $("#msgPass").hide();
      }else if (pass == ''){
        $("#msgUser").hide();
        $("#msgPass").show();
      }else{	
        $.ajax({
          type: "POST",
          url: "action/checklog.php",
          data:{user:user, pass:pass},
          success:function(data){
            if (data == "berhasil"){
              alert("ok");
            }else{
              $("#msgPass").hide();
              $("#failed").show();
            }
          }
        })
    }


    });

    // toastr.warning("Tidak dapat melebihi jumlah stok yang tersedia", "Perhatian!", {
    //   "timeOut": "2000",
    //   "extendedTImeout": "0"
    // });
  </script>
</body>

</html>
