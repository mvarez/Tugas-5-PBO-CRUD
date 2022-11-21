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
	<div class="container-fluid">
  		<form method="POST" action="process_add_mhs.php">
  			<div class="mb-3 row">
		    <label for="nim" class="col-sm-2 col-form-label">
		    	NIM
			</label>
		    <div class="col-sm-10">
		      <input type="number" name="nim" class="form-control" id="nim">
		    </div>
  		</div><div class="mb-3 row">
		    <label for="nama_mhs" class="col-sm-2 col-form-label">
		    	Nama
			</label>
		    <div class="col-sm-10">
		      <input type="text" name="nama_mhs" class="form-control" id="nama_mhs">
		    </div>
		</div><div class="mb-3 row">
		    <label for="jk" class="col-sm-2 col-form-label">
		    	Jenis Kelamin
			</label>
		    <div class="col-sm-10">
		    	<select id="jk" name="jk" class="form-select" >
				  <option selected>Jenis Kelamin</option>
				  <option value="Laki-laki">Laki-laki</option>
				  <option value="Perempuan">Perempuan</option>
				</select>
		    </div>
		    </div><div class="mb-3 row">
		    <label for="alamat" class="col-sm-2 col-form-label">
		    	Alamat
			</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
		    </div>
  		</div><div class="mb-3 row">
		    <label for="prodi" class="col-sm-2 col-form-label">
		    	Program Studi
			</label>
		    <div class="col-sm-10">
		      <input type="text" name="prodi" class="form-control" id="prodi">
		    </div>
		    </div><div class="mb-3 row">
		    <label for="foto" class="col-sm-2 col-form-label">
		    	Foto Mahasiswa
			</label>
		    <div class="col-sm-10">
		      <input class="form-control" type="file" name="foto" id="foto">
		    </div>
  		</div><div class="mb-3 row">
		    <label for="email" class="col-sm-2 col-form-label">
		    	Email
			</label>
		    <div class="col-sm-10">
		      <input type="text" name="email" class="form-control" id="email">
		    </div>
  		</div>

  		<div class="mb-3 row mt-4">
  			<div class="col">
  				<?php
  					if(isset($_GET['ubah'])){
  				?>
  					<button type="submit" name="aksi" value="edit" class="btn btn-primary">
		  				Save
		  			</button>
  				<?php
  					} else {
  				?>
		  			<button type="submit" name="aksi" value="add" class="btn btn-primary">
					  	Add
					</button>
				<?php
					}
				?>
  			<a href="index.php" type="button" class="btn btn-danger">
  				Cancel
  			</a>
  			</div>

  		</div>
  		</form>
	</div>
</body>
</html>