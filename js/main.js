// SLick Slider
$(".carousel-header").slick({
  infinite: true,
  autoplay: true,
  speed: 300,
  dots: true
});

// Get the modal
var sidenav = document.querySelector(".NavigationMenu-sidenav");

// Open Sidenav
function openSidenav(e) {
  $(".NavigationMenu-sidenav").addClass('show');
};

// Close Sidenav
function closeSidenav(e) {
  $(".NavigationMenu-sidenav").removeClass("show");
};

window.onclick = function(e) {
  if (e.target == sidenav) {
    sidenav.style.display = "none";
  }
};