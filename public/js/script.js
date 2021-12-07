// TMDB API

const API_KEY = "api_key=1cf50e6248dc270629e802686245c2c8";
const BASE_URL = "https://api.themoviedb.org/3";
const API_URL = BASE_URL + "/discover/movie?sort_by=popularity.desc&" + API_KEY;
const IMG_URL = "https://image.tmdb.org/t/p/w500";
const searchURL = BASE_URL + "/search/movie?" + API_KEY;

const main = document.getElementById("main");
const form = document.getElementById("form");
const search = document.getElementById("search");
const swiperSlide = document.getElementById("swiper");

const NEW_MOVIES_URL =
  BASE_URL +
  "/discover/movie?primary_release_date.gte=2014-09-15&primary_release_date.lte=2014-10-22" +
  API_KEY;

const BEST_MOVIES_URL =
  BASE_URL +
  "/discover/movie?primary_release_year=2010&sort_by=vote_average.desc&" +
  API_KEY;

getMovies(API_URL);

function getMovies(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      showMovies(data.results);
      //showBest(data.results);
    });
}

function showMovies(data) {
  main.innerHTML = "";
  data.forEach((movie) => {
    const { title, poster_path, vote_average, overview } = movie;
    const movieEl = document.createElement("div");
    movieEl.classList.add("movie");
    movieEl.innerHTML = `
    <a class="movie-info-details" href="#">
      <img src="${IMG_URL + poster_path}" alt="${title}">
      <div class="movie-info">
        <h3>${title}</h3>
        <span class="${getColor(vote_average)}">${vote_average}</span>
      </div>
      <div class="overview"><h3>Overview</h3>${overview}</div>      
    </a>
    <button class="favorite-button"><i class="heart fa fa-heart-o"></i></button>
    `;
    main.appendChild(movieEl);
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

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const searchReq = search.value;
  if (searchReq) {
    getMovies(searchURL + "&query=" + searchReq);
  } else {
    getMovies(API_URL);
  }
});

function showBest(data) {
  swiper.innerHTML = "";
  const rates = [];
  data.forEach((movie) => {
    const { vote_average } = movie;
    rates.push(vote_average);
  });
  const topRates = [...new Set(rates)].sort((a, b) => b - a).slice(0, 5);
  data.forEach((movie) => {
    const { title, poster_path, vote_average } = movie;
    if (topRates.includes(vote_average)) {
      const swiperItem = document.createElement("div");
      swiperItem.classList.add("swiper-slide");
      swiperItem.innerHTML = `
      <img src="${IMG_URL + poster_path}" alt="${title}">  
      `;
      swiperSlide.appendChild(swiperItem);
    }
  });
}
