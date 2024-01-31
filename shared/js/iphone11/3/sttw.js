// Se inicia al cargar toda la web
window.onload = start;

//Parametros de cololacion
var formOptionsCapacity = document.querySelector("#selectedCapacity");
var imgFront = "feb20-iphone11-**.png";
var imgBack = "feb20-iphone11-back-**.png";
var siteSmallImg = null;
var siteBigImg = null;
var mainColor = "";
var nameColorSelected = null;
//Funcion Start para meter todos los eventos
function start(){
    mainColor = document.querySelector("#colorBlack").dataset.color;
    document.querySelector("#formSectionText > p:nth-child(2) > span").innerText = mainColor;
    document.querySelector("#capacityOptions").addEventListener('click',controllerCapacityOptions);
    document.querySelector("#colorOptions").addEventListener('click',controllerProImages);
    siteBigImg = document.querySelector("#features-feature-1 > div.imgs > div.imgPhone.img1 > img");
    siteSmallImg = document.querySelector("#features-feature-1 > div.thumbs");
    siteSmallImg.addEventListener('click',controllerImages);
    nameColorSelected = document.querySelector("#formSectionText > p:nth-child(2) > span");
    nameColorSelected = mainColor;
}

function controllerCapacityOptions (evt){
   if(evt.target !== evt.currentTarget){
        modifyCapacityOptions(evt.target.innerText);
        l = document.querySelector("#capacityOptions").children
        for (var i = 0; i < l.length; i++) {
            l[i].classList.remove("selected") 
        }
        evt.target.className = "selected";
   }
}

function modifyCapacityOptions (option){
    document.querySelector("#selectedCapacity").innerText = option;
}

//Funcionalidad para cambiar la imagen principal entra las dos disponibles

function controllerImages (evt){
    if(evt.target !== evt.currentTarget){
        modifyImages(evt.target);
    }
 }

 function modifyImages (option){
    let arrAux = option.src.split("/");
    let pathFrontImg = siteBigImg.src;
    let arr = pathFrontImg.split("/");
    arr[arr.length -1] = arrAux[arrAux.length -1];
    //let path= "./files/" + arr[arr.length -1];
    let path= "../../../../../shared/images/iphone11/3/" + arr[arr.length -1];
    
    siteBigImg.src = path
}


// Funcionalidad para saber qwue color es el amin
function controllerProImages (evt){
    if(evt.target !== evt.currentTarget){
        selectColor(readColor(evt.target));
    }
 }

 function readColor (cs){
    let colorSelected = [cs.id.substr(5),cs.dataset.color]
    return colorSelected;
 }

 function selectColor (color){
    ChangeImagesColor(color[0],mainColor);
    mainColor =  color[0];
    document.querySelector("#formSectionText > p:nth-child(2) > span").innerText = color[1];
 }

 function ChangeImagesColor (c,mc){
   // let pathBackImg = "./files/" + imgBack;
    let pathBackImg = "../../../../../shared/images/iphone11/3/" + imgBack;
    //let pathFrontImg = "./files/" + imgFront;
    let pathFrontImg = "../../../../../shared/images/iphone11/3/" + imgFront;
    //let pathFrontImg = siteBigImg.src;
    let arr = pathFrontImg.split("/");
    //pathFrontImg = "./files/" + arr[arr.length -1];
    //pathFrontImg = "../../../../../shared/images/iphone11/3/" + arr[arr.length -1];
    pathFrontImg = pathFrontImg.replace("**",c.toLowerCase());
    let pathMainImg = pathFrontImg.replace("-"+mc.toLowerCase(),"-"+c.toLowerCase());
    pathBackImg = pathBackImg.replace("**",c.toLowerCase());
    siteBigImg.src = pathMainImg; 
    siteSmallImg.firstElementChild.firstElementChild.src = pathFrontImg;
    siteSmallImg.lastElementChild.firstElementChild.src = pathBackImg;

 }


 /* TIMER*/

 var timer;

currentTime = new Date();
clearInterval(timer);
// FIN DE LA CUENTA ATRAS
currentTime.setMonth(currentTime.getMonth() + 1);
var timer_month = currentTime.getMonth(); // MES
currentTime.setDate(currentTime.getDate() + 2);
var timer_day = currentTime.getDate(); // DIA
var timer_year = currentTime.getFullYear();
var timer_hour = 2;
if (timer_hour == "") timer_hour = 0;
var timer_min = 10;
if (timer_min == "") timer_min = 0;

var timer_date = timer_month + "/" + timer_day + "/" + timer_year + " " + timer_hour + ":" + timer_min;
var end = new Date(timer_date); // Arrange values in Date Time Format
var now = new Date(); // Get Current date time
var second = 1000; // Total Millisecond In One Sec
var minute = second * 60; // Total Sec In One Min
var hour = minute * 60; // Total Min In One Hour
var day = hour * 24; // Total Hour In One Day

function settimer() {
var now = new Date();
var remain = end - now; // Get The Difference Between Current and entered date time
if (remain < 0) {
clearInterval(timer);
//document.getElementById("timer_value").innerHTML = 'Reached!';
return;
}

var hours = Math.floor((remain % day) / hour); // Get Remaining Hours
var minutes = Math.floor((remain % hour) / minute); // Get Remaining Min
var seconds = Math.floor((remain % minute) / second); // Get Remaining Sec



let div2 = document.querySelector("#countertext > span.timerHours");
div2.innerText = PadLeft(hours,2);

let div3 = document.querySelector("#countertext > span.timerMinutes");
div3.innerText = PadLeft(minutes,2);

let div4 = document.querySelector("#countertext > span.timerSeconds");
div4.innerText = PadLeft(seconds,2);

}

timer = setInterval(settimer, 1000);

function PadLeft(value, length) {
    return (value.toString().length < length) ? PadLeft("0" + value, length) : 
    value;
}

