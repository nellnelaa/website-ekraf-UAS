<?php
require 'function.php';

// ambil data
$id = $_GET["id"];

$brg = query("SELECT * FROM barang WHERE id= $id")[0];
?>

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

        <title>EkonomiKreatif_Ubah data barang</title>
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
                        <span class="profession">Jawaban Anda</span>
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
            <div 
            class="container-profile-profile">
                <div class="title">Ubah barang</div>
                <?php
            if (isset($_POST["ubahbarang"])){

                // cek data berhasil masuk apa engga
                if(ubahbarang ($_POST) > 0){
                    echo "<script>
                        alert('Data berhasil dirubah');
                        document.location.href = '2.EkonomiKreatif_Barang.php';
                    </script>";
                } else {
                    echo "<script>
                        alert('Data gagal dirubah');
                        document.location.href = '2.EkonomiKreatif_Barang.php';
                    </script>";
                }
            }
            ?>
                <form action="" method="post">
                    <div class="user-details">
                        <input type="hidden" name="id" value="<?= $brg["id"];?>">
                        <div class="input-box">
                            <span class="details">Gambar</span>
                            <input type="text" name="gambar"  value="<?= $brg["gambar"]; ?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Nama Barang</span>
                            <input type="text" name="namabarang" value="<?=$brg["namabarang"]; ?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Jumlah</span>
                            <input type="text" name="qty" value="<?=$brg["qty"]; ?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Harga Barang</span>
                            <input type="text" name="harga" value="<?=$brg["harga"]; ?>">
                        </div>
                        <div class="input-bio">
                            <span class="details">Description</span>
                            <input type="text" name="deskripsi" required="<?=$mhs["deskkripsi"]; ?>">
                        </div>
                        <div class="actions">
                            <button type="submit" name="ubahbarang" >Submit</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <script src="script.js"></script>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>