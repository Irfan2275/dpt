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
  </style>
  <body>
   
            <h2> </h2>
            <main class="container">
       
                <!-- START DATA -->
         <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h1>Tabel DPT Desa Kelurahan {{ $nama_desa_kelurahan }}</h1>
            <table class="table table-striped " id="dataTable" style="text-align: left;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Kode kabkot</th>
                        <th>Kode Desa/Kelurahan</th>
                        <th>Desa/Kelurahan</th>
                        <th>TPS</th>
                        <th>Usia</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dpt as $index => $dpt)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $dpt->nama }}</td>
                            <td>
                            @if ($dpt->jenis_kelamin === \App\Enums\JenisKelaminEnum::PRIA) 
                                Laki-Laki
                            @elseif ($dpt->jenis_kelamin === \App\Enums\JenisKelaminEnum::WANITA)
                                Perempuan
                            @endif
                            </td>
                            <td>{{ $dpt->kode_kabupaten_kota }}</td>
                            <td>{{ $dpt->kode_desa_kelurahan }}</td>
                            <td>{{ $dpt->desa_kelurahan }}</td>
                            <td>{{ $dpt->kode_tps }}</td>
                            <td>{{ $dpt->usia }}</td>
                            <td>
                                @if ($dpt->status === \App\Enums\StatusEnum::BUKAN_PENDUKUNG)
                                    <span class="badge bg-danger">Bukan Pendukung</span>
                                @elseif ($dpt->status === \App\Enums\StatusEnum::PENDUKUNG)
                                    <span class="badge bg-success">Pendukung</span>
                                @elseif ($dpt->status === \App\Enums\StatusEnum::PENDING)
                                    <span class="badge bg-warning">Belum Diisi</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
       $('#dataTable').DataTable();
    </script>
  
  </body>
</html>