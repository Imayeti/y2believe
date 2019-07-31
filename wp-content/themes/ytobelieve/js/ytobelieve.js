function openNav() {
    document.getElementById("mySidenav").style.width = "200px";

// document.getElementById("overlay").style.opacity = "1";
// document.getElementById("overlay").style.width = "100vw";
// document.getElementById("mySidenav").style.opacity = "1";
$(".menuLink1").fadeIn(1000);
$(".menuLink2").fadeIn(1400);
$(".menuLink3").fadeIn(1800);
$(".menuLink4").fadeIn(2200);

}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $(".menuLink4").fadeOut();
    $(".menuLink3").fadeOut();
    $(".menuLink2").fadeOut();

    $(".menuLink1").fadeOut();
}
