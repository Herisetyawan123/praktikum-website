<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Edit Artikel</h1>
    </div>
    <hr style="border: 2px solid #343a40">
    <div class="row">            
            <div class="col-md-10">

              <?php 

                $query = query_id($koneksi, 'artikel', $_GET['id']);

            $row = mysqli_fetch_array($query);

               ?>
              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <input type="text" name="judul" class="form-control" value="<?= $row['judul'] ?>" placeholder="Judul artikel">
                  </div>
                  <div class="form-group">
                      <textarea name="isi" class="form-control" rows="10" placeholder="Tuliskan apa yang anda pikirkan"><?= $row['isi'] ?></textarea>
                  </div>
                  <div class="form-group">
                      <select name="kategori" class="form-control">
                          <option value="0">Kategori</option>
                          <?php 
                          $a =getData($koneksi, "kategori");
                          while ($kat = mysqli_fetch_array($a)) {
                            if ($kat['id'] == $row['id_kategori']) {
                              echo '<option value="'.$kat['id'].'" selected>'.$kat['kategori'].'</option>';
                            }else{
                              echo '<option value="'.$kat['id'].'">'.$kat['kategori'].'</option>';
                            }
                            
                          }

                           ?>

                      </select>
                  </div>
                  <div class="form-group">
                      <input type="file" name="path_img" class="form-control">
                  </div>
                  <div class="form-group">
                      <input type="hidden" name="penulis" value="<?php echo $_SESSION['username'] ?>"/>
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-send"></i> Terbitkan</button>
                  </div>

              </form>


            </div>
    </div>
</div>



<?php

// kode untuk menyimpan artikel ke database
if(isset($_POST['simpan'])){
    // lakukan penyimpanan ke database
    $simpan = edit_artikel($koneksi, $_POST, $_GET['id']);
    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>alert('Berhasil Diubah...')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        // gagal menyimpan
        echo "<script>alert('Gagal Diubah...')</script>";
    }
}



?>
