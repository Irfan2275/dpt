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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="javascript:history.back()">MAHADATA</a>
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
   
    <main class="text-center" >
      <div class="card" >
        <h2 class="fs-1 fw-bolder">
          {{$nama_kecamatan}}
        </h2>
      </div>
      <br>
  <div class="table-responsive">
    <div class="row">
        @foreach ($desakelurahanData as $data)
            <div class="col-md-3">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">Kode Desa Kelurahan: {{ $data['kode_desa_kelurahan'] }}</h5>
                        <p class="card-text">Nama Desa Kelurahan: {{ $data['nama_desa_kelurahan'] }}</p>
                        <p class="card-text">Jumlah DPT: {{ $data['jumlah_dpt'] }}</p>
                        <p class="card-text">Jumlah tps: {{ $data['jumlah_tps'] }}</p>
                        {{-- <p class="card-text">Jumlah tps 1: {{ $data['jumlah_tps1'] }}</p> --}}
                        <a href="{{ route('dpt.deskel', ['kode_desa_kelurahan' => $data['kode_desa_kelurahan'], 'nama_desa_kelurahan' => $data['nama_desa_kelurahan']]) }}" class="btn btn-primary">Lihat Tabel</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>

        </table>
        <a href="javascript:history.back()" class="btn btn-outline-secondary" style="margin-top: 10px; margin-bottom: 10px;">
          <img src="data:image/png;base64,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" alt="Logo" width="20" height="20" class="d-inline-block align-text-top">
          Kembali
        </a>
      </main>  
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
<script src="dashboard.js"></script>
  </body>
</html>
