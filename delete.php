<?php 

    if(isset($_POST['ok'])) {
        
        require "database/connect.php";

        $id = $_POST['ok'];

        $del = "DELETE FROM `event` WHERE `id` = $id";

        $rel_del = mysqli_query($conn, $del);

        if($rel_del) {

            echo "del";

        } else {

            echo mysqli_error($conn);
        }
    }
?>