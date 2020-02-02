<?php

include 'config.php'; 
// pagination

function upload()
{
	$nameFile = $_FILES['path_img']['name'];
	$sizeFile = $_FILES['path_img']['size'];
	$errorFile = $_FILES['path_img']['error'];
	$tmpFile = $_FILES['path_img']['tmp_name'];
	var_dump('assets/img/post/'.$nameFile);
	var_dump($_FILES['path_img']);
	if ($errorFile == 4) {
		return False;
	}else{
		if (move_uploaded_file($tmpFile, '../../assets/img/post/'.$nameFile)) {
			return $nameFile;
		}else{
			return False;
		}
	}
}

function counts($q)
{
	return mysqli_fetch_assoc($q);
}
function query($q)
{
	global $koneksi;
	$a = mysqli_query($koneksi, $q);
	return $a;
}
function fetch_artikel($conn)
{
	$query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal DESC");
	return $query;
}

function getData($conn,$tbname)
{
	$query = mysqli_query($conn, "SELECT * FROM $tbname");
	return $query;
}

function query_id($conn,$tbname, $id)
{
	$query = mysqli_query($conn, "SELECT * FROM $tbname WHERE id=$id");
	return $query;
}



function query_username($conn,$tbname, $user)
{
	$query = mysqli_query($conn, "SELECT * FROM $tbname WHERE username='$user'");
	return $query;
}

function edit_artikel($conn,$data, $id){
	$judul = empty($data['judul']) ? "Tanpa judul": $data['judul'];
    $isi = $data['isi'];
	$penulis = $data['penulis'];
    $kategori = $data['kategori'];
    $path = '';

	$simpan = mysqli_query($conn, "UPDATE artikel SET judul='$judul',isi='$isi',path_img='$path',penulis='$penulis',id_kategori='$kategori' WHERE id=$id");
    return $simpan;
}

function edit_menu($conn,$data, $id){
	$nama = $data['nama'];
	$url = $data['url'];
	$icon = $data['icon'];
	$urutan = $data['urutan'];
	$status = $data['status'];


	$simpan = mysqli_query($conn, "UPDATE menu SET nama='$nama',icon='$icon',url='$url',urutan='$urutan',status='$status' WHERE id=$id");
    return $simpan;
}

function edit_user($conn, $data, $id){
	$user = $data['username'];
	$fname = $data['full_name'];
	$email = $data['email'];
    $simpan = mysqli_query($conn, "UPDATE user SET username='$user', nama_lengkap='$fname', email='$email' WHERE id='$id'");
    return $simpan;
}

function tambah_user($conn, $data){
	$user = $data['username'];
	$pw = md5($data['password']);
	$fname = $data['full_name'];
	$email = $data['email'];
    $simpan = mysqli_query($conn, "INSERT INTO user (username,password,nama_lengkap,email) VALUES('$user','$pw','$fname','$email')");
    return $simpan;
}



function tambah_menu($conn, $data)
{
	$nama = $data['nama'];
	$url = $data['url'];
	$urutan = $data['urutan'];
	$status = $data['status'];
    $simpan = mysqli_query($conn, "INSERT INTO menu (nama,url,urutan,status) VALUES('$nama','$url','$urutan','$status')");
    return $simpan;
}

function q_user($conn)
{
	$query = mysqli_query($conn, "SELECT * FROM user");
	return $query;
}

function q_artikel($conn)
{
	$query = mysqli_query($conn, "SELECT * FROM artikel");
	return $query;
}

function q_menu($conn)
{
	$query = mysqli_query($conn, "SELECT * FROM menu");
	return $query;
}

function hapus_data_byId($conn, $tbname, $id){
	$query = mysqli_query($conn, "DELETE FROM $tbname WHERE id=$id");
	return $query;
}

function login($conn, $data)
{
	$user = $data['username'];
	$pw = md5($data['password']);
	$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$user' AND password='$pw'");
	return mysqli_num_rows($query);
}

 ?>