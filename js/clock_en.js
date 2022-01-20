function clock() {
    var d = new Date();

    var day = d.getDate();
    var hours = d.getHours();
    var minutes = d.getMinutes();
    var seconds = d.getSeconds();

    month = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    var N_D = new Date();
    var weekday = new Array(7);
    weekday[0] = "Воскресенье";
    weekday[1] = "Понедельник";
    weekday[2] = "Вторник";
    weekday[3] = "Среда";
    weekday[4] = "Четверг";
    weekday[5] = "Пятница";
    weekday[6] = "Суббота";

    if (day <= 9) day = "0" + day;
    if (hours <= 9) hours = "0" + hours;
    if (minutes <= 9) minutes = "0" + minutes;
    if (seconds <= 9) seconds = "0" + seconds;

    time = "<span><span class='txt'>" + hours + "</span><span class='dot'>:</span><span class='txt'>" + minutes + "</span><span class='dot'>:</span><span class='txt'>" + seconds + "</span></span>";
    date = "<span>" + day + " " + month[d.getMonth()] + ", " + d.getFullYear() + "</span>";

    if (document.layers) {
        document.layers.doc_time.document.close();
    } else {
        document.getElementById("time").innerHTML = time;
        document.getElementById("date").innerHTML = date;
    }

    setTimeout("clock()", 1000);
}

