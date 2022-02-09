<style>


p#next_num0 {
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
}

.show-text {
    margin-bottom: 20px;
    overflow: hidden;
    background-color: white;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
}

.ok {
    display: flex;
    justify-content: center;
    overflow: auto;
}

table {
    overflow: auto;
}

#hd {
    padding: 20px;
}

#dh {
    padding: 20px;
}



</style>

<?php

require "database/connect.php";

$event_query = "SELECT * FROM `event`";

$event_result = mysqli_query($conn, $event_query);

if($event_result) {

    echo '
        <!-- declaring the container colum-->
        <div class="col-lg-12">
            <!-- making the container to be in a row-->
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px; margin-top: 20px;">
                    <!-- gives it the card feeling -->
                    <div class="card" style="border: none">
                        <div class="card-header" style="border: none; background: lightblue">
                        <h3 style="text-align: center; color: rgb(23,86,22)">Guest Event Trends</h3>
                        </div>
                        <div class="card-body ok">
                            <table>
                                <thead>
                                    <tr>
                                        <th id="hd">First Name</th>
                                        <th id="hd">Last Name</th>
                                        <th id="hd">Comment</th>
                                        <th id="hd">Date</th>
                                        <th id="hd">Time</th>
                                    </tr>
                                </thead>
                                <tbody>
    
    ';

    while ($row = mysqli_fetch_array($event_result, MYSQLI_ASSOC)) {

        $id = $row['id'];
        $firstName = $row['firstname'];
        $lastName = $row['lastname'];
        $timeOnly = $row['time'];
        $dateOnly = $row['date'];
        $comment = $row['comment'];

        echo '
                    <tr>
                        <td id="dh">'.$firstName.'</td>
                        <td id="dh">'.$lastName.'</td>
                        <td id="dh">'.$comment.'</td>
                        <td id="dh">'.$dateOnly.'</td>
                        <td id="dh">'.$timeOnly.'</td>
                        <td><button id="many'.$id.'">Edit</button></td>
                        <td><button id="money'.$id.'">Delete</button></td>
                        <script>
                        document.getElementById("money'.$id.'").addEventListener("click", function() {
                            let askUser = confirm("Do you want to remove this item")

                            if(askUser == true) {

                                $.ajax({
                                    url: "delete.php", // containers our query logic
                                    method: "POST",
                                    data : {
                                        ok: '.$id.'
                                    },
                                    success: function(data) {

                                        if(data.trim() == "del") {

                                            window.location.href = "index.php";

                                        }

                                        

                                    }

                                });
                            }
                        })

                        document.getElementById("many'.$id.'").addEventListener("click", function() {
                            let askUser = confirm("Do you want to edit this item")

                            if(askUser == true) {

                                window.location.href = "edit.php?id='.base64_encode($id).'";
                                
                            }
                        })
                        </script>
                    </tr>
            ';   

    }


    echo ' 
                                </tbody>
                            </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    ';

}