var elementsToShow
var scroll = window.requestAnimationFrame ||
    function (callback) {
        window.setTimeout(callback, 1000 / 60)
    };
$(document).ready(function () {
    window.onscroll = function () {
        scrollFunction()
    };
    elementsToShow = document.querySelectorAll('.show-on-scroll');
    loop();
});


function scrollFunction() {
    if (document.body.scrollTop > 99 || document.documentElement.scrollTop > 99) {
        $('.concepta-navbar').addClass('on-top')
    } else if (document.body.scrollTop < 5 && document.documentElement.scrollTop < 5) {
        $('.concepta-navbar').removeClass('on-top')
    }
}
function isElementInViewport(el) {
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0
            && rect.bottom >= 0)
        ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight))
        ||
        (rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}
function loop() {
    elementsToShow.forEach(function (element) {
        if (isElementInViewport(element)) {
            element.classList.add('is-visible');
        } else {
            element.classList.remove('is-visible');
        }
    });
    scroll(loop);
}