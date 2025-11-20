<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory Lab Komputer</title>
  <link href="assets/tampil.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <!-- Header -->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3 d-flex d-lg-none" onclick="toggleSidebar()">
          <i class="bi bi-list"></i>
        </div>
        <div class="navbar-brand">
          <h5 class="mb-0">Inventory Lab Komputer</h5>
        </div>
        <form class="searchbar" onsubmit="searchItems(event)">
          <input id="searchInput" class="form-control" type="text" placeholder="Cari barang...">
          <div class="search-icon"><i class="bi bi-search"></i></div>
        </form>
        <div class="top-navbar-right ms-auto">
          <ul class="navbar-nav align-items-center gap-1">
            <li class="nav-item dark-mode d-none d-sm-flex">
              <a class="nav-link dark-mode-icon" href="javascript:;" onclick="toggleDarkMode()">
                <div class=""><i class="bi bi-moon-fill"></i></div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">
                <i class="bi bi-bell-fill"></i>
              </a>
            </li>
            <div class="dropdown dropdown-user-setting">
              <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center gap-3">
                  <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="" style="width: 40px; height: 40px; border-radius: 50%;">
                  <div class="d-none d-sm-block">
                    <p class="user-name mb-0">Admin Lab</p>
                    <small class="mb-0 dropdown-user-designation">Manager</small>
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar-wrapper" id="sidebar">
      <div class="sidebar-header">
        <div><img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon" style="width: 30px; height: 30px;"></div>
        <div><h4 class="logo-text">Lab Kom</h4></div>
        <div class="toggle-icon ms-auto" onclick="toggleSidebar()"><i class="bi bi-list"></i></div>
      </div>
      <ul class="metismenu" id="menu">
        <li><a href="#" onclick="showPage('dashboard')" class="active"><i class="bi bi-house-door"></i> Dashboard</a></li>
        <li><a href="#" onclick="showPage('inventory')"><i class="bi bi-box-seam"></i> List Barang</a></li>
        <li><a href="#" onclick="showPage('loans')"><i class="bi bi-clipboard-data"></i> List Pinjaman</a></li>
        <li><a href="#" onclick="showPage('reports')"><i class="bi bi-bar-chart"></i> Reports</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="page-content" id="mainContent">
      <!-- Dashboard -->
      <div id="dashboard" class="page">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard Lab Komputer</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="#" onclick="showPage('dashboard')"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="bi bi-pc-display fs-1 text-primary"></i>
                <h5 class="mt-2">Total Barang</h5>
                <p class="mb-0" id="totalItems">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="bi bi-exclamation-triangle fs-1 text-warning"></i>
                <h5 class="mt-2">Stok Rendah</h5>
                <p class="mb-0" id="lowStock">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="bi bi-arrow-repeat fs-1 text-success"></i>
                <h5 class="mt-2">Pinjaman Hari Ini</h5>
                <p class="mb-0" id="loansToday">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="bi bi-check-circle fs-1 text-info"></i>
                <h5 class="mt-2">Barang Tersedia</h5>
                <p class="mb-0" id="availableItems">0</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Inventory -->
      <div id="inventory" class="page" style="display: none;">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">List Barang Lab Komputer</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="#" onclick="showPage('dashboard')"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">List Barang</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h5 class="mb-0">Daftar Barang</h5>
            <button class="btn btn-primary" onclick="openAddModal()">Tambah Barang</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="inventoryTable" class="table table-striped">
                <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Supplier</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="inventoryBody"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Loans -->
      <div id="loans" class="page" style="display: none;">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">List Pinjaman</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="#" onclick="showPage('dashboard')"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">List Pinjaman</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Daftar Pinjaman</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nama Peminjam</th>
                    <th>Barang</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody id="loansBody">
                  <tr>
                    <td>Ahmad</td>
                    <td>Laptop Dell</td>
                    <td>2023-10-01</td>
                    <td>2023-10-05</td>
                    <td>Dikembalikan</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Reports -->
      <div id="reports" class="page" style="display: none;">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Reports</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="#" onclick="showPage('dashboard')"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Reports</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p>Fitur reports akan dikembangkan lebih lanjut. Untuk sekarang, lihat statistik di Dashboard.</p>
          </div>
        </div>
      </div>
    </main>

    <!-- Modal Tambah/Edit Barang -->
    <div class="modal fade" id="itemModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle">Tambah Barang</h5>
            <button type="button" class="btn-close" onclick="closeModal()"></button>
          </div>
          <div class="modal-body">
            <form id="itemForm">
              <div class="mb-3">
                <label for="itemName" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="itemName" required>
              </div>
              <div class="mb-3">
                <label for="itemCategory" class="form-label">Kategori</label>
                <select class="form-control" id="itemCategory" required>
                  <option value="PC">PC</option>
                  <option value="Laptop">Laptop</option>
                  <option value="Monitor">Monitor</option>
                  <option value="Keyboard">Keyboard</option>
                  <option value="Mouse">Mouse</option>
                  <option value="Printer">Printer</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="itemStock" class="form-label">Stok</label>
                <input type="number" class="form-control" id="itemStock" required>
              </div>
              <div class="mb-3">
                <label for="itemPrice" class="form-label">Harga</label>
                <input type="number" class="form-control" id="itemPrice" required>
              </div>
              <div class="mb-3">
                <label for="itemSupplier" class="form-label">Supplier</label>
                <input type="text" class="form-control" id="itemSupplier" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="closeModal()">Batal</button>
            <button type="button" class="btn btn-primary" onclick="saveItem()">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Overlay dan Back to Top -->
    <div class="overlay nav-toggle-icon" onclick="toggleSidebar()"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/script.js"></script>
</body>
</html>