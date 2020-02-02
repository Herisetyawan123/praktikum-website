	<div class="container">
		<div class="row">
            <div class="col-md-10">
              <?php 

              $a = query_id($koneksi, "user", $_GET['id']);
              $row = mysqli_fetch_array($a);
               ?>
              <form action="" method="POST">
                  <div class="form-group">
                      <label for="username">Username</nama>
                      <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                      <label for="nama-lengkap">Nama Lengkap</nama>
                      <input type="text" name="full_name" class="form-control" value="<?= $row['nama_lengkap'] ?>" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</nama>
                      <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>" placeholder="Email"/>
                  </div>

                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  </div>

              </form>

            </div>
		</div>		
	</div>



<?php

// kode untuk menyimpan menu ke database
if(isset($_POST['simpan'])){

    $simpan = edit_user($koneksi, $_POST, $_GET['id']);

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>alert('Berhasil Ditambah...')</script>";
        echo "<script>window.location = 'index.php?adm_p=users'</script>";
    } else {
        // gagal menyimpan
        echo "<script>alert('Gagal Ditambah...')</script>";
    }
}

?>
