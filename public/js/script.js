// TMDB API

const API_KEY = "api_key=1cf50e6248dc270629e802686245c2c8";
const BASE_URL = "https://api.themoviedb.org/3";
const API_URL = BASE_URL + "/discover/movie?sort_by=popularity.desc&" + API_KEY;
const IMG_URL = "https://image.tmdb.org/t/p/w500";
const searchURL = BASE_URL + "/search/movie?" + API_KEY;
const movieURL = BASE_URL + "/movie/";

const main = document.getElementById("main");
const form = document.getElementById("form");
const search = document.getElementById("search");
const swiperSlide = document.getElementById("swiper");

const prev = document.getElementById("prev");
const next = document.getElementById("next");
const current = document.getElementById("current");

let currentPage = 1;
let nextPage = 2;
let prevPage = 3;
let lastUrl = "";
let totalPages = 100;

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
    lastUrl = url;
    fetch(url)
        .then((res) => res.json())
        .then((data) => {
            if (data.results.length !== 0) {
                showMovies(data.results);
                currentPage = data.page;
                nextPage = currentPage + 1;
                prevPage = currentPage - 1;
                totalPages = data.total_pages;

                current.innerText = currentPage;
                if (currentPage <= 1) {
                    prev.classList.add("disabled");
                    next.classList.remove("disabled");
                } else if (currentPage >= totalPages) {
                    prev.classList.remove("disabled");
                    next.classList.add("disabled");
                } else {
                    prev.classList.remove("disabled");
                    next.classList.remove("disabled");
                }
            } else {
                main.innerHTML = `<h1 class="no-results">No Results Found</h1>`;
            }
        });
}

function addToLocalStore(event, id) {
    localStorage.setItem("movieId", id);
}

function showMovies(data) {
    main.innerHTML = "";
    data.forEach((movie) => {
        const { title, poster_path, vote_average, overview, id } = movie;
        const movieEl = document.createElement("div");
        movieEl.classList.add("movie");
        movieEl.innerHTML = `
    <a onClick="addToLocalStore(event, ${id})" class="movie-info-details" href="/movies/${id}">
      <img src="${IMG_URL + poster_path}" alt="${title}">
      <div class="movie-info">
        <h3>${title}</h3>
        <span class="${getColor(vote_average)}">${vote_average}</span>
      </div>
      <div class="overview"><h3>Overview</h3>${overview}</div>
    </a>
    <button class="favorite-button" onClick="addToFavorite(event)"><i class="far fa-heart"></i></button>
    <div style="display: none;">${id}</div>
    `;
        main.appendChild(movieEl);
    });
}

function addToFavorite(event) {
    let target = event.target;
    if (target.classList.contains("far")) {
        target.classList.remove("far");
        target.classList.add("fas");
    } else {
        target.classList.remove("fas");
        target.classList.add("far");
    }
    // let id = target.parentElement.parentElement.lastElementChild.innerText;
    // console.log(id);
    // return id;

    let id = target.parentElement.parentElement.lastElementChild.innerText;
    let imgPath =
        target.parentElement.parentElement.childNodes[1].childNodes[1].src;
    let title =
        target.parentElement.parentElement.childNodes[1].childNodes[3]
        .firstElementChild.innerText;
    const postData = {
        id: id,
        title: title,
        img: imgPath,
    };

    try {
        const response = fetch("/favourites/add", {
        method: "post",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(postData),
        });

        if (!response.ok) {
        const message = "Error with Status Code: " + response.status;
        throw new Error(message);
        }

        const data = response.json();
        console.log(data);
    } catch (error) {
        console.log("Error: " + err);
    }
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

prev.addEventListener("click", () => {
    if (prevPage > 0) {
        pageCall(prevPage);
    }
});

next.addEventListener("click", () => {
    if (nextPage <= totalPages) {
        pageCall(nextPage);
    }
});

function pageCall(page) {
    let urlSplit = lastUrl.split("?");
    let queryParams = urlSplit[1].split("&");
    let key = queryParams[queryParams.length - 1].split("=");
    if (key[0] != "page") {
        let url = lastUrl + "&page=" + page;
        getMovies(url);
    } else {
        key[1] = page.toString();
        let a = key.join("=");
        queryParams[queryParams.length - 1] = a;
        let b = queryParams.join("&");
        let url = urlSplit[0] + "?" + b;
        getMovies(url);
    }
}

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
