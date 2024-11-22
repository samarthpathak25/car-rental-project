 'use strict';

//  nav toogle

const overlay = document.querySelector("[data-overlay]");
const navbar = document.querySelector("[data-navbar]");
const navTogglebtn = document.querySelector("[data-nav-toggle-btn]");
const navbarLink = document.querySelectorAll("[data-nav-link]");

const navToggleFunc = function ()
{
    navTogglebtn.classList.toggle("active");
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");

}

navTogglebtn.addEventListener("click", navToggleFunc);
overlay.addEventListener("click", navToggleFunc);

for (let i = 0; i < navbarLink.length; i++ ){
navbarLink[i].addEventListener("click", navToggleFunc);

}

// header active on scroll

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
 window.scrollY >= 10 ? header.classList.add("active")
   : header.classList.remove("active");
});

// { <button onclick="location.href='http://127.0.0.1:5500/error.html';">Go to Example</button> }