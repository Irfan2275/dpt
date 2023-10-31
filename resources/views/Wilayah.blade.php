<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="text-center my-4">PROVINSI</h3>
  
        <table class="table table-striped " id="dataTable" style="text-align: center;">
            <thead>
                <tr>
                    <td style="border: 1px solid #9e9a9a; border-radius: 5px;">ID</th>
                    <td style="border: 1px solid #9e9a9a; border-radius: 5px;">kode provinsi </th>
                    <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE kabkot</th>
                    {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE kecamatan</th> --}}
                    {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">KODE desakel</th> --}}
                    <td style="border: 1px solid #9e9a9a; border-radius: 5px;">nama</th>
                    {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">NAMA DAGRI</th> --}}
                    {{--<td style="border: 1px solid #9e9a9a; border-radius: 5px;">AKSI</th>  --}}
                </tr>
            </thead>
            <tbody >
            @foreach ($kabupaten_kota as $provinsi)
            
                <tr>
                <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $provinsi->id }}</td>
                <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $provinsi->kode_provinsi }}</td>
                <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $provinsi->kode_kabupaten_kota }}</td>
                {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $provinsi->district_code }}</td> --}}
                {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $provinsi->village_code }}</td> --}}
                <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $provinsi->nama_kabupaten_kota }}</td>
                {{-- <td style="border: 1px solid #9e9a9a; border-radius: 5px;">{{ $provinsi->nama_dagri_provinsi }}</td>
                <td style="border: 1px solid #9e9a9a; border-radius: 5px;">
                 <a href="{{ route('provinsi.kabkot', ['kode_dagri_provinsi'=> $provinsi->kode_dagri_provinsi]) }}" id="showButton" class="btn btn-sm btn-dark">KAB/KOTA</a>
                 </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {!! $location->links() !!} --}}
            {{-- <br> <button class="btn btn-warning btn-sm" button onclick="history.back()">Go Back</button> --}}
           </div>
</div>
