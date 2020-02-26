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