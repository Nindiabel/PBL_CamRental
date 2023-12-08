<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script>
      function redirectToDataPenyewaForm() {
        window.location.href = "http://127.0.0.1:8000/penyewa"; 
      }
    function redirectToLoginPage() {
      // Redirect to the login page
      window.location.href = "http://127.0.0.1:8000/"; 
    }
    </script>
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  </head>
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
      <!-- End Sidebar -->
      <!-- Main -->
      <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>
      <main class="main-container">
        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
                    <p class="text-primary">DATA USER</p>
                    <span class="material-icons-outlined text-blue">inventory_2</span>
                </a>
            </div>
            <span class="text-primary font-weight-bold"></span>
          </div>
          
          <div class="card">
            <div class="card-inner">
              <p class="text-primary">DATA BARANG</p>
              <span class="material-icons-outlined text-orange">fact_check</span>
            </div>
            <span class="text-primary font-weight-bold"></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">TRANSAKSI</p>
              <span class="material-icons-outlined text-green">add_shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold"></span>
          </div>
        </div>
        <div class="table-container">
    <table class="data-table">
      <thead>
        <tr>
          <th>Nama Barang</th>
          <th>Kelengkapan</th>
          <th>Harga</th>
          <th>Tanggal Mulai</th>
          <th>Tanggal Berakhir</th>
          <th>Status Ketersediaan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CANON EOS 650D</td>
          <td>Lensa Fix Youngnuo 55mm
              Strep Camera
              Baterai & Cas
              Memory SanDisk 16 GB
              Support Video Hd
              Touch Screen
          </td>
          <td>-6 jam : 60k
              -12 jam : 80k
              -24 jam : 100k
          </td>
          <td>05/12/2023</td>
          <td>8/12/2024</td>
          <td>Tersedia</td>
        </tr>
        <tr>
          <td>CANON EOS 700D</td>
          <td>Lensa Fix Cannon 50mm STM
              Strep Camera
              Baterai & Cas
              Tas Camera
              Memory SanDisk 16 GB
              Support Video Hd
              Touch Screen
          </td>
          <td>-6 jam : 60k
              -12 jam : 80k
              -24 jam : 100k
          </td>
          <td>05/12/2023</td>
          <td>8/12/2024</td>
          <td>Tersedia</td>
        </tr>
        <tr>
          <td>CANON EOS 60D</td>
          <td>Lensa Fix Cannon 50mm STM
              Strep Camera
              Baterai & Cas
              Tas Camera
              Memory SanDisk 16 GB
              Support Video Hd
              Touch Screen
          </td>
          <td>-6 jam : 60k
              -12 jam : 80k
              -24 jam : 100k
          </td>
          <td>05/12/2023</td>
          <td>8/12/2024</td>
          <td>Tersedia</td>
        </tr>
        <tr>
          <td>CANON EOS 1300D</td>
          <td>Lensa Fix Cannon 50mm STM F1.B
              Strep Camera
              Baterai & Cas
              Tas Camera
              Memory SanDisk 16 GB
              Support Video Hd
              Touch Screen
          </td>
          <td>-6 jam : 60k
              -12 jam : 80k
              -24 jam : 100k
          </td>
          <td>05/12/2023</td>
          <td>8/12/2024</td>
          <td>Tersedia</td>
        </tr>
        <tr>
          <td>CANON EOS 1100D</td>
          <td>Lensa Fix Cannon is 11
              Strep Camera
              Baterai & Cas
              Tas Camera
              Memory SanDisk 16 GB
              Support Video Hd
              Touch Screen
          </td>
          <td>-6 jam : 60k
              -12 jam : 80k
              -24 jam : 100k
          </td>
          <td>05/12/2023</td>
          <td>8/12/2024</td>
          <td>Tersedia</td>
        </tr>
        <tr>
          <td>CANON EOS 1200D</td>
          <td>Lensa Fix Cannon 50mm STM 
              Strep Camera
              Baterai & Cas
              Tas Camera
              Memory SanDisk 16 GB
              Support Video Hd
          </td>
          <td>-6 jam : 60k
              -12 jam : 80k
              -24 jam : 100k
          </td>
          <td>05/12/2023</td>
          <td>8/12/2024</td>
          <td>Tersedia</td>
        </tr>
      </tbody>
    </table>
  </div>

        <section class="sect2">
          
          <div class="introduction">

          </div>
        </section>
        <!-- <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Top 5 Products</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Purchase and Sales Orders</p>
            <div id="area-chart"></div>
          </div>

        </div> -->
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script> -->
    <!-- Custom JS -->
    <script src="{{asset('js/scripts.js')}}"></script>
  </body>
</html>