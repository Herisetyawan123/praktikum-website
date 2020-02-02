    <?php 

    $art = query_id($koneksi, "artikel", $_GET['id']);
    $artikel = mysqli_fetch_array($art);
     ?>
    <section style="margin-top: 80px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-4 ">
            <div class="card layout">
                <nav aria-label="breadcrumb bg-dark">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?post=all">All Post</a></li>
                    <li class="breadcrumb-item active"  aria-current="page"><?= $artikel['judul'] ?></li>
                  </ol>
                </nav>
              <img src="assets/img/post/<?= $artikel['path_img'] ?>" class="card-img-top" alt="...">
              <div class="card-body" style="background-color: white; color: black;">
                
                <div class="mt-5"></div>

                <h1><?= $artikel['judul'] ?></h1>
                <?= $artikel['isi'] ?>

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