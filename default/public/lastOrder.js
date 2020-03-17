const drop = window.matchMedia("(max-width: 767px)");

if (drop.matches){
    const navBar = document.getElementById("nav");
    const subNav = document.querySelectorAll(".sub-nav");
    const dropDown = document.querySelectorAll(".drop-down");
    const navIcon = document.getElementById("nav-icon");

    navIcon.addEventListener("click", function() {
        if (navBar.style.display != "block"){
            navBar.style.display = "block";
            this.innerHTML = "<i class='fas fa-times'></i>";
        } else{
            navBar.style.display = "none";
            this.innerHTML = "<i class='fas fa-bars'></i>";
        }

    });

    for ( let x = 0; x < dropDown.length; x++ ) {
        dropDown[x].addEventListener("click", function() {
            subNav[x].classList.toggle('sub-block');
        });
    }
}

//https://www.w3schools.com/w3css/w3css_slideshow.asp
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}