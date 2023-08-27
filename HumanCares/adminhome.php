<!DOCTYPE html>
<html>

<head>
    <title>HumanCares</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/adminhome.css">
    <style>
        body .home {
            background-image: url("images/forest3.jpg");
            background-size: cover;
        }

        body .services {
            background-image: url("images/nature.jpg");
            background-size: cover;
        }

        .services .box-container .box {
            background-color: rgba(248, 248, 250, .6);
        }

        .header {
            background: url("images/forest3.jpg");
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a class="logo"><i class="fas fa-globe-asia"></i> HumanCares</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="logout.php">Logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </header>
    <!-- header section ends here -->

    <!-- home section starts here -->
    <section class="home" id="home">
        <div class="image">
            <img src="images/home-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Acting Locally, Impacting Globally</h3>
            <p>By starting small and focusing on making a positive impact in our immediate surroundings, we can inspire others to do the same, and together, those small actions can add up to a significant impact on a larger scale.</p>
        </div>
    </section>
    <!-- home section ends here -->

    <!-- icons section starts here -->
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>3000+</h3>
            <p>people volunteered</p>
        </div>

        <div class="icons">
            <i class="fas fa-umbrella-beach"></i>
            <h3>100+</h3>
            <p>coastal clean-up</p>
        </div>

        <div class="icons">
            <i class="fas fa-seedling"></i>
            <h3>5000+</h3>
            <p>seeds donated</p>
        </div>

        <div class="icons">
            <i class="fas fa-tree"></i>
            <h3>210+</h3>
            <p>area tree planting</p>
        </div>
    </section>
    <!-- icons section ends here -->

    <!-- services section starts here -->
    <section class="services" id="services">

        <h1 class="heading"> our <span> services</span></h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-tree"></i>
                <h3>tree planting</h3>
                <p>Lists of areas and schedules for tree planting</p>
                <a href="treeplantingadmin.php" class="btn">view <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-water"></i>
                <h3>Coastal Clean-Up</h3>
                <p>Lists of areas and schedules for coastal cleaning</p>
                <a href="coastalcuadmin.php" class="btn">view <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-leaf"></i>
                <h3>plant donations</h3>
                <p>Lists of plant donations given by people</p>
                <a href="plantdonationsadmin.php" class="btn">view <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-recycle"></i>
                <h3>recycling wastes</h3>
                <p>Lists of wastes that will be recycled</p>
                <a href="recyclingwastesadmin.php" class="btn">view <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-money-bill"></i>
                <h3>money donations</h3>
                <p>Lists of money donations</p>
                <a href="moneydonationsadmin.php" class="btn">view <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-users"></i>
                <h3>volunteers</h3>
                <p>Lists of volunteers</p>
                <a href="volunteersadmin.php" class="btn">view <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <!-- services section ends here -->









    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>