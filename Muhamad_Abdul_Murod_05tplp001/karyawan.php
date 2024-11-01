<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="bootstrap.css" type="style/css">
<link rel="stylesheet" href="bootstrap.js">
    <head>
        <title>Sistem Informasi Manajemen Karyawan</title>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="karyawan.php">Data Karyawan</a>
      </div>
    </div>
  </div>
</nav>
    </head>
    <body>
    <form method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat">
  </div>
  <div class="mb-3">
    <label for="telepon" class="form-label">Nomor Telepon</label>
    <input type="text" class="form-control" id="telepon" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="jabatan" class="form-label">Jabatan</label>
    <input type="text" class="form-control" id="jabatan">
  </div>
  <div class="mb-3">
    <label for="divisi" class="form-label">Divisi</label>
    <input type="text" class="form-control" id="divisi" aria-describedby="">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </body>
</html>