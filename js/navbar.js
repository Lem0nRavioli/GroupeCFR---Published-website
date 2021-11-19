/*------------------ Variables -------------------------*/

const hamburger = document.querySelector(".hamburger");
const navMenu = document.getElementById("menu_navbar");

const navLink = document.querySelectorAll(".nav_link");

const navBar = document.getElementById("navbar");


/*------------------ Ouverture menu latéral -------------------------*/

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    navBar.style.position = "sticky";
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}


/*------------- Fermeture menu latéral click lien menu --------------*/

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


/*------------- Fermeture menu latéral on scroll --------------*/

window.addEventListener("scroll", function closeMenuScroll() {
    closeMenu();
    setTimeout(() => {
        navBar.style.position = ""
    }, 235);
});
