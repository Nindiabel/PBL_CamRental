<!-- resources/views/barangs/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lensa</title>
    <link rel="stylesheet" href="{{asset('css/barang.create.css')}}">
</head>
<body>
    <h1>Tambah Lensa</h1>
    <form action="{{ route('lensa.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <label for="lensa">Nama Barang:</label>
        <input type="text" id="lensa" name="lensa">

        <label for="harga_lensa">Harga:</label>
        <input type="decimal" id="harga_lensa" name="harga_lensa">

        <label for="gambar_lensa">Gambar:</label>
        <input type="file" id="gambar_lensa" name="gambar_lensa">

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
        <a href="{{ route('lensa.index') }}" class="btn">Kembali</a>
    </form>
</body>
</html>
