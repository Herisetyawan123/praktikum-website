	<div class="container">
		<div class="row">
            <div class="col-md-10">
              <?php 

              $data = query_id($koneksi, "menu", $_GET['id']);
              $row = mysqli_fetch_array($data)
              ?>
              <form action="" method="POST">
                  <div class="form-group">
                      <label for="username">nama</nama>
                      <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>" placeholder="nama" required>
                  </div>
                  <div class="form-group">
                      <label for="password">url</nama>
                      <input type="text" name="url" class="form-control" value="<?= $row['url'] ?>" placeholder="home/index.php" required>
                  </div>
                  <div class="form-group">
                      <label for="password">icon</nama>
                      <input type="text" name="icon" class="form-control" value="<?= $row['icon'] ?>" placeholder="home/index.php" required>
                  </div>
                  <div class="form-group">
                      <label for="nama-lengkap">Urutan</nama>
                      <input type="number" name="urutan" class="form-control"value="<?= $row['urutan'] ?>" placeholder="urutan" required>
                  </div>
                  <div class="form-group">
                      <label for="Status">Status</nama>
                      <select name="status" class="form-control">
                          <option value="1" <?= ($row['status'] ==1 ) ? "selected" : "" ?>>Aktif</option>
                          <option value="0" <?= ($row['status'] ==0 ) ? "selected" : "" ?>>Non-aktif</option>
                      </select>
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

    $simpan = edit_menu($koneksi, $_POST, $_GET['id']);

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>alert('Berhasil Ditambah...')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        // gagal menyimpan
        echo "<script>alert('Gagal Ditambah...')</script>";
    }
}

?>
