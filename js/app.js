





// set interval for the date to keep on reoccurring
setInterval(function() {
    let date = new Date();

    let hours = date.getHours(); // get the hour in number

    // using an operator to display whether it is am or pm
    const amPm = (hours >= 12)? "pm":"am";
   

    //convert to 12 hours
    // checking if it has exceed 12 the reduce it to 1 2 3... and so on 
    if(hours > 12) {
        hours -= 12;
    };

    let hLength = hours.toString().length; // convert it to string

    // display it with zero
    if (hLength == 1) {
        hours = "0" + hours;
    };
    

    let mins = date.getMinutes(); // get the minutes in number
    let mLength = mins.toString().length; // convert it to string
    // display it with zero
    if (mLength == '1') {
        mins = "0" + mins;
     };

    let seconds = date.getSeconds(); // get the seconds in number
    let sLength = seconds.toString().length; // convert it to string
    // display it with zero
    if (sLength == '1') {
       seconds = "0" + seconds;
    };


    // javascript only display days (0=6) with number so you need an array
    let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    let day = days[date.getDay()];

    // javascript only display month (0-11) with number so you need an array
    let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    let month = months[date.getMonth()];

    let year = date.getFullYear();
    

    let clock = document.getElementById("clock");

    // modifying the html tag
    clock.innerHTML = '<p>' + day + "/" + month +"/" + year + '</p>' + hours + ":" + mins + '<small id="small2">' + amPm + '</small>'+ " " + '<small id="small1">' + seconds + '</small>';

});