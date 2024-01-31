
var timer;

currentTime = new Date();
clearInterval(timer);
// FIN DE LA CUENTA ATRAS
var timer_month = currentTime.getMonth()+1; // MES
var timer_day = currentTime.getDate()+1; // DIA
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
    var days = Math.floor(remain / day); // Get Remaining Days
    var hours = Math.floor((remain % day) / hour); // Get Remaining Hours
    var minutes = Math.floor((remain % hour) / minute); // Get Remaining Min
    var seconds = Math.floor((remain % minute) / second); // Get Remaining Sec

    let div1 = document.querySelectorAll(".timerDays");
        div1[0].innerHTML = days;
        div1[1].innerHTML = days;
    
    let div2 = document.querySelectorAll(".timerHours");
        div2[0].innerHTML = hours;
        div2[1].innerHTML = hours;
    
    let div3 = document.querySelectorAll(".timerMinutes");
        div3[0].innerHTML = minutes;
        div3[1].innerHTML = minutes;
    
    let div4 = document.querySelectorAll(".timerSeconds");
        div4[0].innerHTML = seconds;
        div4[1].innerHTML = seconds;

}

timer = setInterval(settimer, 1000); // Display Timer In Every 1 Sec
