window.onscroll = function() {
    hidefunction();
}

var prevScrollpos = window.pageYOffset;
var nav = document.getElementsByTagName('button')[0];

function hidefunction() {
    var currentScrollPos = window.pageYOffset;
    if (navbutton.className != "navbar-toggler navdisplay navhide") {
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").style.top = "0";
            document.getElementById("header").style.transition = "0.5s";
            // document.getElementById("header").style.position = "sticky";
        } else {
            document.getElementById("header").style.top = "-100px";
            document.getElementById("header").style.transition = "0.5s";
            // document.getElementById("header").style.position = "fixed";
        }
        prevScrollpos = currentScrollPos;
    }
}



var links = document.getElementsByClassName('butt');
for (var i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function() {
        var active = document.getElementsByClassName('nav-a');
        active[0].className = active[0].className.replace(" nav-a", "");
        this.className += " nav-a";
    });
}

var navbutton = document.querySelector('.navdisplay');

navbutton.addEventListener('click', () => {
    navbutton.classList.toggle('navhide');
});

var mq = window.matchMedia("(max-width: 766px)");
if (mq.matches) {
    function navhide() {
        navbutton.click();
    }
} else {
    function navhide() {

    }
}

$('.navbar-nav>li>a').on('click', function() {
    $('.navbar-collapse').collapse('hide');
});

const aboutbutton = document.querySelector(".about");
const aboutdiv = document.querySelector(".aboutdiv");
const aboutuscards = document.querySelector(".aboutuscards");
const bodyheight = document.querySelector(".body");

aboutbutton.addEventListener("click", () => {
    bodyheight.classList.toggle('bodyheight');
    aboutbutton.classList.toggle('about-width');
    aboutdiv.classList.toggle('aboutdiv-visible');
    aboutuscards.classList.toggle('aboutuscards-visible');
});

const aboutusbutton = document.querySelector(".aboutus");

aboutusbutton.addEventListener("click", () => {
    aboutbutton.click();
});

$(document).click(function(e) {
    if (!$(e.target).is('a')) {
        $('.collapse').collapse('hide');
    }
});