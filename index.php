<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!----======= CSS =======-->
        <link rel="stylesheet" href="style.css">

        <!----======= Boxicons CSS =======-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>EkonomiKreatif_Home</title>
    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <a href="1.EkonomiKreatif_Home.php">
                            <img src="Picture/LogoSementara.png" alt="LogoSementara">
                        </a>
                    </span>

                    <div class="text header-text">
                        <span class="name">Ekraf Shop</span>
                        <span class="profession">Belanja mudah</span>
                    </div>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <i class='bx bx-search icon' ></i>
                            <input type="search" placeholder="Search...">
                    </li>
                    <li class="nav-link">
                        <a href="2.EkonomiKreatif_Barang.php">
                            <i class='bx bxs-briefcase icon'></i>
                            <span class="text nav-text">Barang</span>
                        </a>
                    </li>
                </div>

                
                <div class="bottom-content">
                    <li class="profile">
                        <a href="6.2.EkonomiKreatif_Login.php">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>
                    <li class="mode">
                        <div class="moon-sun">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark Mode</span>
                        
                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>

                    </li>
                </div>
            </div>
        </nav>

        <section class="home">
            <div class="text">Dashboard</div>
            <div id="Beranda_Carousel" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#Beranda_Carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#Beranda_Carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#Beranda_Carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#Beranda_Carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active bc-item">
                    <img src="Picture/Foto produk/1.Fashion/WPP_Fashion.jpg" class="d-block w-100 bc-img" alt="Slide 1">
                    <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                      <p style="color: white;" class="mt-5 fs-3 text-uppercase">50% OFF </p>
                      <h1 style="color: white;" class="display-1 fw-bolder text-capitalize">Find Yourself Today</h1>
                      <a href="2.EkonomiKreatif_Fashion.php" class="btn btn-primary px-4 py-2 fs-5 mt-3">Fashion</a>
                    </div>
                  </div>
                  <div class="carousel-item bc-item">
                    <img src="Picture/Foto produk/2.Elektronik/WPP_Elektronik.jpg" class="d-block w-100 bc-img" alt="Slide 2">
                    <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                      <p style="color: white;" class="mt-5 fs-3 text-uppercase">50% OFF</p>
                      <h1 style="color: white;" class="display-1 fw-bolder text-capitalize">Pro Setup For Gamers</h1>
                      <a href="3.EkonomiKreatif_Elektronik.php" class="btn btn-primary px-4 py-2 fs-5 mt-3">Gadget</a>
                    </div>
                  </div>
                  <div class="carousel-item bc-item">
                    <img src="Picture/Foto produk/3.Olahragahobi/WPP_Hobi&Olahraga.jpg" class="d-block w-100 bc-img" alt="Slide 3">
                    <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                      <p style="color: white;" class="mt-5 fs-3 text-uppercase">50% OFF</p>
                      <h1 style="color: white;"class="display-1 fw-bolder text-capitalize">Be Much More Than Before</h1>
                      <a href="4.EkonomiKreatif_Hobi&Olahraga.php" class="btn btn-primary px-4 py-2 fs-5 mt-3">Olahraga & Hobi</a>
                    </div>
                  </div>
                  <div class="carousel-item bc-item">
                    <img src="Picture/Foto produk/4.Kesehatankecantikan/WPP_Kesehatan&Kecantikan.jpg" class="d-block w-100 bc-img" alt="Slide 4">
                    <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                      <p style="color: white;" class="mt-5 fs-3 text-uppercase">50% OFF</p>
                      <h1 style="color: white;"class="display-1 fw-bolder text-capitalize">You Are Important For Us</h1>
                      <a href="5.EkonomiKreatif_Kesehatan.php" class="btn btn-primary px-4 py-2 fs-5 mt-3">Kesehatan</a>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#Beranda_Carousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#Beranda_Carousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> 
              </div><br>
              <div class="container">
                  <div class="row gy-5">
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/1.Fashion/blazer.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Biru</h5>
                        <p class="card-text">Topi berwarna biru terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp100.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/1.Fashion/hoodie.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Kupluk Abu-abu</h5>
                        <p class="card-text">Kupluk berwarna abu-abu terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp150.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/1.Fashion/kemeja.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Gunung</h5>
                        <p class="card-text">Topi gunung berwarna abu-abu tahan air dan angin<br>
                          <b>Rp200.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/1.Fashion/sepatu.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/1.Fashion/celana.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/2.Elektronik/flashdisk.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Biru</h5>
                        <p class="card-text">Topi berwarna biru terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp100.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/2.Elektronik/headphone.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Kupluk Abu-abu</h5>
                        <p class="card-text">Kupluk berwarna abu-abu terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp150.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/2.Elektronik/keyboard.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Gunung</h5>
                        <p class="card-text">Topi gunung berwarna abu-abu tahan air dan angin<br>
                          <b>Rp200.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/2.Elektronik/mouse.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/2.Elektronik/tws.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/3.Olahragahobi/badminton.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Biru</h5>
                        <p class="card-text">Topi berwarna biru terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp100.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/3.Olahragahobi/basket.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Kupluk Abu-abu</h5>
                        <p class="card-text">Kupluk berwarna abu-abu terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp150.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/3.Olahragahobi/lukis.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Gunung</h5>
                        <p class="card-text">Topi gunung berwarna abu-abu tahan air dan angin<br>
                          <b>Rp200.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/3.Olahragahobi/skateboard.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/3.Olahragahobi/tenis.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/4.Kesehatankecantikan/blush.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Biru</h5>
                        <p class="card-text">Topi berwarna biru terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp100.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/4.Kesehatankecantikan/liptint.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Kupluk Abu-abu</h5>
                        <p class="card-text">Kupluk berwarna abu-abu terbuat dari kain berbahan katun berkualitas<br>
                          <b>Rp150.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/4.Kesehatankecantikan/moist.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Gunung</h5>
                        <p class="card-text">Topi gunung berwarna abu-abu tahan air dan angin<br>
                          <b>Rp200.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/4.Kesehatankecantikan/sabun.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card h-100">
                        <img src="Picture/Foto produk/4.Kesehatankecantikan/sunscreen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Topi Rimba</h5>
                        <p class="card-text">Topi rimba berwarna hijau dengan tali yang dapat diatur<br>
                          <b>Rp75.000</b>
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


        </section>
        
        <script src="script.js"></script>

        
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>