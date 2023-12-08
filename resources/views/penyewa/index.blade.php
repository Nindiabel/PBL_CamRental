<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Data User</title>
    <link rel="stylesheet" href="{{asset('css/penyewa.index.css')}}">
    <link rel="stylesheet" href="{{asset('css/penyewa.css')}}">
</head>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.querySelector('.logo-link');

    backButton.addEventListener('click', function(event) {
      event.preventDefault(); 

      window.location.href = "http://127.0.0.1:8000/dashboard"; 
    });
  });
</script>
<script>
        // Fungsi untuk menampilkan pesan konfirmasi saat tombol hapus ditekan
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus data ini?');
        }

        // Mendapatkan semua tombol hapus dengan class btn-danger
        const deleteButtons = document.querySelectorAll('.btn-danger');

        // Menambahkan event listener untuk setiap tombol hapus
        deleteButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                // Mencegah aksi default dari tombol submit
                event.preventDefault();

                // Menampilkan konfirmasi sebelum menghapus
                if (confirmDelete()) {
                    // Jika dikonfirmasi, submit form
                    event.target.parentElement.submit();
                }
            });
        });
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
        <div class="text" style="margin-left: 60px;">
          <h1>Data User</h1>
          <a href="{{ route('penyewa.create') }}" class="btn btn-primary btn-tambah">Tambah +</a>
        </div>
    </div>
    <div class="container">
      <table class="table">
          <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama_Penyewa</th>
                <th class="text-center">Email</th>
                <th class="text-center">No_identitas</th>
                <th class="text-center">No_telephone</th>
                <th class="text-center">Action</th>
            </tr>
          </thead>
            <tbody>
                @forelse ($penyewas as $penyewa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penyewa->nama_penyewa }}</td>
                        <td>{{ $penyewa->email }}</td>
                        <td>{{ $penyewa->no_identitas }}</td>
                        <td>{{ $penyewa->no_telepon }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('penyewa.destroy', $penyewa->id) }}" method="POST">
                                <a href="{{ route('penyewa.edit', $penyewa->id) }}" >
                                  <img src="https://cdn.icon-icons.com/icons2/841/PNG/96/flat-style-circle-edit_icon-icons.com_66939.png" alt="Edit" class="logo-edit" >
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                  <img src="https://cdn.icon-icons.com/icons2/37/PNG/96/delete_4219.png" alt="Hapus" class="logo-delete">
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center"> Data belum tersedia</td>
                </tr>
                @endforelse
            </tbody>
        </thead>
      </table>
    </div>
    </div>

    <script src="path_to_your_bootstrap_js/bootstrap.min.js"></script>
    @if(session()->has('success'))
    <script>alert('{{ session("success") }}')</script>
    @endif    
</html>
