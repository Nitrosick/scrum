<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,600%7CSource+Sans+Pro:400,600,700%7CFresca" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles should be switched here: -->

    <!--<link rel="stylesheet" type="text/css" href="css/style1.css">-->
    <link href="{{ asset('css/movieList.css') }}" rel="stylesheet">

    <title>Gotta Watch</title>
</head>

<body>
    <header class="header">
        <div class="header-wrap">
            <a href="{{ url('/') }}" class="landing-logo">
                <img src="/images/m-logo.png" alt="logo" />
                <p>Gotta Watch<span>movie club</span></p>
            </a>
            <p class="header_heading">
                Join one of the awesome club
            </p>
            <p class="header_text">
                Welcome to a lovely corner for a movie fans on the endless space of the Internet!
                Here everyone will find a movie for themselves, their second half, or a noisy company of friends.
                Stay and immerse yourself in the amazing world of cinema!
            </p>
            <div>
                <button class="header_button">Join us</button>
                <a href="{{ url('/dashboard') }}" class="login">Already has an account</a>
            </div>
        </div>
        <div class="blind-block"></div>
    </header>
    <main class="section">
        <div class="section_card_wrap">
            <div class="section_card">
                <img class="section_card_img" src="/images/m-1.jpg" alt="experts" />
                <a href="{{ url('/movies/1') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-2.jpg" alt="experts" />
                <a href="{{ url('/movies/2') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-3.jpg" alt="experts" />
                <a href="{{ url('/movies/3') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-1.jpg" alt="experts" />
                <a href="{{ url('/movies/4') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-2.jpg" alt="experts" />
                <a href="{{ url('/movies/5') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-3.jpg" alt="experts" />
                <a href="{{ url('/movies/6') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-1.jpg" alt="experts" />
                <a href="{{ url('/movies/7') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-2.jpg" alt="experts" />
                <a href="{{ url('/movies/8') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
            <div class="section_card">
                <img class="section_card_img" src="/images/m-3.jpg" alt="experts" />
                <a href="{{ url('/movies/9') }}" class="section_card_button">Подробнее</a>
                <a href="{{ url('/favourites') }}" class="section_card_favorite_button"><i class="far fa-heart"></i></a>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-wrap">
            <a href="{{ url('/') }}" class="footer_logo landing-logo">
                <img src="/images/m-logo.png" alt="logo" />
                <p>Gotta Watch<span>movie club</span></p>
            </a>
            <p class="footer_text">
                We create content and help people looking for a truly worthy films in the cinema world!
            </p>
            <span class="footer-cr">
                &copy; 2021 by Gotta Watch movie club
            </span>
        </div>
    </footer>
</body>

</html>
