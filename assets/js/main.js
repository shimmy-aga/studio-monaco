document.addEventListener("DOMContentLoaded", () => {

// START SCRIPT ========================================================== //
// ======================================================================= //




const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const headerMenu = document.getElementById("nav");


// Open Close Navbar Menu on Click Burger ////////////
//////////////////////////////////////////////////////
if (burgerMenu && navbarMenu) {
   burgerMenu.addEventListener("click", () => {
      burgerMenu.classList.toggle("is-active");
      navbarMenu.classList.toggle("is-active");
   });
}


// Close Navbar Menu on Click Menu Links /////////////
//////////////////////////////////////////////////////
document.querySelectorAll(".nav-link").forEach((link) => {
   link.addEventListener("click", () => {
      burgerMenu.classList.remove("is-active");
      navbarMenu.classList.remove("is-active");
   });
});


// Change Header Background on Scrolling /////////////
//////////////////////////////////////////////////////
function checkScroll() {
   if (this.scrollY >= 85) {
      headerMenu.classList.add("on-scroll");
   } else {
      headerMenu.classList.remove("on-scroll");
   }
};

// Run on scroll
window.addEventListener('scroll', checkScroll);

// Run once on page load to handle mid-scroll or anchor loads
window.addEventListener('load', checkScroll);

// Also, run immediately in case the script loads after scrolling happened
checkScroll();                                                       


// Fixed Navbar Menu on Window Resize ////////////////
//////////////////////////////////////////////////////
window.addEventListener("resize", () => {
   if (window.innerWidth > 768) {
      if (navbarMenu.classList.contains("is-active")) {
         navbarMenu.classList.remove("is-active");
      }
   }
});




// END SCRIPT ============================================================ //
// ======================================================================= //

});
