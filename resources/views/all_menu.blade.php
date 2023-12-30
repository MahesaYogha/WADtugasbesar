<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <title> Ujung Landasan Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('assets/index.css') }}" rel="stylesheet">
</head>

<body class="bg-white">
    @include('navbar')
    <!--section home-->
    <div class="container">
        <section style="margin-top: 200px">


            <div class="row">
                <div class="col-lg-4 mb-2">
                    <img src="{{ asset('/') }}storage/{{ $menu_one->gambar_menu }}" alt="" width="100%">
                </div>
                <div class="col-lg-8 d-flex align-items-center justify-content-center text-center">
                    <div>
                        <h1 class="mb-3" style="font-size: 50px">OUR SIGNATURE DISH</h1>
                        <p style="font-size: 20px">
                            <?php foreach ($all_menu as $produk) : ?>
                            <?php echo $produk->nama_menu . ', '; ?>
                            <?php endforeach; ?>
                        </p>
                    </div>
                </div>

            </div>

        </section>

        <section class="mt-5">


            <div class="row gx-5 gy-5">

                @foreach ($all_menu as $item)
                <div class="col-lg-3">
                    <img src="{{ asset('/') }}storage/{{ $item->gambar_menu }}" alt="" class="img-fluid"
                        style="width: 100%; height: 250px;">
                </div>
                @endforeach

            </div>
             
            <br>
            <center>
                <a class="btn btn-warning" href="{{ asset('assets/Menu Ujung Landasan.pdf') }}" target= "_blank">Menu Selengkapnya</a>
            </center>


        </section>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>



    {{-- @include('footer') --}}