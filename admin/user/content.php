<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-dark">Tabel Tambah User</h1>
        <a href="index.php?action=tambah" class="d-sm-inline-block btn btn-success"><i class="fas fa-plus fa-lg text-white"></i> Tambah</a>
    </div>
    <hr style="border: 2px solid #343a40">
    <div class="row">
    	<div class="col-md-12">
			<table class="table table-borderless">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">username</th>
			      <th scope="col">nama lengkap</th>
			      <th scope="col">email</th>
			      <th scope="col">photo</th>
			      <th scope="col">aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 

			  	$q = q_user($koneksi);
			  	$no = 1;
			  	 ?>
			  	<?php while ($row = mysqli_fetch_array($q)): ?>
				    <tr>
				      <td scope="row"><?= $no++ ?></td>
				      <td><?= $row['username'] ?></td>
				      <td><?= $row['nama_lengkap'] ?></td>
				      <td><?= $row['email'] ?></td>
				      <td><?= $row['photo'] ?></td>
				      <td>
				      	<a href="?action=edit&id=<?= $row['id'] ?>" class="badge badge-primary">
				      		<i class="fas fa-pencil-alt"></i>Edit
				      	</a>
				      	<a href="hapus.php?id=<?= $row['id'] ?>" class="badge badge-danger">
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