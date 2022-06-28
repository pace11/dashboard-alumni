<?php 
  if (!isset($_COOKIE['user_dashboard'])) {

  include 'config/connection.php';
  include 'config/global_vars.php';
  date_default_timezone_set('Asia/Jakarta');
  $status_message = '';

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = encrypt_decrypt('encrypt', $_POST['password']);
    $status_message = check_user_login($username, $password) ?: 'failed';
    
    if (check_user_login($username, $password)) {
      setcookie('user_dashboard', encrypt_decrypt('encrypt', check_user_login($username, $password)), time() + (86400 * 30), "/");
      echo "<meta http-equiv='refresh' content='1;
      url=index.php?page=home'>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Sistem informasi - Dashboard Alumni">
    <meta name="author" content="Dashboard Alumni">
    <meta name="keyword" content="Sistem informasi - Dashboard Alumni">
    <title>Login</title>
    <link rel="icon" href="./dist/assets/favicon/favicon.png" type="image/x-icon"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="./dist/css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
    .field-icon {
      float: right;
      z-index: 3;
      cursor:pointer;
      position: absolute;
      right: 10px;
      top: 10px;
    }
  </style>
  </head>
  <body class="c-app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body" style="height: 300px;">
                
                <form action="login.php" method="post" enctype="multipart/form-data">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="./coreui/icons/sprites/free.svg#cil-user"></use>
                        </svg></span></div>
                    <input class="form-control" type="text" placeholder="Username" name="username" required>
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="./coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                        </svg></span></div>
                    <input id="password-field" class="form-control" type="password" placeholder="Password" name="password" required style="">
                    <span toggle="#password-field" class="fa fa-lg fa-eye-slash field-icon toggle-password"></span>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-xs-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <?php 
                      if (!empty($status_message) && $status_message === 'failed') { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Login Gagal
                          <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                      <?php } else if (!empty($status_message) && $status_message !== 'failed') { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">Login Berhasil
                          <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none">
              <div class="card-body text-center">
                <div>
                  <h2>
                  <use xlink:href="./coreui/icons/sprites/free.svg#cil-user"></use></svg> DASHBOARD <p> ALUMNI
                  </h2>
                  <p></p>
                  <!-- <p><?= $uuid4->toString() ?></p> -->
                  <!-- <p><?= encrypt_decrypt('decrypt', 'RFhnMlRsVE94Vmkrd0JLbVZtZWtldz09'); ?></p> -->
                  <!-- <p><?= encrypt_decrypt('encrypt', 'guest12345'); ?></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="./dist/vendors/jquery/jquery.min.js"></script>
    <script src="./coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="./coreui/icons/js/svgxuse.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
      });
    </script>
  </body>
</html>
<?php } else {
echo"<meta http-equiv='refresh' content='1;url=index.php?page=beranda'>";
} ?>