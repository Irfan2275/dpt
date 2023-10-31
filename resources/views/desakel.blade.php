<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>desa/kelurahan</title>
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
                 <h3 class="text-center my-4">DESA / KELURAHAN</h3>
           
                 <table class="table table-striped " id="dataTable" style="text-align: center;">
                     <thead>
                         <tr>
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">ID</th>
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE</th>
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">NAMA</th>
                             {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE DAGRI</th> --}}
                             {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">NAMA DAGRI</th> --}}
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">AKSI</th>
                         </tr>
                     </thead>
                     <tbody >
                     @foreach ($desa_kelurahans as $desa_kelurahan)
                     
                         <tr>
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $desa_kelurahan->id }}</td>
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $desa_kelurahan->kode_desa_kelurahan }}</td>
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $desa_kelurahan->nama_desa_kelurahan }}</td>
                         {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $desa_kelurahan->kode_dagri_desa_kelurahan }}</td> --}}
                         {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $desa_kelurahan->nama_dagri_desa_kelurahan }}</td> --}}
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">
                          <a href="{{ route('provinsi.tps', ['kode_desa_kelurahan'=> $desa_kelurahan->kode_desa_kelurahan]) }}" id="showButton" class="btn btn-sm btn-dark">TPS</a>
                         </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                     <br> <button class="btn btn-warning btn-sm" button onclick="history.back()">Go Back</button>
                    </div>
                    </div>
            </main>
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