<!DOCTYPE html>
<html>

<head>
    <title>User Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/adminhome.css">
    <style>
        body .home {
            background-image: url("images/forest.jpg");
            background-size: cover;
        }

        body .services {
            background-image: url("images/nature.jpg");
            background-size: cover;
        }

        body .about {
            background-color: #f2f2f2;
        }

        .services .box-container .box {
            background-color: rgba(248, 248, 250, .6);
        }

        .header {
            background: url("images/forest.jpg");
            background-size: cover;
        }

        .header .logo {
            color: #fff;
        }

        .header .navbar a {
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- header section starts here -->
    <header class="header">
        <a class="logo"><i class="fas fa-globe-asia"></i> humanCares</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
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
            <h3><span style="color: #16a085">Acting Locally,</span> Impacting Globally </h3>
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
            <p>plants donated</p>
        </div>

        <div class="icons">
            <i class="fas fa-tree"></i>
            <h3>210+</h3>
            <p>areas tree planted</p>
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
                <p>Tree planting is a simple yet powerful action that can benefit the environment, wildlife, and human well-being.</p>
                <a href="treeplantinguser.php" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-water"></i>
                <h3>Coastal Clean-Up</h3>
                <p>Coastal clean-up is a crucial activity to protect marine ecosystems and prevent plastic pollution
                    from harming wildlife and humans.</p>
                <a href="coastalcuuser.php" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-leaf"></i>
                <h3>plant donations</h3>
                <p>Plant donations can help to improve air quality, enhance aesthetic beauty, and provide numerous
                    health benefits to individuals and communities.</p>
                <a href="plantdonationsuser.php" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-recycle"></i>
                <h3>recycling wastes</h3>
                <p>Recycling wastes is an effective way to conserve natural resources, reduce waste in landfills, and
                    mitigate the impact of climate change on our planet.</p>
                <a href="recyclingwastesuser.php" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-money-bill"></i>
                <h3>money donations</h3>
                <p>Money donations can support conservation efforts, promote sustainable development, and help to
                    address global challenges such as climate change and biodiversity loss.</p>
                <a href="moneydonationsuser.php" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-cloud"></i>
                <h3>resources about climate change</h3>
                <p>Educational resources that can help raise awareness, increase understanding, and empower individuals
                    to take action towards a more sustainable and resilient future.</p>
                <a href="educationalresources.php" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <!-- services section ends here -->

    <!-- about section starts here -->
    <section class="about" id="about">
        <h1 class="heading"><span> about </span> us </h1>
        <div class="row">
            <div class="image">
                <img src="images/about-us.svg" alt="">
            </div>

            <div class="content">
                <h3>saving the earth before it's too late</h3>
                <p>Saving the Earth is not just about protecting the planet, but also about preserving our own future.
                    By taking action to reduce our impact on the environment, we can ensure that future generations have
                    access to the resources they need to live healthy and fulfilling lives.</p>
                <a href="aboutus.php" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <!-- about section ends here -->








    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>