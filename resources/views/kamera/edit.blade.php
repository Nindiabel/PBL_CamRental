<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="{{asset('css/barang.edit.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>
<style>
  .btn-primary {
display: inline-block;
padding: 10px 20px;
border: none;
border-radius: 5px;
background-color: #711212;
color: #fff;
text-align: center;
text-decoration: none;
transition: background-color 0.3s ease;
}

/* Hover pada tombol */
.btn-primary:hover {
background-color: #a30000;
}

/* Tombol Kembali */
.btn-warning {
display: inline-block;
padding: 10px 20px;
border: none;
border-radius: 5px;
background-color: #711212;
color: #fff;
text-align: center;
text-decoration: none;
transition: background-color 0.3s ease;
}

/* Hover pada tombol Kembali */
.btn-warning:hover {
background-color: #a30000;
}
</style>

<body class="bg-light">
    <div class="container">
        <h2 class="text-center my-4">Edit Barang</h2>
        <div class="card p-4" style="width: 500px; height: auto;  background: #f3e0e2">
        <form action="{{ route('kamera.update', ['id' => $dataKamera->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="kamera">Nama Barang</label>
                    <input type="text" class="form-control" id="kamera" name="kamera" required value="{{$dataKamera->kamera}}">
                </div><br>
                <div class="form-group">
                    <label for="kelengkapan">Kelengkapan</label>
                    <input type="text" class="form-control" id="kelengkapan" name="kelengkapan" required value="{{ $dataKamera->kelengkapan }}">
                </div><br>
                <div class="form-group">
                    <label for="harga_kamera">Harga</label>
                    <input type="number" step="any" class="form-control" id="harga_kamera" name="harga_kamera" required value="{{$dataKamera->harga_kamera}}" >
                </div><br>
                <div class="form-group">
                    <label for="gambar_kamera">Gambar</label>
                    <input type="file" class="form-control" id="gambar_kamera" name="gambar_kamera" required value="{{ $dataKamera->gambar_kamera }}">
                </div><br>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required value="{{ $dataKamera->tanggal_mulai}}">
                </div><br>
                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" required value="{{ $dataKamera->tanggal_berakhir }}">
                </div><br>
                <div class="form-group">
                    <label for="status_ketersediaan">Status Ketersediaan</label>
                    <select id="status_ketersediaan" name="status_ketersediaan" class="form-select">
                        <option value="tersedia" {{ $dataKamera->status_ketersediaan === 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="tidak tersedia" {{ $dataKamera->status_ketersediaan === 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select>
                </div><br>
                <div class="row text-center">
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn-primary">Simpan</button>
                        <a href="{{ route('kamera.index') }}" class="btn-warning">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
</body>

</html>
