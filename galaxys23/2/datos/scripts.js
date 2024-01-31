// TIME CIRCLES
var countSeconds = document.querySelectorAll('.count');
var countMinutes = document.querySelectorAll('.count-min');
var count = 120;
countSeconds.forEach(function (n) {
    return n.innerHTML = '00';
});
countMinutes.forEach(function (m) {
    return m.innerHTML = '02';
});

(function secondsCounter() {
    var interval = setInterval(function () {
        count = count - 1;
        countSeconds.forEach(function (n) {
            if ((count % 60) < 10) {
                return n.innerHTML = '0' + (count % 60);
            } else {
                return n.innerHTML = count % 60;
            }
        });
        countMinutes.forEach(function (m) {
            if ((count / 60) < 10) {
                return m.innerHTML = '0' + Math.floor(count / 60);
            } else {
                return m.innerHTML = Math.floor(count / 60);
            }
        });
        if (count === 0) {
            clearInterval(interval);
            count = 00;
        }
    }, 1000);
})();

var colors = [];

function setColor(colorElement) {
    document.querySelectorAll('.colors div').forEach(function (c) {
        c.classList.remove('active');
    });
    colorElement.classList.add('active');
    document.querySelector('.product-img').src =
        'https://1607929107.rsc.cdn77.org/cam/CC/GS/iPhone_13_Regular/img/phone-' + colorElement.id +
        '.png';

    document.querySelector('.product-img').animate({
        opacity: [0.9, 1]
    }, {
        duration: 1000
    })
}

document.querySelectorAll('.colors div').forEach(function (colorElement) {
    colorElement.addEventListener('click', function () {
        setColor(colorElement)
    });
    colors.push(colorElement.id);
});

function changePageColor(pageColor) {
    var currentBodyClass = document.body.className.match(/\bpage-\S+/g);
    var newBodyClass = 'page-' + pageColor;
    document.body.className = document.body.className.replace(currentBodyClass, newBodyClass);
}

window.scrollOnMobileTimeout = 5000;

function scrollToTop() {
    var stepElements = document.querySelectorAll("[id^=step]");
    var stepElement = Array.from(stepElements).filter(el => el.offsetParent != null)[0];
    stepElement.scrollIntoView({behavior: 'smooth', block: 'start'});
}

/* Animate sections */
// get the element to animate
var element1 = document.getElementById('section-superpower');
var elementHeight1 = element1.clientHeight;

var element2 = document.getElementById('section-camera');
var elementHeight2 = element2.clientHeight;

var element3 = document.getElementById('section-ultra');
var elementHeight3 = element3.clientHeight;

var element4 = document.getElementById('section-specs');
var elementHeight4 = element4.clientHeight;

// listen for scroll event and call animate function
document.addEventListener('scroll', animate1);
document.addEventListener('scroll', animate2);
document.addEventListener('scroll', animate3);
document.addEventListener('scroll', animate4);

function inView(elem, elemHeight) {
    var windowHeight = window.innerHeight;
    var scrollY = window.scrollY || window.pageYOffset;

    var scrollPosition = scrollY + windowHeight;
    if(!isMobile) {
        var elementPosition = elem.getBoundingClientRect().top - 800 + scrollY + elemHeight;
    } else {
        elementPosition = elem.getBoundingClientRect().top - 300 + scrollY + elemHeight;
    }

    if (scrollPosition > elementPosition) {
        return true;
    }
    return false;
}

function animate1() {
    if (inView(element1, elementHeight1)) {
        element1.classList.add('unfold');
    }
}
function animate2() {
    if (inView(element2, elementHeight2)) {
        element2.classList.add('unfold');
    }
}
function animate3() {
    if (inView(element3, elementHeight3)) {
        element3.classList.add('unfold');
    }
}
function animate4() {
    if (inView(element4, elementHeight4)) {
        element4.classList.add('unfold');
    }
}
/* Animate sections //*/