<!-- resources/views/barangs/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kamera</title>
    <link rel="stylesheet" href="{{asset('css/barang.create.css')}}">
</head>
<body>
<div class="table-responsive">
    <h1>Tambah Kamera</h1>
    <form action="{{ route('kamera.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <label for="kamera">Nama Barang:</label>
        <input type="text" id="kamera" name="kamera">

        <label for="kelengkapan">Kelengkapan:</label>
        <input type="text" id="kelengkapan" name="kelengkapan">

        <label for="harga_kamera">Harga:</label>
        <input type="number" id="harga_kamera" name="harga_kamera">

        <label for="gambar_kamera">Gambar:</label>
        <input type="file" id="gambar_kamera" name="gambar_kamera">

        <label for="tanggal_mulai">Tanggal Mulai:</label>
        <input type="date" id="tanggal_mulai" name="tanggal_mulai">

        <label for="tanggal_berakhir">Tanggal Berakhir:</label>
        <input type="date" id="tanggal_berakhir" name="tanggal_berakhir">

        <label for="status_ketersediaan">Status Ketersediaan:</label>
        <select id="status_ketersediaan" name="status_ketersediaan">
            <option value="tersedia">Tersedia</option>
            <option value="tidak tersedia">Tidak Tersedia</option>
        </select>

        <input type="submit" value="Submit" class="btn"> 
        <a href="{{ route('kamera.index') }}" class="btn">Kembali</a>
    </form>
</div>
</body>
</html>