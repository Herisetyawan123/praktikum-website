<?php 
  



                if ($_GET['post'] == 'all') {
                  $a = query("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT $firstPage, $dataPerPage");
                }else{
                  $idk = $_GET['post'];
                  $a = query("SELECT * FROM artikel WHERE id_kategori=$idk ORDER BY tanggal DESC LIMIT $firstPage, $dataPerPage");
                  $b = query("SELECT * FROM kategori WHERE id=$idk");
                  $kategori = mysqli_fetch_array($b);
                }
 ?>
    <section style="margin-top: 80px;">
      <div class="container mt-3">
        <div class="row">
          <div class="col-md-8 mb-4 ">
            <div class="card layout">
              <div class="card-header bg-otaku">
                <?= ($_GET['post'] == 'all')? "<h4>All Post</h4>" : '<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="index.php?post=all">Category</a></li><li class="breadcrumb-item active" aria-current="page">'.$kategori['kategori'].'</li></ol></nav>' ?>
              </div>
              <div class="card-body" style="background-color: white; color: black;">
                <?php 

                while ($row = mysqli_fetch_assoc($a)) {
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

<!--                     <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li> -->
                    <?php 

                    if ($_GET['post'] == 'all'){
                      include 'pagination.php';
                    }
                    ?>
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