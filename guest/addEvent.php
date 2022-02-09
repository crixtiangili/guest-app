<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Event</title>

    <!-- link to bootstrap style -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

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

<!-- Add Entry Form -->
<div class="container">
<h2 >Add New Event</h2>
    <div class="row">
            <div class="col-md-6 m-auto">

                <form>

                        <div class="form-label-group">
                            <input type="text" class="form-control input1" autofocus>
                            <label>Enter Your First Name <span style="color: red;">*</span></label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" class="form-control input2" autofocus>
                            <label>Enter Your Last Name <span style="color: red;">*</span></label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" class="form-control input3" autofocus>
                            <label>Enter Your Email</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" class="form-control input4" autofocus>
                            <label>Enter YourPhone</label>
                        </div>

                        <div class="form-label-group">
                            <textarea name='info' class="form-control input5"></textarea>
                            <label>Enter The Purpose Or Event <span style="color: red;">*</span></label>
                        </div>

                        <div class="my_btn">
                            <button type="button" class="btn btn-lg btn-primary btn_clk">Add Event</button>
                        </div>
                        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2021 Guest Book</p>
                </form>
            </div>
    </div>
    

    <!-- add javascript to accept the information -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery1.min.js"></script>
    <script src="../js/add.js"></script>
</div>
</body>
</html>