<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Tambah Artikel Baru</h1>
    </div>
    <hr style="border: 2px solid #343a40">
    <div class="row">            
            <div class="col-md-10">

              <form class="form" action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <input type="text" name="judul" class="form-control" placeholder="Judul artikel">
                  </div>
                  <div class="form-group">
                      <textarea name="isi" class="form-control" rows="10" placeholder="Tuliskan apa yang anda pikirkan"></textarea>
                  </div>
                  <div class="form-group">
                      <select name="kategori" class="form-control">
                          <option value="0">Kategori</option>
                          <?php 

                          $a =getData($koneksi, "kategori");
                          while ($row = mysqli_fetch_array($a)) {
                            echo '<option value="'.$row['id'].'">'.$row['kategori'].'</option>';
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
    $judul = empty($_POST['judul']) ? "Tampa judul": $_POST['judul'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];
    

    // upload image
    $path = upload();
    if ($path) {
      $simpan = mysqli_query($koneksi, "INSERT INTO artikel (judul,isi,path_img,penulis,id_kategori) VALUES('$judul','$isi','$path','$penulis', '$kategori')");

      if($simpan) {
          // berhasil tersimpan, arahkan ke tabel data artikel
          echo "<script>alert('Berhasil Ditambah...')</script>";
          echo "<script>window.location = 'index.php'</script>";
      } else {
          // gagal menyimpan
          echo "<script>alert('Gagal Ditambah...')</script>";
      }      
    }else{
      echo "<script>alert('Masukan Gambar Terbih Dahulu...')</script>";
    }


}



?>
