// let controller = new ScrollMagic.Controller();
// let timeline = new TimelineMax();
//
// timeline
//     .to('.tierra', 3, {y: -300})
//     .to('.boxlogo', 3, {y: -200}, '-=3')
//     .to('.cielo', 3, {y: 50}, '-=3')
//     .to('.contenido_animation', 3, {y: "0%"}, '-=3');
//
// let scene = new ScrollMagic.Scene({
//     triggerElement: "article",
//     duration:"100%",
//     tiggerHook: 0,
// })
//     .setTween(timeline)
//     .addTo(controller);
//


$(document).ready(function () {
    var sticky = new Sticky('.navbar_sticky');


});

function mostrarNav() {
    $(".navbarx_ul").toggle('slow');
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
