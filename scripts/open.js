// --OPEN.JS--  This is for openyesno.html -- Depending on time of day will determine objects on page  //
var today = new Date();
var currentDay = today.getDay();
var currentHour = today.getHours();

if (currentDay == 0) {
	document.write("<h1 class='todayIsClosed'>Today is <em>Sunday</em> so we are currently..</h1><h1 class='closedText'> CLOSED</h1>");
} else if (currentDay == 1) {
	document.write("<h1 class='todayIsClosed'>Today is <em>Monday</em> so we are currently..</h1><h1 class='closedText'> CLOSED</h1>");
} else if (currentDay == 2 && currentHour > 5 && currentHour < 16) {
	document.write("<h1 class='todayIsOpen'>We are currently</h1><h1 class='openText'> OPEN!</h1>");
} else if (currentDay == 3 && currentHour > 5 && currentHour < 16) {
	document.write("<h1 class='todayIsOpen'>We are currently</h1><h1 class='openText'> OPEN!</h1>");
} else if (currentDay == 4 && currentHour > 5 && currentHour < 16) {
	document.write("<h1 class='todayIsOpen'>We are currently</h1><h1 class='openText'> OPEN!</h1>");
} else if (currentDay == 5 && currentHour > 5 && currentHour < 16) {
	document.write("<h1 class='todayIsOpen'>We are currently</h1><h1 class='openText'> OPEN!</h1>");
} else if (currentDay == 6 && currentHour > 5 && currentHour < 16) {
	document.write("<h1 class='todayIsOpen'>Today is <em>Saturday</em> so we are currently..</h1><h1 class='openText'> OPEN <em>until noon!</em></h1>");
} else {
	document.write("<h1 class=todayIsClosed>We are currently..</h1><h1 class='closedText'> CLOSED</h1>");
}
