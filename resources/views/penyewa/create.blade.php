<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Penyewa</title>
    <link rel="stylesheet" href="{{asset('css/penyewa.create.css')}}">
</head>
<body>
    <h1>Tambah Penyewa</h1>
    <form action="{{ route('penyewa.store') }}" method="POST">
        @csrf
        <input type="hidden" name="no" value="1">
        <div class="form-group">
            <label for="nama_penyewa">Nama Penyewa</label>
            <input type="text" id="nama_penyewa" name="nama_penyewa" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="no_identitas">No Identitas</label>
            <input type="number" id="no_identitas" name="no_identitas" required>
        </div>
        <div class="form-group">
            <label for="no_telephone">No Telephone</label>
            <input type="number" id="no_telepon" name="no_telepon">
        </div>
        <input type="submit" value="Submit" class="btn"> 
        <a href="{{ route('penyewa.index') }}" class="btn">Kembali</a>
    </form>
</body>
</html>
