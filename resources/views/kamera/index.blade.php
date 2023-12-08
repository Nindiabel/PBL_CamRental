<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Kamera</title>
    <link rel="stylesheet" href="{{asset('css/barang.index.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<script>
    function redirectToDataPenyewaForm() {
        window.location.href = "http://127.0.0.1:8000/penyewa"; 
      }
    function redirectToLoginPage() {
      // Redirect to the login page
      window.location.href = "http://127.0.0.1:8000/"; 
    }
</script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<body>
<header class="header">
      <div class="header-left">
        <p>RRC</p>
      </div>
      <div class="header-right">
        <span class="btn" onclick="redirectToLoginPage()">Logout </span>
      </div>
  </header>
<body>
<div class="grid-container">
      <!-- Sidebar -->
      <aside id="sidebar" class="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
          <img src="{{ asset('data_gambar/logo_rrc.jpg') }}" width="70" height="70" class="d-inline-block align-top" alt="Logo">
          </div>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
              <a href="http://127.0.0.1:8000/dashboard" onclick="redirectToDashboard()">
              <span class="material-icons-outlined">dashboard</span> Dashboard
              </a>
          </li>
          <li class="sidebar-list-item">
            <a href="javascript:void(0)" onclick="redirectToDataPenyewaForm()">
              <span class="material-icons-outlined">inventory_2</span> Data User
            </a>
          </li>
          <li class="sidebar-list-item" id="data-barang">
            <a href="javascript:void(0)" onclick="toggleSubMenu()">
            <span class="material-icons-outlined">fact_check</span> Data Barang
          </a>
          <ul class="submenu" style="display: none;" id="submenu-kamera">
          <li><a href="#" onclick="redirectToDataKamera()">Kamera</a></li>
          <li><a href="#" onclick="redirectToDataLensa()">Lensa</a></li>
          <li><a href="#" onclick="redirectToDataAccessorisStabilizier()">Aksesoris dan Stabilizer</a></li>
          <li><a href="#" onclick="">Paket Hemat</a></li>
        </ul>
      </li>
      <script>
      function redirectToDataKamera() {
        window.location.href = "http://127.0.0.1:8000/kamera"; 
      }
      </script>
      <script>
      function redirectToDataLensa() {
        window.location.href = "http://127.0.0.1:8000/lensa"; 
      }
      </script>
      <script>
      function redirectToDataAccessorisStabilizier() {
        window.location.href = "http://127.0.0.1:8000/accessorisstabilizier"; 
      }
      </script>

<script>
  function toggleSubMenu() {
    const submenu = document.querySelector('#submenu-kamera');
    if (submenu.style.display === 'none' || submenu.style.display === '') {
      submenu.style.display = 'block';
    } else {
      submenu.style.display = 'none';
    }
  }
</script>
          <li class="sidebar-list-item">
            <a href="javascript:void(0)" onclick="redirectToDataPenyewaForm()">
              <span class="material-icons-outlined">camera</span> Data Sewa
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">add_shopping_cart</span> Transaksi
            </a>
          </li>
        </ul>
      </aside>
    <div class="content">
      <div class="table-title">
        <div class="text" style="margin-left: 20px;">
          <h1>Data Kamera</h1>
          <a href="{{ route('kamera.create') }}" class="btn-tambah">Tambah +</a>
        </div>
      </div>
      <div class="container">
    <br><br>
    @if(count($dataKameras) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kelengkapan</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Status Ketersediaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataKameras as $dataKamera)
            <tr>
                <td>{{ $dataKamera->kamera }}</td>
                <td>{{ $dataKamera->kelengkapan }}</td>
                <td>{{ $dataKamera->harga_kamera }}</td>
                <td>
                   <img src="{{ asset('storage/' . $dataKamera->gambar_kamera) }}" alt="" srcset="" width="80" height="80">
                </td>
                <td>{{ $dataKamera->tanggal_mulai }}</td>
                <td>{{ $dataKamera->tanggal_berakhir }}</td>
                <td>{{ $dataKamera->status_ketersediaan }}</td>
                <td>
                    <a href="{{ route('kamera.edit', ['id' => $dataKamera->id]) }}" >
                        <img src="https://cdn.icon-icons.com/icons2/841/PNG/96/flat-style-circle-edit_icon-icons.com_66939.png" alt="Edit" class="logo-edit" >
                    </a>
                    <form action="{{ route('kamera.destroy',['id' => $dataKamera->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">
                            <img src="https://cdn.icon-icons.com/icons2/37/PNG/96/delete_4219.png" alt="Hapus" class="logo-delete">
                      </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
      <p>Data belum tersedia</p>
    @endif
    </div>
    </div>
</body>
</html>
