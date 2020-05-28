window.onscroll = function() {
    fixingfunction();
}

var pos = 0;
$(window).bind('mousewheel DOMMouseScroll', function(event) {
    if (event.originalEvent.wheelDelta < 0 || event.originalEvent.detail > 0) {
        pos = pos + 50;
    } else {
        if (pos > 1) {

            pos = pos - 50;
        }

    }
    $('#yscroll').scrollLeft(pos)

});

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

const aboutusbutton = document.querySelector(".aboutus");

aboutusbutton.addEventListener("click", () => {
    aboutbutton.click();
});

$(document).click(function(e) {
    if (!$(e.target).is('a')) {
        $('.collapse').collapse('hide');
    }
});

// var sidescroll = document.getElementById('yscroll');
// var mainheader = document.getElementById('mainheader');
// var footer = document.getElementById('footer');

// function fixingfunction() {
//     header.style.position = "static";
//     if (document.body.scrollTop > window.innerHeight * 0.42 || document.documentElement.scrollTop > window.innerHeight * 0.42) {
//         footer.style.position = "fixed ";
//         mainheader.style.position = "fixed";
//         mainheader.style.top = "-42vh";
//         sidescroll.style.top = "0px";
//         sidescroll.style.position = "relative";
//         // for (i = 0; i < 100; i++) {
//         //     if (sidescroll.scrollLeft > window.innerWidth * 0.10) {
//         //         console.log(document.scrollLeft / window.innerWidth);
//         //     }
//         // }
//         if (sidescroll.scrollLeft > window.innerWidth * 0.10) {
//             footer.style.position = "static";
//         }
//     }
// }