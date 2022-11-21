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
	<nav class="navbar bg-light mb-3">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      DATABASE MAHASISWA
	    </a>
	  </div>
	</nav>
	<div class="content">
        <div class="container">
            <h3>Data Mahasiswa</h3>
                        <form method="POST" action="proses_update_mhs.php">
                <?php
                $i = 1;
                while ($data_mhs = mysqli_fetch_assoc($sql)) {
                ?>
                    <input type="hidden" value="<?php echo $data_mhs['id_mhs']; ?>" name="id_mhs">
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="number" class="form-control" value="<?php echo $data_mhs['nim']; ?>" name="nim" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $data_mhs['nama_mhs']; ?>" name="nama_mhs" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jk" aria-label="Default select example">
                            <?php
                            $query_jk = "SELECT * FROM tbl_jk";
                            $sql_jk = mysqli_query($conn, $query_jk);
                            while ($data_jk = mysqli_fetch_assoc($sql_jk)) {
                            ?>
                                <option value="<?php echo $data_jk['id_jk']; ?>"><?php echo $data_jk['nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $data_mhs['alamat']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <select class="form-select" name="prodi" aria-label="Default select example">
                            <?php
                            $query_prodi = "SELECT * FROM tbl_prodi";
                            $sql_prodi = mysqli_query($conn, $query_prodi);
                            while ($data_prodi = mysqli_fetch_assoc($sql_prodi)) {
                            ?>
                                <option value="<?php echo $data_prodi['id_prodi']; ?>"><?php echo $data_prodi['nama_prodi']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" value="<?php echo $data_mhs['email']; ?>" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                <?php } ?>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>