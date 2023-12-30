<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <title> Ujung Landasan Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('assets/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>

<body>
@include('navbar') 
  <!--section home-->
    <section id="home" class="hero-section">
      <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
        <h1>UJUNG</h1>
        <h1>LANDASAN</h1>
      </div>
    </section>
    <!--section before about-->
    <section id="about">
      <div class="gambar1">
      </div>
    </section>

    <!--section about-->
    <section id="1"class="abouts">
      <div class="about1">

      </div>
      <div class="about2">

      </div>
    </section>
    <!-- <section id="2"class="about">
      <div class="divcon">
        <div style="margin-left: 10% ;">
          <h1>Tentang Kami</h1>
        </div>
        <div style="margin-right: 10%;">
          <h1>kanan </h1>
        </div>
      </div>
    </section> -->
    <!--section before dashboard-->
    <section id="dash">
      <div class="gambar2">

      </div>
    </section>



    <!--section listing home-->
    <section class="containerhome">
      <!-- <div class="service-wrapper"> -->
        <div class="service">
          <h1 class="Ourservice">Our Services</h1>
          <div class="cards">
            <div class="card">
              <h2 class="card-tetx">Convention Hall</h2>
                <p class="text1">Restaurant ujunglandasan Menyediakan convention hall yang berkapasistas lebih dari 100 orang
                  dapat digunakan untuk melakukan meeting maupun acara lainnya
                </p>
                <br>
                <br>
              <img class="image"src="{{ asset('assets/download.jpeg') }}" alt="convention hall">
            </div>
            <div class="card">
                <h2 class="card-tetx">Restaurant</h2>
                <p class="text1">Restaurant ujunglandasan Menyediakan convention hall yang berkapasistas lebih dari 100 orang
                  dapat digunakan untuk melakukan meeting maupun acara lainnya
                </p>
                <br>
                <br>
                <img class="image"src="{{ asset('assets/resto.jpg') }}" alt="convention hall">
            </div>
            <div class="card">
                <h2 class="card-tetx">Restaurant</h2>
                <p class="text1">Restaurant ujunglandasan Menyediakan convention hall yang berkapasistas lebih dari 100 orang
                  dapat digunakan untuk melakukan meeting maupun acara lainnya
                </p>
                <br>
                <br>
                <img class="image"src="{{ asset('assets/resto.jpg') }}" alt="convention hall">
            </div>
          </div>
        </div>
      </div>
      </section>

    <!-- <section  id="menu">
      <div class="gambar3">
        <div class="card-text">
          <p>Our Services</p>
        </div>
        <section id="1"class="dashboad">
          <div class="dash">
            <div class="cards">
              <div class="card">
                <i class="fa-brands fa-chromecast"></i>
                <h2>Convention Hall</h2>
                <p>Restaurant ujunglandasan Menyediakan convention hall yang berkapasistas lebih dari 100 orang
                  dapat digunakan untuk melakukan meeting maupun acara lainnya
                </p>
            </div>
              <div class="card">
                <i class="fa-brands fa-layer-group"></i>
                <h2>Restaurant</h2>
                <p>Restaurant ujunglandasan Menyediakan convention hall yang berkapasistas lebih dari 100 orang
                  dapat digunakan untuk melakukan meeting maupun acara lainnya
                </p>
            </div>
              <div class="card">
                <i class="fa-solid fa-user-group"></i>
                <h2>Food and Drink</h2>
                <p>Restaurant ujunglandasan Menyediakan convention hall yang berkapasistas lebih dari 100 orang
                  dapat digunakan untuk melakukan meeting maupun acara lainnya
                </p>
            </div>
          </div>
              </div>
            </div> -->

           
              <!-- <div class="card">
                <img src="{{ asset('assets/download.jpeg') }}" alt="convention hall">
                <div class="card-content">
                  <h3>Card 1</h3>
                  <p>convention hall bla bla bla bla 
                  </p>
                  <a href="" class="btn">Read More</a>
                </div>
              
            </div>
        
              <div class="card">
                <img src="{{ asset('assets/download.jpeg') }}" alt="convention hall">
                <div class="card-content">
                  <h3>Card 2</h3>
                  <p>convention hall bla bla bla bla ba
                  </p>
                  <a href="" class="btn">Read More</a>
                </div>
              </div>
          
           
              <div class="card">
                <img src="{{ asset('assets/download.jpeg') }}" alt="convention hall">
                <div class="card-content">
                  <h3>Card 3</h3>
                  <p>convention hall bla bla bla bla be
                  </p>
                  <a href="" class="btn">Read More</a>
                </div>
              </div>
            -->
        </section>
      </div>
    </section>
    <!--section before menu-->
    <section id="-menu">
      <div class="gambar1">
      </div>
    </section>

     <!--section menu-->
    <section class="menu-section">
      <div class="menu">
        <div class="right-menu">
        <h1 style="line-height: 1.8;color:white;">Our Menu <br>
            <span class="smaller-text">
                      Kami menyajikan berbagai macam hidangan laut, dari kepiting, kerang, udang,<br>
                      sampai dengan ikan. Kami juga berusaha untuk memastikan bahwa setiap pelanggan <br>
                      merasa nyaman dan puas dengan makanan yang disajikan. </span>
            <button  class="reservasi-button">Lihat Menu Kami</button>
          </h1>
        </div>
      </div>
    </section>
    <!--section before reservasi-->
    <section id="reservasi">
      <div class="gambar4">
      </div>
    </section>
    <!--section reservasi-->
    <section class="reservasi-section">
      <iframe style="width: 50%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2671539890116!2d116.13314967487135!3d-8.666123588198968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbc00738fe82d%3A0x37e6f67267832d3a!2sUjung%20Landasan%20Restaurant%20%2F%20U-Land%20Cafe!5e0!3m2!1sid!2sid!4v1701793150666!5m2!1sid!2sid"  frameborder="0"></iframe>
      <div class="reservasi">
        <div class="right-menu">
          <h1 style="line-height: 1.8;color:white;">Kontak <br>
            <span class="smaller-text">Dasan Tapen, Kec. Gerung</span>
            <span class="smaller-text">Kabupaten Lombok Barat, Nusa Tenggara Barat</span>
            <span style="margin-bottom:10px;" class="smaller-text"> 83363</span>
            <span style="margin-bottom:10px;" class="smaller-text">0812313941412</span>
            <button  class="reservasi-button">Reservasi Sekarang!</button>
          </h1>
        </div>
      </div>
    </section>
    <!--section sebelum footer-->
    <section id="about">
      <div class="gambar1">
      </div>
    </section>

    <!-- <section id= "14"class="menu">
      <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
        <h1>UJUNG</h1>
        <h1>LANDASAN</h1>
      </div>
    </section> -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



@include('footer')












      <!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
    <title>Ujung Landasan Restaurant</title>
</head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" id="id-navbar">
            <a class="navbar-brand" href="">Ujung Landasan Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservasi.html">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review.html">Masukan</a>
                    </li>
                </ul>
                <div>
                    <img src="{{ asset('assets/logo-ujunglandasan.png') }}" class="logo-navbar" alt="logo-ujunglandasan" width="100" height="100">
                </div>
            </div>
        </div>
    </nav>
    <section id="hero-index">
        <img src="../assets/background-image.JPG" class="image-home" alt="home-image">
        <br>
        <br>
        <br>
        <br>  
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('assets/logo-ujunglandasan.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                  <div class="col text-center" id="index-col">
                    <h1><b>Tentang</b></h1>
                    <div>
                      <p>Restoran ujung landasan didirikan pada tahun 2010 di Jalan Bypass Bandara Internasional Lombok km. 21, Giri Menang Gerung, Lombok Barat</p>
                      <button type="button" class="btn btn-warning text-center"><a href="about.html">Tentang Kami</a></button>
                    </div>
                  </div>
                  <div class="col text-center">
                    <img src="../assets/index-about.JPG" class="image-index-right" alt="about-index-image">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col text-center">
                    <img src="../assets/index-menu.png" class="image-index-left" alt="menu-index-image">
                  </div>
                  <div class="col text-center" id="index-col">
                    <h1><b>Menu</b></h1>
                    <div>
                      <p>
                        Menu makanan yang di tawarkan adalah kuliner khas Lombok. Dengan cita rasa yang otentik khas sasak yaitu pedas, gurih, dan 
                        cenderung berbumbu pekat, Restoran Ujung Landasan sendiri merekrut masyarakat setempat untuk menjadi chef khusus masakan khas 
                        sasak. Selain itu, konsep penyajian dan pelayanannya sangat kental dengan tradisi sasak dimana pramusaji menggunakan pakaian sasak
                        sehingga tamu yang datang bisa merasakan nuansa budaya sasak
                      </p>
                      <button type="button" class="btn btn-warning text-center"><a href="../assets/Menu Ujung Landasan.pdf" target="_blank">Lihat Menu Kami</a></button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-center" id="index-col">
                    <h1><b>Reservasi</b></h1>
                    <div>
                      <p>
                        Restoran Ujung Landasan menyediakan beberapa pilihan reservasi, yaitu
                        Lesehan dengan kapasitas 6 dan 12 orang,
                        Convention Hall dengan kapasitas 100 orang,
                        Wedding Hall dengan kapasitas 200 orang, dan
                        Meeting Room dengan kapasitas 60 orang
                      </p>
                      <button type="button" class="btn btn-warning text-center"><a href="reservasi.html">Reservasi Sekarang</a></button>
                    </div>
                  </div>
                  <div class="col text-center">
                    <img src="../assets/meeting-about.png" class="image-index-right" alt="about-index-image">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2671539890116!2d116.13314967487135!3d-8.666123588198968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbc00738fe82d%3A0x37e6f67267832d3a!2sUjung%20Landasan%20Restaurant%20%2F%20U-Land%20Cafe!5e0!3m2!1sid!2sid!4v1701793150666!5m2!1sid!2sid" class="image-index-left" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="col text-center" id="index-col">
                    <h1><b>Review</b></h1>
                    <div>
                      <p>
                        Restoran Ujung Landasan memiliki ulasan yang bagus terkait makanan, luas lahan, 
                        fasilitas, lokasi, dan lainnya. 
                      </p>
                      <button type="button" class="btn btn-warning text-center"><a href="review.html">Review Kami</a></button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <img src="../assets/logo-ujunglandasan.png" class="logo-navbar" alt="logo-ujunglandasan" width="100" height="100">
            <span>Ujung Landasan</span>
          </div>
          <div class="col" id="footer-col">
            <h6>Alamat</h6>
            <p>Jalan Bypass Bandara Internasional Lombok km. 21, Dasan Tapen, Kec. Gerung, Kabupaten Lombok Barat, Nusa Tenggara Barat. 83363</p>
          </div>
          <div class="col" id="footer-col">
            <h6>Kontak</h6>
            <img src="../assets/whatsapp-footer.png" class="footer-image" alt="footer-whatsapp" width="30" height="30">
            <span><a href="https://wa.me/+6282341497223" target="_blank">+6282341497223</a></span>
            <br>
            <img src="../assets/instagram-footer.png" class="footer-image" alt="footer-instagram" width="30" height="30">
            <span><a href="https://www.instagram.com/restoranujunglandasan/" target="_blank">@restoranujunglandasan</a></span>
          </div>
          <div class="col" id="footer-col">
            <h6>Waktu Operasional</h6>
            <p>Senin - Minggu</p>
            <br>
            <p>09.00 - 18.00</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> -->
