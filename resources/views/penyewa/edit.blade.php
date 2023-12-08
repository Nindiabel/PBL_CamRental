<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('css/penyewa.edit.css')}}">
</head>
<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <h2 class="text-center my-4">EDIT DATA</h2>
        <div class="card p-4" style="width: 500px; height: auto; background: #f3e0e2">
            <form action="/penyewa/{{ $penyewa->id }}/update" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_penyewa">Nama Penyewa</label>
                    <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" required value={{ $penyewa->nama_penyewa }}
                </div><br>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required value={{ $penyewa->email  }}
                </div><br>
                <div class="form-group">
                    <label for="no_identitas">No Identitas</label>
                    <input type="number" class="form-control" id="no_identitas" name="no_identitas" required value={{ $penyewa->no_identitas  }}
                </div><br>
                <div class="form-group">
                    <label for="no_telephone">No Telephone</label>
                    <input type="number" class="form-control" id="no_telepon" name="no_telepon" value={{ $penyewa->no_telepon  }}
                </div><br>
                <div class="row text-center">
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('penyewa.index') }}" class="btn btn-warning ms-2">Kembali</a>
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
