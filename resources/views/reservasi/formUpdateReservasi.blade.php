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
            <div class="container-fluid" id="id-navbar">
                <a class="navbar-brand" href="/home">Ujung Landasan Restaurant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/reservasi/create">Reservasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/reservasi">Lihat Reservasi</a>
                        </li>
                    </ul>
                </div>
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