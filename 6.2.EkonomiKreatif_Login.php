<?php

require 'function.php';

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1) {

    // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ){
            header("Location: 6.3.EkonomiKreatif_Profile.php");
            exit;
        }
    }
    $error = true;
}
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

        <section class="home">
            

            <div class="form-popup" id="account">
                <class class="form-box">
                    <div class="form-details">
                        <a href="Picture/WPP_Profile.jpg"></a>
                        <h2>Welcome Back</h2>
                        <p>Please log in using personal information to stay connected with us</p>
                    </div>
                    <div class="form-content">
                    <?php if(isset($error) ) : ?>
                        <p style="color : red; font-style: italic; ">Username salah</p>
                        <?php endif; ?>
        
                        <h2>LOGIN</h2>
                        <form action="" method="post">
                            <div class="input-field">
                                <input type="text" name="username" id="username" required>
                                <label for="'username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" id="password" required>
                                <label for="password">Password</label>
                            </div>
                            <a href="#" class="forgot-pass">Forgot Password ?</a>
                            <button type="submit" name="login">Log In</button>
                        </form>
                        <div class="bottom-link">
                            <p>Don't have an account? <a href="6.1.EkonomiKreatif_SignUp.php">Signup</a></p>
                        </div>
                    </div>
                </class>
            </div>
              

        </section>
        
        <script src="script.js"></script>

        
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>