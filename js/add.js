
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

// store the date and time
timeOnly = hours + ":" + mins ;
dateOnly = day + "/" + month +"/" + year;




let btn = document.querySelector(".btn_clk");


btn.addEventListener("click", function() {

    //  accepts the input parameters
    let firstName = document.querySelector(".input1").value;
    let lastName = document.querySelector(".input2").value;
    let email = document.querySelector(".input3").value;
    let phone = document.querySelector(".input4").value;
    let purpose = document.querySelector(".input5").value;

    $.ajax({
        url: "../process/forms.php", // containers our query logic
        method: "POST",
        data : {
            firstname: firstName,
            lastname: lastName,
            emailonly: email,
            phoneonly: phone,
            purposeonly: purpose,
            dateonly: dateOnly,
            timeonly: timeOnly
        },
        success: function(data) {

            if(data.trim() == "err1") {
                alert("Please Enter Your First Name")
            }

            if(data.trim() == "err2") {
                alert("Please Enter Your Last Name")
            }

            if(data.trim() == "err3") {
                alert("Please Enter Your Event Or Purpose")
            }

            if(data.trim() == "err1err2") {
                alert("Please Enter Your First and Last Name")
            }

            if(data.trim() == "err1err3") {
                alert("Please Enter Your First Name and Your Event or Purpose")
            }

            if(data.trim() == "err2err3") {
                alert("Please Enter Your last Name and Your Event or Purpose")
            }

            if(data.trim() == "err1err2err3") {
                alert("Please Enter Your Fist Name, last Name and Your Event or Purpose")
            }

            if(data.trim() == "Added") {
                alert("Event Added Successfully")

                document.querySelector(".input1").value = "";
                document.querySelector(".input2").value = "";
                document.querySelector(".input3").value = "";
                document.querySelector(".input4").value = "";
                document.querySelector(".input5").value = "";
            }



        }

    });

    

})

