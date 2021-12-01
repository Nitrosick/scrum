<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotta Watch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ secure_asset('css/movieList.css') }}" rel="stylesheet">
</head>

<body>

    <header class="header">
        <div class="header-wrap">
            <a href="{{ url('/') }}" class="landing-logo">
                <img src="/images/m-logo.png" alt="logo" />
                <p>Gotta Watch<span>movie club</span></p>
            </a>
            <p class="header_heading">
                Name of movie
            </p>
            <p class="header_text">
                Description movie
            </p>
            <div>
                <button class="header_button">Join us</button>
                <a href="{{ url('/dashboard') }}" class="login">Already has an account</a>
            </div>
        </div>
        <div class="blind-block"></div>
    </header>

    <div class="container mt-5">
        <table class="table table-dark table-striped">
            <tbody>
                <tr>
                    <th scope="row">Actors</th>
                    <td>"Jesse Eisenberg, Andrew Garfield, Justin Timberlake"</td>
                </tr>
                <tr>
                    <th scope="row">Awards</th>
                    <td>"Won 3 Oscars. 172 wins & 186 nominations total"</td>
                </tr>
                <tr>
                    <th scope="row">Country</th>
                    <td>"United States"</td>
                </tr>
                <tr>
                    <th scope="row">DVD</th>
                    <td>"11 Jan 2011"</td>
                </tr>
                <tr>
                    <th scope="row">Director</th>
                    <td>"David Fincher"</td>
                </tr>
                <tr>
                    <th scope="row">Genre</th>
                    <td>"Biography, Drama"</td>
                </tr>
                <tr>
                    <th scope="row">Language</th>
                    <td>"English, French"</td>
                </tr>
                <tr>
                    <th scope="row">Metascore</th>
                    <td>95</td>
                </tr>
                <tr>
                    <th scope="row">Genre</th>
                    <td>"Biography, Drama"</td>
                </tr>
            </tbody>
        </table>
    </div>

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
