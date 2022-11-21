<?php
	include 'connection.php';

	$query = "SELECT * FROM tbl_prodi";
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
    <div class="content">
        <div class="container">
            <h3>Data Program Studi</h3>
            <a href="add_prodi.php" class="btn btn-success mb-2">Add</a>
            <div class="table-responsive">
			<table class="table align-middle">
                    <td>No</td>
                    <td>Jenjang</td>
                    <td>Nama Program Studi</td>
                    <td>Action</td>
                </tr>
                <?php
                $i = 1;
                while ($data = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $data['jenjang']; ?></td>
                        <td><?php echo $data['nama_prodi']; ?></td>
                        <td>
                            <a href="edit_page_prodi.php?id_prodi=<?php echo $data['id_prodi']; ?>" class="btn btn-primary">Edit</a>
                            <a href="del_prodi.php?id_prodi=<?php echo $data['id_prodi']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>