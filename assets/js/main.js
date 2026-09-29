const menuLinks = document.querySelector(".nav-links");
const backdrop = document.querySelector(".backdrop");

function toggleMenu() {
  menuLinks.classList.toggle("active");
  backdrop.classList.toggle("active");
}
