<?php
require 'function.php';

$barang = query("SELECT * FROM barang");

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

        <section class="home"><br><br>
        <a href="2.1.EkonomiKreatif_Barang_addbarang.php"><button  type="button"class="btn btn-danger" >Tambah data barang</button></a>
        <br><br>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Description</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i =1;?>
                <?php foreach ($barang as $row) : ?>

                <tr>
                  <td><?= $i; ?></td>
                  <td><img src="img/<?= $row["gambar"];?>" width="50"></td>
                  <td><?= $row["namabarang"];?></td>
                  <td><?= $row["qty"];?></td>
                  <td><?= $row["harga"];?></td>
                  <td><?= $row["deskripsi"];?></td>
                  <td>
                    <a href="2.3.EkonomiKreatif_Barang_updatebarang.php?id=<?= $row["id"]; ?>"><button type="button"class="btn btn-warning">Update</button></a>
                  </td>
                  <td>
                    <a href="2.2.EkonomiKreatif_Barang_hapusbarang.php?id=<?= $row["id"]; ?>"><button type="button"class="btn btn-danger" onclick="return confirm('apakah anda yakin?')" >hapus</button></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach;?>
                
              </tbody>
            </table>
        </section>
        
        <script src="script.js"></script>

        
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>