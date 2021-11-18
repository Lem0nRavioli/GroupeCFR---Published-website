const hamburger = document.querySelector(".hamburger");
const navMenu = document.getElementById("menu_navbar");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    navMenu.style.display = "";
}

const navLink = document.querySelectorAll(".nav_link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    navMenu.style.display = "none";
}