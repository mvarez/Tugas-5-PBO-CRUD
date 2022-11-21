<?php
	include 'connection.php';

	$query = "SELECT * FROM tbl_mhs";
	$sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<script src="js/bootstrap.bundle.min.js" ></script>
	
	<title></title>
</head>
<body>
	<nav class="navbar bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      DATABASE MAHASISWA
	    </a>
	  </div>
	</nav>
	<!-- Judul -->
	<div class="container-fluid">
		<h3 class="mt-4">Data Mahasiswa</h3>
		<a href="add_mhs.php" type="button" class="btn btn-primary">Add</a>
		<div class="table-responsive">
			<table class="table align-middle">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>NIM</th>
			        <th>Nama Mahasiswa</th>
			        <th>Jenis Kelamin</th>
			        <th>Alamat</th>
			        <th>Program Studi</th>
			        <th>Foto</th>
			        <th>Email</th>
			        <th>Action</th>
			      </tr>
			    <?php
                $i = 1;
                while ($data = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $data['nim']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama_mhs']; ?>
                        </td>
                        <td>
                            <?php echo $data['jk']; ?>
                        </td>
                        <td>
                            <?php echo $data['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $data['prodi']; ?>
                        </td>
                        <td>
                            <img src="img/<?php echo $data['foto']; ?>" alt="" style="max-width: 120px;">
                        </td>
                        <td><?php echo $data['email']; ?></td>
                        <td>
                            <a href="edit_page_mhs.php?id_mhs=<?php echo $data['id_mhs']; ?>" type="button" class="btn btn-primary">Edit</a>
                            <a href="del_mhs.php?id_mhs=<?php echo $data['id_mhs']; ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin meghapus data tersebut?')">Delete</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>