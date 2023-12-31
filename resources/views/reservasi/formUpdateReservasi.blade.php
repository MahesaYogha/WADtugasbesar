<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="formUpdateReservasi.css">
        <title>Detail Reservasi</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <div>
                <a href="/">
                    <img class="logo" src="{{ asset('assets/logo-ujunglandasan.png') }}" class="logo-navbar"
                    alt="logo-ujunglandasan" width="50" height="50">
                </a>
                </div>

                <a class="navbar-brand me-auto" href="#">Ujung Landasan</a>
                <a class="nav-link mx-lg-2" href="/login">Kembali</a>
            </div>
        </nav>
        <div class="row">
            <center>
                <h1>Perbarui Detail Reservasi</h1>
                <br>
                <div class="col">
                    <form action="/admin/reservasi/{{ $row->id }}/edit" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <br>
                            <input type="string" class="form-control" name="nama" id="nama" value="{{ $row->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon">No Telepon</label>
                            <br>
                            <input type="string" class="form-control" name="no_telepon" id="no_telepon" value="{{ $row->no_telepon  }}">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_orang">Jumlah Orang</label>
                            <br>
                            <input type="number" class="form-control" name="jumlah_orang" id="jumlah_orang" min="1" value="{{ $row->jumlah_orang }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_reservasi">Tanggal Reservasi</label>
                            <br>
                            <input type="date" class="form-control" name="tanggal_reservasi" id="tanggal_reservasi" value="{{ $row->tanggal_reservasi }}">
                        </div>
                        <div class="mb-3">
                            <label for="catatan">Catatan</label>
                            <br>
                            <textarea type="string" class="form-control" name="catatan" id="catatan" rows="5">{{ $row->catatan }}</textarea>
                        </div>
                        <button type="submit" name="update" id="update" class="btn btn-warning"><a href="admin/reservasi">Edit</a></button>
                    </form>
                </div>
            <center>
        </div>
    </body>
</html>