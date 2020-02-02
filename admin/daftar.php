<?php 

include '../config/function.php';

if (isset($_POST['submit'])) {
  if(tambah_user($koneksi, $_POST)){
    echo "<script>alert('Berhasil Ditambah...')</script>";
    echo "<script>window.location = 'login.php'</script>";
  }else{
    echo "<script>alert('Gagal Ditambah...')</script>";
  }
}

 ?> 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Izebatch - Daftar</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../assets/css/style-admin.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

          <div class="col-md-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              
              <?php if (isset($error)): ?>
                <p class="alert alert-danger">
                  <?= $error; ?>
                </p>
              <?php endif ?>
              
              <form class="user" method="post" action="">
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="full_name" id="exampleInputEmail" placeholder="Full Name..." required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="username" id="exampleInputEmail" placeholder="Username..." required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password2" id="exampleRepeatPassword" placeholder="Repeat Password" required>
                  </div>
                </div>
                <button type="submit" name="submit" class="btn bg-otaku btn-user btn-block">
                  Register Account
                </button>
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
              
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>
