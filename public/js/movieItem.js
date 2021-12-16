const movieId = localStorage.getItem("movieId");
const API_KEY = "api_key=1cf50e6248dc270629e802686245c2c8";
const BASE_URL = "https://api.themoviedb.org/3/movie/";
const API_URL = BASE_URL + movieId + "?" + API_KEY;
const IMG_URL = "https://image.tmdb.org/t/p/w500";

const section = document.getElementById("section");
const form = document.getElementById("form");
const search = document.getElementById("search");

getMovie(API_URL);

function getMovie(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      showMovie(data);
    });
}

function showMovie(data) {
  section.innerHTML = "";
  const {
    title,
    tagline,
    poster_path,
    vote_average,
    overview,
    genres,
    production_companies,
    release_date,
    runtime,
    homepage,
  } = data;
  const movieEl = document.createElement("div");
  movieEl.classList.add("general-info");
  movieEl.innerHTML = `
        <img src="${IMG_URL + poster_path}" alt="${title}">
        <div>
            <div><h4>Title:</h4>${title}</div>
            <div><h4>Rating:</h4><span class="${getColor(
              vote_average
            )}">${vote_average}</span></div>
            <div><h4>Tagline:</h4>${tagline}</div>
            <div><h4>Overview:</h4>${overview}</div>
            <div class="oneline"><h4>Date:</h4>${release_date}</div>
            <div class="oneline"><h4>Duration, min:</h4>${runtime}</div>
            <div class="oneline"><h4>Genres:</h4>
                <p class="genres-list"></p>
            </div>
            <div class="oneline">
                <h4>Homepage:</h4>
                <a href=${homepage}>${homepage}</a>
            </div>
            <div class="oneline"><h4>Companies:</h4>
                <p class="companies-list"></p>
            </div>
        </div>
    `;
  section.appendChild(movieEl);

  const paragraphC = document.querySelector(".companies-list");
  const paragraphG = document.querySelector(".genres-list");

  genres.forEach((genre) => {
    const genresMarkup = `<div>${genre.name}</div>`;
    paragraphG.insertAdjacentHTML("beforeend", genresMarkup);
  });

  production_companies.forEach((company) => {
    const companiesMarkup = `
        <img src="${IMG_URL + company.logo_path}" alt="${company.name}">
      `;
    paragraphC.insertAdjacentHTML("beforeend", companiesMarkup);
  });
}

function getColor(vote) {
  if (vote >= 8) {
    return "green";
  } else if (vote >= 5) {
    return "orange";
  } else {
    return "red";
  }
}
