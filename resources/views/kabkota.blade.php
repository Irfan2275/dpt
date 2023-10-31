<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->

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
           <h3 class="text-center my-4">KABUPATEN / KOTA </h3>
     
           <table class="table table-striped " id="dataTable" style="text-align: center;">
               <thead>
                   <tr>
                       <td style="border: 1px solid #9e9a9a; border-radius: 5px;">ID</th>
                       <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE PROVINSI</th>
                       {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">NAMA p</th> --}}
                       <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE KABUPATEN KOTA</th>
                       <td style="border: 1px solid #9e9a9a; border-radius: 5px;">NAMA</th>
                       <td style="border: 1px solid #9e9a9a; border-radius: 5px;">AKSI</th>
                   </tr>
               </thead>
               <tbody >
               @foreach ($kabupaten_kotas as $kabupaten_kota)
               
                   <tr>
                   <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kabupaten_kota->id }}</td>
                   <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kabupaten_kota->kode_provinsi }}</td>
                   <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kabupaten_kota->kode_kabupaten_kota }}</td>
                   {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kabupaten_kota->kode_dagri_kabupaten_kota }}</td> --}}
                   <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $kabupaten_kota->nama_kabupaten_kota }}</td>
                   <td style="border: 1px solid #9e9a9a; border-radius: 5px;">
                     {{-- <a href="{{ route('provinsi.kecamatan', ['kode_kabupaten_kota'=> $kabupaten_kota->kode_kabupaten_kota]) }}" class="btn btn-sm btn-warning">EDIT</a> --}}
                     <a href="{{ route('provinsi.kecamatan', ['kode_kabupaten_kota'=> $kabupaten_kota->kode_kabupaten_kota]) }}" id="showButton" class="btn btn-sm btn-dark">KECAMATAN</a>
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