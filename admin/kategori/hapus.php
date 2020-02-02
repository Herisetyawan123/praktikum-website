<?php 

include '../../config/function.php';
if (isset($_GET['id'])) {
	if (hapus_data_byId($koneksi, "kategori", $_GET['id'])) {
        echo "<script>window.location = 'index.php'</script>";		
	}else{
        echo "<script>alert('Gagal Dihapus...')</script>";
        echo "<script>window.location = 'index.php'</script>";
	}
}


 ?>