<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Guest Event</title>

    <!-- link to bootstrap style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
            body {
                width: 100%;
                background-color: lightblue;
                color: white;
            }

            .container {
                margin-top: 5%;
            }

            h2 {
                text-align: center;
                margin-bottom: 40px;
            }

            .my_btn {
                display: flex;
                justify-content: center;
            }

            label {
                font-size: 20px;
            }
            
    </style>

</head>
<body>


    <!-- php logic -->

<?php

require "database/connect.php";

$id_code = $_GET['id'];

$id = base64_decode($id_code);

$event = "SELECT * FROM `event` WHERE `id` = $id";

$event_result = mysqli_query($conn, $event);

if($event_result) {

    if (mysqli_num_rows($event_result) == 1) {
        
        session_start();

        $_SESSION['users'] = mysqli_fetch_array($event_result, MYSQLI_ASSOC);

        $_SESSION['fname'] = $_SESSION['users']['firstname'];
        $_SESSION['lname'] = $_SESSION['users']['lastname'];
        $_SESSION['emailonly'] = $_SESSION['users']['email'];
        $_SESSION['phoneonly'] = $_SESSION['users']['phone'];
        $_SESSION['comonly'] = $_SESSION['users']['comment'];
        $_SESSION['idonly'] = $_SESSION['users']['id'];
        

    } else {

        echo mysqli_error($conn);
    }
} else {
    mysqli_error($conn);
}




?>


    <!-- End of php logic -->

<!-- Add Entry Form -->
<div class="container">
<h2 >Update Event</h2>
    <div class="row">
            <div class="col-md-6 m-auto">

                <form>

                        <div class="form-label-group">
                            <input type="text" class="form-control input1"  value="<?php echo $_SESSION['fname'] ?>"autofocus>
                            <label>Enter Your First Name <span style="color: red;">*</span></label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" class="form-control input2"  value="<?php echo $_SESSION['lname'] ?>"autofocus>
                            <label>Enter Your Last Name <span style="color: red;">*</span></label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" class="form-control input3"  value="<?php echo $_SESSION['emailonly'] ?>"autofocus>
                            <label>Enter Your Email</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" class="form-control input4"  value="<?php echo $_SESSION['phoneonly'] ?>"autofocus>
                            <label>Enter YourPhone</label>
                        </div>

                        <div class="form-label-group">
                            <textarea name='info' class="form-control input5"></textarea>
                            <label>Enter The Purpose Or Event <span style="color: red;">*</span></label>
                            <script>
                                document.querySelector(".input5").value = "<?php echo $_SESSION['comonly'] ?>" 
                            </script>
                        </div>

                        <div class="my_btn">
                            <button type="button" class="btn btn-lg btn-primary btn_clk">Update Event</button>
                            <input type="hidden" class="hide_id" value="<?php echo $_SESSION['idonly'] ?>">
                        </div>
                        <p class="mt-5 mb-3 text-muted text-center">&copy; 2021-2022 Guest Book</p>
                </form>
            </div>
    </div>
    

    <!-- add javascript to accept the information -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery1.min.js"></script>
    <script src="js/edit.js"></script>
</div>
</body>
</html>