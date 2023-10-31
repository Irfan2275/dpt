<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kecamatan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
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
                 <h3 class="text-center my-4">KECAMATAN</h3>
           
                 <table class="table table-striped " id="dataTable" style="text-align: center;">
                     <thead>
                         <tr>
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">ID</th>
                             {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE PROVINSI</th> --}}
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE KABUPATEN KOTA</th>
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE KECAMATAN</th>
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">NAMA </th>
                             <td style="border: 1px solid #9e9a9a; border-radius: 5px;">AKSI</th>
                         </tr>
                     </thead>
                     <tbody >
                     @foreach ($kecamatans as $kecamatan)
                     
                         <tr>
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kecamatan->id }}</td>
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kecamatan->kode_kabupaten_kota}}</td>
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kecamatan->kode_kecamatan }}</td>
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kecamatan->nama_kecamatan }}</td>
                         {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kecamatan->nama_dagri_kecamatan }}</td> --}}
                         <td style="border: 1px solid #9e9a9a; border-radius: 5px;">
                          <a href="{{ route('provinsi.desakel', ['kode_kecamatan'=> $kecamatan->kode_kecamatan]) }}" id="showButton" class="btn btn-sm btn-dark">DESA/KEL</a>
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

   
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
      <script>
       $('#dataTable').DataTable();
    </script>
  
  </body>
</html>