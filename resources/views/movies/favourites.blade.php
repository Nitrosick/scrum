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
    <header class="favourites_header">
        <a href="{{ route('movies') }}">
            <img src="images/logo.png" alt="logo" width="100">
        </a>
        <h1 class="favourites_title">FAVOURITES LIST</h1>
    </header>

    <main id="main">
        <div class="favourites_list">
            @forelse ($favouritesList as $row)
                <div class="favourites_item">
                    <img src="{{ $row->image_link }}" alt="Movie poster">
                    <a class="link_to_movie" href="{{ route('movies', ['movie_id' => $row->movie_id]) }}" class="favourites_item_title">{{ $row->title }}</a>
                    <div class="plug"></div>
                    <span>Priority:</span>
                    <span class="priority">{{ $row->priority }}</span>
                    <a href="{{ route('remove_favourite', ['id' => $row->id]) }}">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            @empty
                <h2>You don't have any movies in your favorites list</h2>
            @endforelse
        </div>

        {!! $favouritesList->links() !!}
    </main>

    <footer class="footer">
        <div class="footer-wrap">
            <a class="footer_logo landing-logo" href="{{ route('movies') }}">
                <img src="images/logo.png" alt="logo" width="100">
            </a>
            <p class="footer_text">
                WE CREATE CONTENT AND HELP PEOPLE LOOKING FOR A TRULY WORTHY FILMS IN THE CINEMA WORLD!
            </p>
            <span class="footer-cr">
              © 2021 BY GOTTA WATCH MOVIE CLUB
            </span>
        </div>
    </footer>

    <script>
        const header = document.querySelector('.favourites_header');
        const priorities = document.querySelectorAll('.priority');

        const background = () => {
            if (window.innerWidth <= 1920) {
                header.style.backgroundSize = 'auto 100%';
            } else {
                header.style.backgroundSize = '100% auto';
            }
        };

        window.addEventListener('load', () => {
            background();

            priorities.forEach(el => {
                if (el.innerHTML >= 7) {
                    el.style.color = '#90EE90';
                } else if (el.innerHTML <= 4) {
                    el.style.color = '#FF0000';
                } else {
                    el.style.color = '#FFA500';
                }
            });
        });

        window.addEventListener('resize', () => {
            background();
        });
    </script>

    {{-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script> --}}
</body>
</html>
