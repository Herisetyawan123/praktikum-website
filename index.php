<?php 
include 'config/function.php';

 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HackingCode - Website</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navbar -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background: #343a40 url(assets/img/otaku.png)">
      <div class="container">
        <span class="navbar-brand">
          <a href="#" style="color: #17a2b8; text-decoration: none; ">
            Hacking
            <span style="color: white; text-decoration: none;">code</span>
          </a>
          
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto otaku">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?post=all">Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="author.php">Author</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navigation -->


    <?php if (isset($_GET['id'])): ?>
      <?php include 'artikel.php'; ?>
    <?php elseif (isset($_GET['post'])): ?>
      <?php include 'post.php'; ?>
    <?php else: ?>
      <?php include 'isi.php'; ?>
    <?php endif ?>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
  <div class="container wrap">
  <div class="row">
    <div class="col-md-6">
      <h1>HERI_S</h1>
      <hr style="border: 2px solid #17a2b8; border-radius: 5px; width: 40%; margin-left: 0;">
      <div class="media-social">
        <a href="#">
          <i class="fas fa-lg fa-facebook"></i>
        </a>
        <a href="#">
          <i class="fas fa-lg fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fas fa-lg fa-github"></i>
        </a>
        <a href="#">
          <i class="fas fa-lg fa-instagram"></i>
        </a>
        <a href="#">
          <i class="fas fa-lg fa-linkedin"></i>
        </a>
      </div>
      <p>Hak Cipta &copy; <?php  echo Date("Y"); ?> Programmer PHP</p>
    </div>
    <div class="col-md-6">
      <h1>Our Newsletter</h1>
      <hr style="border: 2px solid #17a2b8; border-radius: 5px; width: 40%; margin-left: 0;">
      <p>Enter your email to get our news and update.</p>
      <form>
        <div class="col-md-9" style="margin-left:  -15px;">
          <input class="form-control rounded-input" type="text" placeholder="Enter Your Email...">
        </div>
     
      </form>
    </div>
  </div>
</div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin Jav