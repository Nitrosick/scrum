<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <script src="https://kit.fontawesome.com/5702810b05.js" crossorigin="anonymous"></script>
    <title>Gotta Watch</title>
</head>
<body>
    <header>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div id="swiper" class="swiper-wrapper">
              <!-- Slides -->  
                <div class="swiper-slide">
                    <img src="images/shang_chi.jpg" alt="movie">
                </div>
                <div class="swiper-slide">
                    <img src="images/french_dispatch.jpg" alt="movie">
                </div>
                <div class="swiper-slide">
                    <img src="images/free_guy.jpg" alt="movie">
                </div>
                <div class="swiper-slide">
                    <img src="images/dune.jpg" alt="movie">
                </div>
                <div class="swiper-slide">
                    <img src="images/house_of_gucci.jpg" alt="movie">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <form id="form">
            <div class="landing-logo">
                <img src="images/logo.png" alt="logo">
                <div class="btn-wrapper">
                    <button class="header_button" onClick='location.href="/dashboard"'>Join us</button>
                </div>
                <a href="#" class="login">Already has an account</a></div>
            </div>
            <div>                
            <div class="search-block">
                <input type="text" placeholder="Search" id="search" class="search">                
            </div>
        </form>
    </header>

    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page</div>
    </div>

    <footer class="footer">
        <div class="footer-wrap">
            <div class="footer_logo landing-logo">
                <img src="images/logo.png" alt="logo">
                <p>Gotta Watch<span>movie club</span></p>
            </div>
            <p class="footer_text">
                We create content and help people looking for a truly worthy films in the cinema world!
            </p>
            <span class="footer-cr">
              © 2021 by Gotta Watch movie club
            </span>
        </div>
    </footer>
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script> 
</body>
</html>
