<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DPT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="dashboard.css" rel="stylesheet">
</head>

<form action="{{ route('dpt.update', ['id' => $dpt->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="text-center my-4">UBAH DATA</h3>
        
        <div class="form-group">
            <label class="font-weight-bold">ID</label>
            <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id', $dpt->id) }}" placeholder="Masukkan Nama Provinsi" readonly>
        
            <!-- error message untuk title -->
            @error('id')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label class="font-weight-bold">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $dpt->nama) }}" placeholder="Masukkan Nama Provinsi">
        
            <!-- error message untuk title -->
            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        

        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <select name="status" id="status" class="form-select single-select-field" data-placeholder="Pilih Status">
                <option value="">----- Choose Status -----</option>
                @foreach (App\Enums\StatusEnum::values() as $key=>$value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
    <button onclick="history.back()">Go Back</button>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
<script src="dashboard.js"></script>