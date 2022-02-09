
<?php



// register the user to the database
function registerNewEvent($firstName, $lastName, $email, $phone, $purpose, $date, $time) {

    require "../database/connect.php";

    $firstNameEntry = mysqli_real_escape_string($conn, $firstName);

    $lastNameEntry = mysqli_real_escape_string($conn, $lastName);

    $emailEntry = mysqli_real_escape_string($conn, $email);

    $phoneEntry = mysqli_real_escape_string($conn, $phone);

    $purposeEntry = mysqli_real_escape_string($conn, $purpose);

    $dateEntry = mysqli_real_escape_string($conn, $date);

    $timeEntry = mysqli_real_escape_string($conn, $time);

    $users_register = "INSERT INTO `event` (`firstname`, `lastname`, `email`, `phone`, `time`, `date`, `comment`) VALUES('$firstNameEntry', '$lastNameEntry', '$emailEntry', '$phoneEntry', '$timeEntry', '$dateEntry', '$purposeEntry')";

    $users_result = mysqli_query($conn, $users_register);

    if($users_result) {

        echo "Added";

    } else  {

        echo mysqli_error($conn);

    }



}


// update information

function UpdateEvent($firstNamel, $lastNamel, $emaill, $phonel, $purposel, $datel, $timel, $hideIdl) {

    require "../database/connect.php";

    $firstNameEntryl = mysqli_real_escape_string($conn, $firstNamel);

    $lastNameEntryl = mysqli_real_escape_string($conn, $lastNamel);

    $emailEntryl = mysqli_real_escape_string($conn, $emaill);

    $phoneEntryl = mysqli_real_escape_string($conn, $phonel);

    $purposeEntryl = mysqli_real_escape_string($conn, $purposel);

    $dateEntryl = mysqli_real_escape_string($conn, $datel);

    $timeEntryl = mysqli_real_escape_string($conn, $timel);

    $idEntryl = mysqli_real_escape_string($conn, $hideIdl);

    $users_register = "UPDATE `event` SET `firstname`= '$firstNameEntryl', `lastname`= '$lastNameEntryl', `email`= '$emailEntryl', `phone`= '$phoneEntryl', `time`= '$timeEntryl' , `date`= '$dateEntryl', `comment`= '$purposeEntryl' WHERE `id`= '$idEntryl' LIMIT 1";

    $users_result = mysqli_query($conn, $users_register);

    if($users_result) {

        echo "up";

    } else  {

        echo mysqli_error($conn);

    }



}




?>