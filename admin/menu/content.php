<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Tabel Menu</h1>
        <a href="index.php?action=tambah" class="d-sm-inline-block btn btn-success"><i class="fas fa-plus fa-lg text-white"></i> Tambah</a>
    </div>
    <hr style="border: 2px solid #343a40">
    <div class="row">
    	<div class="col-md-12">
			<table class="table table-borderless">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">nama</th>
			      <th scope="col">icon</th>
			      <th scope="col">url</th>
			      <th scope="col">urutan</th>
			      <th scope="col">status</th>
			      <th scope="col">aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	$q = q_menu($koneksi);
			  	$no = 1;
			  	 ?>
			  	<?php while ($menu = mysqli_fetch_array($q)): ?>
				    <tr>
				      <td scope="row"><?= $no++ ?></td>
				      <td><?= $menu['nama'] ?></td>
				      <td><?= $menu['icon'] ?></td>
				      <td><?= $menu['url'] ?></td>
				      <td><?= $menu['urutan'] ?></td>
				      <td><?= $menu['status'] ?></td>
				      <td>
				      	<a href="?action=edit&id=<?= $menu['id'] ?>" class="badge badge-primary">
				      		<i class="fas fa-pencil-alt"></i>Edit
				      	</a>
				      	<a href="hapus.php?id=<?= $menu['id'] ?>" class="badge badge-danger">
				      		<i class="fas fa-trash-alt"></i>Hapus
				      	</a>
				      </td>
				    </tr>			  		
			  	<?php endwhile ?>

			 
			  </tbody>
			</table>
    	</div>
    </div>
</div>