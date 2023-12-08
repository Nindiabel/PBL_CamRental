<!-- resources/views/barangs/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Accessoris dan Stabilizier</title>
    <link rel="stylesheet" href="{{asset('css/barang.create.css')}}">
</head>
<body>
    <h1>Tambah Accessoris dan Stabilizier</h1>
    <form action="{{ route('as.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <label for="accessoris_stabilizier">Nama Barang:</label>
        <input type="text" id="accessoris_stabilizier" name="accessoris_stabilizier">

        <label for="harga">Harga:</label>
        <input type="decimal" id="harga" name="harga">

        <label for="gambar">Gambar:</label>
        <input type="file" id="gambar" name="gambar">

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
        <a href="{{ route('as.index') }}" class="btn">Kembali</a>
    </form>
</body>
</html>
