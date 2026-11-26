<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anggota</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(to right, #06e99d, #06e99d);
        }
        .sidebar {
            min-height: calc(100vh - 56px);
            width: 240px;
            background-color: #06e99d;
            color: rgb(0, 0, 0);
        }
        .sidebar a {
            color: rgb(0, 0, 0);;
            text-decoration: none;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
            font-size: 16px;
            border-radius: 4px;

        }
        .sidebar a i {
        width: 22px;
        text-align: center;
        }
        .sidebar a:hover {
            background: linear-gradient(to right, #8fdee4, #13d123);
        }
        .sidebar a.active {
            background: linear-gradient(to right, #8fdee4, #13d123);
        }
        
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
       

            <a class="navbar-brand fw-bold text-black d-flex align-items-center gap-2"  <div class="container-fluid">
                  <div style="width:55px; height:55px; border-radius:50%; overflow:hidden;">
        <img src="WhatsApp Image 2026-10-20 at 18.41.41.jpeg"
             style="width:100%; height:100%; object-fit:cover; transform:scale(1.1);"
             alt="Logo Aizetsu">
      </div><strong> Agenda Kegiatan Organisasi Mahasiswa</strong></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                
            </button>
            <input class="form-control" type="search" name="cari" id="cari" list="saran"
                 placeholder="Cari kategori..." aria-label="Cari kegiatan" autocomplete="off">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white me-2" href="#"><i class="fas fa-bell"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-1"></i> Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profil Saya</a></li>
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="login.HTML">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-3">
            <h5 class="fw-bold mb-3"><i class="fas fa-bars me-2"></i>Menu</h5>
            <ul class="nav flex-column gap-1">
                <li class="nav-item">
                    <a  href="dashboard.html"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a  href="Kategori.html"><i class="fas fa-box me-2"></i> Kategori</a>
                </li>
                <li class="nav-item">
                    <a href="kegiatan.html"><i class="fas fa-calendar-alt me-2"></i> Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a href="Laporan.html"><i class="fas fa-clipboard-list me-2"></i> Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="active" href="anggota.html"><i class="fas fa-users me-2"></i> Anggota</a>
                </li>
                <li class="nav-item">
                    <a href="kelolapeserta.html"><i class="fas fa-user-check me-2"></i> Kelola Peserta</a>
                </li>
                <li class="nav-item">
                    <a href="about.htmL"><i class="fas fa-store me-2"></i> About</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agenda Kegiatan Organisasi Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    :root { --bs-primary: #2b3a8c; --bs-primary-rgb: 43,58,140; --teal: #1f9d8a; }
    body { background: #f3f5fa; font-family: "Segoe UI", system-ui, sans-serif; }
    .btn-primary { --bs-btn-bg:#2b3a8c; --bs-btn-border-color:#2b3a8c; --bs-btn-hover-bg:#222f72; --bs-btn-hover-border-color:#222f72; --bs-btn-active-bg:#1c275f; }
    .page-head { background: #2b3a8c; color: #fff; border-radius: .75rem; }
    .stat-icon { width: 46px; height: 46px; border-radius: .6rem; display: grid; place-items: center; font-size: 1.3rem; }
    .date-box { min-width: 64px; text-align: center; border-radius: .6rem; background: #eef0fa; color: #2b3a8c; padding: .5rem .25rem; line-height: 1.1; }
    .date-box .d { font-size: 1.5rem; font-weight: 700; }
    .agenda-item { border-left: 4px solid var(--c, #2b3a8c); }
    .nav-pills .nav-link { color: #2b3a8c; }
    .nav-pills .nav-link.active { background: #2b3a8c; color: #fff; }
  </style>
</head>
<body>


<!-- MAIN CONTENT -->
<main class="container py-4">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kategori Kegiatan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- MAIN CONTENT: ANGGOTA -->
<main class="container py-4">

  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
    <div class="d-flex align-items-center gap-2">
        <i class="bi bi-people-fill fs-3"></i>
        <div>
            <h1 class="h4 fw-bold mb-0">Anggota</h1>
            <small class="text-muted">Data Anggota Organisasi</small>
        </div>
    </div>
    <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
    <i class="bi bi-plus-lg me-1"></i>Tambah Anggota
    </button>
  </div>

  <div class="card border-0 shadow-sm">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
           <tr>
<th scope="col">NO</th>
<th scope="col">NIM</th>
<th scope="col">NAMA</th>
<th scope="col">JABATAN</th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM anggota");
$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['nim']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['jabatan']; ?></td>
<td>
</td>
</tr>
<?php
}
?>

<!-- MODAL TAMBAH ANGGOTA -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDatalabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <form action="tambah_anggota.php" method="POST">
      <div class="modal-header">
        <h2 class="modal-title h5" id="tambahDataLabel">Tambah Anggota</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anggota" required>
        </div>
        <div class="mb-3">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input type="text" class="form-control" id="jabatanAnggota" name="jabatan" placeholder="Masukkan jabatan mahasiswa" required>
        </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Anggota</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</tbody>
</table>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>