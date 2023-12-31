<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="listReservasi.css">
    <title>List Reservasi</title>
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
    <center>
        <div class="container">
            <h1>List Reservasi</h1>
            <br>

            @if($count_reservasi > 0)
                    <table  class="text-center" width=100% border="1" cellpadding="4">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Jumlah Orang</th>
                                <th>Tanggal Reservasi</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                    <tbody>

                    @foreach($reservasi as $row)
                    <tr>
                            <td>{{ $row['nama'] }}</td>
                            <td>{{ $row['no_telepon'] }}</td>
                            <td>{{ $row['jumlah_orang'] }} </td>
                            <td>{{ $row['tanggal_reservasi'] }}</td>
                            <td>{{ $row['catatan'] }}</td>
                            <td><a class="btn btn-primary" href="/admin/reservasi/{{ $row['id'] }}">Lihat Detail</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

            @else 
                <h2>Tidak Ada Data Dalam Tabel</h2>
            @endif
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>