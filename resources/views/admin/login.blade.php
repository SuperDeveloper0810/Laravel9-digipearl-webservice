<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Grexa - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../admin/css/app.min.css">
  <link rel="stylesheet" href="../admin/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="../admin/bundles/izitoast/css/iziToast.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../admin/css/style.css">
  <link rel="stylesheet" href="../admin/css/components.css">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='../admin/img/favicon.ico' />
</head>

<body class="background-image-body">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card"  style="margin-top: 30%;">
              <div class="card-header card-header-auth">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="javascript:;" class="needs-validation LoginForm" novalidate="">
                  <div class="form-group">
                    <label for="email">UserName</label>
                    <input id="email" type="text" class="form-control" name="user_name" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your UserName
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-block btn-auth-color" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="../admin/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../admin/bundles/izitoast/js/iziToast.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

  <!-- Page Specific JS File -->
  <script src="../admin/js/page/toastr.js" type="text/javascript"></script>

  <!-- Template JS File -->
  <script src="../admin/js/scripts.js"></script>

  <!-- Customize JS File -->
  <script src="../admin/js/auth.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            Auth.init();
        });

    </script>
</body>

</html>