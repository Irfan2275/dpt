<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DPT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
</head>
  <style>
    body {
      background-color: seashell;
    }
    main.container {
      width: 15000px;
    }
  </style>
  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4" href="#">MAHADATA</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="#">Sign out</a>
        </div>
      </div>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-light sidebar collapse">
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
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="text-center my-4">DAFTAR PEMILIH TETAP</h3>

                <table class="table table-striped" id="dataTable" style="width:100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">ID</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">PROVINSI</th>
                            {{-- <th style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE DAPIL RI</th> --}}
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE KABUPATEN KOTA</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE KECAMATAN</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">DESA KELURAHAN</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">TPS</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">NAMA</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">JENIS KELAMIN</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">desa</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">USIA</th>
                            {{-- <th style="border: 1px solid #9e9a9a; border-radius: 5px;">RW</th> --}}
                            {{-- <th style="border: 1px solid #9e9a9a; border-radius: 5px;">RT</th> --}}
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">STATUS</th>
                            <th style="border: 1px solid #9e9a9a; border-radius: 5px;">AKSI</th> 
                        </tr>
                    </thead>
                    <tbody >
                   
                    </tbody>
                </table>
                {{-- <div class="d-flex ">
                  {!! $dpts->links() !!} --}}
                  {{-- <br><button class="btn btn-warning btn-sm ml-2" button onclick="history.back()">Go Back</button> --}}

            </div>
            </div>
            
            <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
<script src="dashboard.js"></script>
    <script>
       $(document).ready(function() {
       $('#dataTable').DataTable({
       processing: true,
       serverSide: true,
       ajax: "{{ route('dpt.index') }}",
       
            columns: [
                { data: 'id', name: 'id' },
                { data: 'kode_provinsi', name: 'kode_provinsi' },
                // { data: 'kode_dapil', name: 'kode_dapil' },
                { data: 'kode_kabupaten_kota', name: 'kode_kabupaten_kota' },
                { data: 'kode_kecamatan', name: 'kode_kecamatan' },
                { data: 'kode_desa_kelurahan', name: 'kode_desa_kelurahan', searchable: true },
                { data: 'kode_tps', name: 'kode_tps' },
                { data: 'nama', name: 'nama' },
                { data: 'jenis_kelamin', name: 'jenis_kelamin'},
                { data: 'desa_kelurahan', name: 'desa_kelurahan'},
                 { data: 'usia', name: 'usia'},
                // { data: 'rw', name: 'rw' },
                // { data: 'rt', name: 'rt' },
                {data: 'status', name: 'status'},
                { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
       });
      });
    </script>
</body>
</html>