var i = 0,
    j = 0;

function barrita() {
    var barra = document.getElementById("barra");
    // transform: translatex : ( 324 - 328 )
    var max = (document.querySelector("#imgbarra").width.baseVal.value * 92 / 100);
    window.setInterval(() => {
        if (i < max) {
            barraValor(++i);
        } else {
            window.setInterval(() => {
                barraValor(max + Math.floor(Math.random() * 3));
            }, 1000);
        }
    }, 9.12);
}

function relojito() {
    // bucle incremental desde 0 para que se vaya moviendo la aguja
    var reloj = document.getElementById("reloj");
    // transform: rotate (211 - 215)

    window.setInterval(() => {
        if (j < 211) {
            relojValor(++j);
        } else {
            window.setInterval(() => {
                relojValor(211 + Math.floor(Math.random() * 2.5));
            }, 1000);
        }
    }, 9.12);
}

function myFunction(x) {
    if (x.matches) { // If media query matches (menor que 767)
        barrita();
    } else {
        relojito();
    }
}

function barraValor(n) {
    //console.log(n);
    //console.log(barra.style.cssText);
    barra.style = "transform: translateX(" + n + "px)";
}

function relojValor(n) {
    //console.log(n);
    //console.log(reloj.style.cssText);
    reloj.style = "transform: rotate(" + n + "deg)";
}

var x = window.matchMedia("(max-width: 767px)");
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes