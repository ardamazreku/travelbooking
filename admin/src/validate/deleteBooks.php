<?php
session_start();

require "../../../database/connect.php";

//marrja e te dhenave me metoden GET
if(isset($_SESSION['emri']) && isset($_SESSION['pershkrimi']) && $_SESSION['fotografia'] == 1 && isset($_GET['p_id'])) {

    $p_id = $_GET['p_id'];
    $deleteQuery = "DELETE FROM packages where p_id='$p_id'";

    //ekzekutimi i query-it per fshirjen
    if(mysqli_query($connect, $deleteQuery)) {
        echo '<script type="text/javascript">';
        echo 'alert("User deleted successfully!")';
        echo '</script>';
        echo '<script> location.replace("../../users.php"); </script>';
    }
    else {
        echo '<script type="text/javascript">';
        echo 'alert("Something went wrong!")';
        echo '</script>';
        echo '<script> location.replace("../../users.php"); </script>';
    }
}
?>