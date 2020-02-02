<?php 

include '../config/function.php';
session_start();


if (isset($_POST['button'])) {
  if(login($koneksi, $_POST) > 0){
        // login berhasil catat session
        $user = $_POST['username'];
        $_SESSION['username'] = $user;
    echo "<script>alert('Berhasil login...')</script>";
    echo "<script>window.location = 'index.php'</script>";
  }else{
    $error = '<p class="alert alert-danger">username or password is wrong!</p>';
  } 
}


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Web</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <!-- <link rel="stylesheet" href="../assets/css/style.css" /> -->
    <link rel="stylesheet" href="../assets/css/style-admin.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css" />
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card transparent-card" style="border:none;">
          <div class="card-header bg-otaku" >
            <div class="card-title text-white">
              <h3>Sign In</h3>
            </div>
          </div>
          <div class="card-body">
            <form class="login" action="" method="post">
                <?php if (isset($error)) {
                  echo $error;
                } ?>
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Andi cs" name="username">
                          </div>
              
                          <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" placeholder="****" name="password">
                          </div>
              
              <button type="submit" name="button" class="btn btn-success">
                Sign In
              </button>
              <a href="daftar.php" class="btn btn-primary">
                Sign Up
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
