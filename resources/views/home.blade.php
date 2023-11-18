<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
 crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <style>
    body {
      background-color: seashell;
    }
    .center-iframe {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; 
        }
  </style>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MAHADATA</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="{{ route('logout') }}">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="provinsi">
              <span data-feather="map"></span>
              WILAYAH
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="relawan">
              <span data-feather="user"></span>
              Relawan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dpt">
              <span data-feather="users"></span>
              DPT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dukungan">
              <span data-feather="user-check"></span>
              Dukungan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ormas">
              <span data-feather="layers"></span>
              Ormas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tps">
              <span data-feather="check-square"></span>
              TPS
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">HOME</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
        </div>
      </div>

      <h2> </h2>
      
  <div class="table-responsive">
    <div class="center-iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888917.0908590616!2d118.52125084975638!3d0.101521271822572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14710964d9c91%3A0xc4abb01d2fe376d7!2sKalimantan%20Timur!5e0!3m2!1sid!2sid!4v1698979005694!5m2!1sid!2sid" width="900" height="500" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    <div class="row">
      <h1 class="h3">HOME {{ $totalDpt }}</h1>
        @foreach ($kecamatanData as $data)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Kode Kecamatan: {{ $data['kode_kecamatan'] }}</h5>
                        <p class="card-text">Nama Kecamatan: {{ $data['nama_kecamatan'] }}</p>
                        <p class="card-text">Jumlah DPT: {{ $data['jumlah_dpt'] }}</p>
                        <p class="card-text">Jumlah desa: {{ $data['jumlah_desa_kelurahan'] }}</p>
                        <a href="{{ route('dpt.kecamatan', ['kode_kecamatan' => $data['kode_kecamatan'], 'nama_kecamatan' => $data['nama_kecamatan']]) }}" class="btn btn-primary">Lihat Tabel</a>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<br>
 

        </table>
      </div>
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
<script src="dashboard.js"></script>
  </body>
</html>
