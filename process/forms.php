

<?php

// for adding
if(isset($_POST['firstname'])) {

    $firstName = htmlspecialchars(trim($_POST['firstname']), ENT_QUOTES);
    $lastName = htmlspecialchars(trim($_POST['lastname']), ENT_QUOTES);
    $email = htmlspecialchars(trim($_POST['emailonly']), ENT_QUOTES);
    $phone = htmlspecialchars(trim($_POST['phoneonly']), ENT_QUOTES);
    $purpose = htmlspecialchars(trim($_POST['purposeonly']), ENT_QUOTES);
    $date = htmlspecialchars(trim($_POST['dateonly']), ENT_QUOTES);
    $time = htmlspecialchars(trim($_POST['timeonly']), ENT_QUOTES);


    $errors = [];


    if(empty($firstName)){

		$errors[] = "err1";

	}

    if(empty($lastName)){

		$errors[] = "err2";

	}

    if(empty($purpose)){

		$errors[] = "err3";

	}


    if(empty($errors)){

        require "../function/functions.php";

		$feedback = registerNewEvent($firstName, $lastName, $email, $phone, $purpose, $date, $time);

        echo $feedback;

    } else {
        
        forEach($errors as $error) {

            echo "{$error}";

        }

    }

}


// For updating
if(isset($_POST['fname'])) {

    $firstNamel = htmlspecialchars(trim($_POST['fname']), ENT_QUOTES);
    $lastNamel = htmlspecialchars(trim($_POST['lastname']), ENT_QUOTES);
    $emaill = htmlspecialchars(trim($_POST['emailonly']), ENT_QUOTES);
    $phonel = htmlspecialchars(trim($_POST['phoneonly']), ENT_QUOTES);
    $purposel = htmlspecialchars(trim($_POST['purposeonly']), ENT_QUOTES);
    $datel = htmlspecialchars(trim($_POST['dateonly']), ENT_QUOTES);
    $timel = htmlspecialchars(trim($_POST['timeonly']), ENT_QUOTES);
    $hideIdl = htmlspecialchars(trim($_POST['id']), ENT_QUOTES);


    $errorsl = [];


    if(empty($firstNamel)){

		$errors[] = "err1";

	}

    if(empty($lastNamel)){

		$errors[] = "err2";

	}

    if(empty($purposel)){

		$errors[] = "err3";

	}


    if(empty($errors)){

        require "../function/functions.php";

		$feedback = UpdateEvent($firstNamel, $lastNamel, $emaill, $phonel, $purposel, $datel, $timel, $hideIdl);

        echo $feedback;

    } else {
        
        forEach($errors as $error) {

            echo "{$error}";

        }

    }

}




?>