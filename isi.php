    <div class="jumbotron wtop text-center">
      <h1 class="display-4 mt-5">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>




    <section>
      <div class="container card wrap" style="border: none;">
        <div class="row card-header text-white bg-otaku">
          <h4>
            Random Posted
            <i class="fas fa-blog"></i>
          </h4>
        </div>
        <div class="row card-body">
          <div class="card-group">
            <?php 

              $pos = mysqli_query($koneksi,'SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 0, 4');
              while ($row = mysqli_fetch_array($pos)) {
                

                ?>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="assets/img/post/<?= $row['path_img'] ?>" alt="Card image cap" height="180px">
                <div class="card-body">
                  <h6 class="card-title"><?= substr($row['judul'], 0, 40) ?>...</h6>
                  <small>Last updated <?= substr($row['tanggal'], 0, 10) ?></small>
                  <br>
                  <a href="index.php?id=<?= $row['id'] ?>" class="btn btn-more">More</a>
                </div>
              </div>          
            </div>

            <?php
               } 
             ?>




        </div>
      </div>
    </section>


    <section>
      <div class="container mt-3">
        <div class="row">
          <div class="col-md-8 mb-4 ">
            <div class="card layout">
              <div class="card-header bg-otaku">
                <h4>All Post</h4>
              </div>
              <div class="card-body" style="background-color: white; color: black;">
                <?php 

                $a = query("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT $firstPage, $dataPerPage");
                while ($row = mysqli_fetch_array($a)) {
                ?>
                <div class="card">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="assets/img/post/<?= $row['path_img'] ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h6><a href="index.php?id=<?= $row['id'] ?>" class="text-dark"><?= substr($row['judul'], 0, 100) ?></a></h6>                    
                        <p class="card-text"><small class="text-muted">Last updated <?= $row['tanggal'] ?></small></p>
                        <p class="card-text"><?= substr($row['isi'], 0, 100) ?>...</p>
                      </div>
                    </div>
                  </div>
                </div> 
                <?php
                }
                 ?>


                <nav>
                  <ul class="pagination mt-2">
                    <?php if (isset($_GET['p'])): ?>
                      <?php if ($_GET['p']-1 == 0): ?>
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                      <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?post=all&p=<?= $_GET['p']-1 ?>">Previous</a>
                        </li>                               
                      <?php endif ?>
                    <?php else: ?>
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>    
                    <?php endif ?>
                    <?php 
                    for($i = 1; $i <= $nPage;$i++){
                     ?>
                        <?php if ($activePage == $i): ?>
                          <li class="page-item active"><a class="page-link" href="#"><?= $i ?> <span class="sr-only">(current)</span></a></li>
                        <?php else: ?>
                          <li class="page-item"><a class="page-link" href="index.php?post=all&p=<?= $i ?>"><?= $i ?></a></li>
                        <?php endif ?>
                    
                    <?php 
                    }
                    ?>
                    <?php if (isset($_GET['p'])): ?>
                      <?php if ($_GET['p']+1 > $nPage): ?>
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                        </li>
                      <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?post=all&p=<?= $_GET['p']+1 ?>">Next</a>
                        </li>                               
                      <?php endif ?>
                    <?php else: ?>
                        <li class="page-item">
                          <a class="page-link" href="index.php?post=all&p=2">Next</a>
                        </li>     
                    <?php endif ?>

                  </ul>
                </nav>
              </div>
            </div>
          </div>

          
          
          <div class="col-md-4 layout">

            <div class="card" style="border: none;">
              <div class="card-header bg-otaku">
                <h4>Category</h4>
              </div>
              <div class="card-body" style="background-color: white; color: black;">
                  <ul class="list-group list-group-flush font-weight-bold" >
                    <?php 

                    $kate = getData($koneksi, "kategori");
                    while ($row = mysqli_fetch_array($kate)) {
                      echo '<li class="list-group-item">
                      <a href="index.php?post='.$row["id"].'" class="text-dark">'.$row['kategori'].'</a></li>';
                    }

                     ?>
                   
                  </ul>                
              </div>              
            </div>


            <div class="card mt-4" style="border: none;">
              <div class="card-header bg-otaku">
                <h4>Contact</h4>
              </div>
              <div class="card-body" style="background-color: white; color: black;">
                <div class="row">
                <div class="col-md-3 justify-content-center" style="background-color: rgba(0,0,0,0.3); border-radius: 3%;">
                  <p><small class="font-weight">Wa</small></p>
                  <p><small class="font-weight">Facebook</small></p>
                  <p><small class="font-weight">Email</small></p>
                  
                  
                </div>
                <div class="col-md-8">
                  <p><small class="font-weight-bold">082852797950</small></p>
                  <p><small class="font-weight-bold">Andri.iwatani</small></p>
                  <p><small class="font-weight-bold">Herisetyawan233@gmail.com</small></p>
                  
                </div>                  
                </div>

              </div>              
            </div>
         
        </div>
      </div>
    </section>