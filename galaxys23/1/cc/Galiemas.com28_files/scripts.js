var countSeconds = document.querySelectorAll('.countdown-number');
var countMinutes = document.querySelectorAll('.minutes-number');
var count = 300;

var sec = count%60; // set the seconds
var min = Math.floor(count/60); // set the minutes

timer = window.setInterval("secondsCounter();", 1000);

// Crear function secondsCounter para el contador marcha atras
function secondsCounter() {

    if(count == 0) {
        window.clearInterval(timer); 
        return;
    }

    count --;
    sec--;
    if (sec == -01) {
        sec = 59;
        min = min - 1;
        countMinutes.forEach(function (m) {
            return m.innerHTML = min;
        });
    } 

    countSeconds.forEach(function (n) { 
        return n.innerHTML = sec;
    });
}


function extendShowStep(step) {
    if (step >= 3) {
        document.getElementById("formContainer").style.display = "none";
    }
}

document.addEventListener('click', function(event) {
    if (!event.target.matches('.chose-img')) return;
    changePageColor(event.target.id);
});

function changePageColor(pageColor) {
    var currentBodyClass = document.body.className.match(/\bpage-\S+/g);
    var newBodyClass = 'page-' + pageColor;
    document.body.className = document.body.className.replace(currentBodyClass, newBodyClass);
}


