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
                    <li class="nav-link">
                        <a href="6.3.EkonomiKreatif_Profile.php">
                            <i class='bx bxs-user-detail icon'></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="6.4.EkonomiKreatif_ProfilePassword.php">
                            <i class='bx bxs-lock icon'></i>
                            <span class="text nav-text">Password</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="6.5.EkonomiKreatif_ProfileAddress.php">
                            <i class='bx bxs-edit-location icon'></i>
                            <span class="text nav-text">Address</span>
                        </a>
                    </li>
                </div>


                <div class="bottom-content">
                <li class="profile">
                        <a href="1.EkonomiKreatif_Home.php">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Home</span>
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
            <div class="container-profile-profile">
                <div class="title">Add Address</div>
                <form action="#">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Fullname</span>
                            <input type="text" placeholder="Enter name"required>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" placeholder="Enter phone number"required>
                        </div>
                        <div class="input-bio">
                            <span class="details">Full Address</span>
                            <input type="text" placeholder="Enter full address"required>
                        </div>
                        <div class="actions">
                            <button type="button" class="btn btn-primary">Submit</button>
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