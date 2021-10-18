<?php
session_start();

require "../../../database/connect.php";

//marrja e te dhenave me metoden GET
if(isset($_SESSION['email']) && isset($_SESSION['roli']) && $_SESSION['roli'] == 1 && isset($_GET['r_pershkrimi'])) {

    $roli = $_GET['roli'];
    //query per fshirjen e lendes perkatese
    $deleteQuery = "DELETE FROM roli where roli ='$roli'";

    //ekzekutimi i query-it per fshirjen
    if(mysqli_query($connect, $deleteQuery)) {
        echo '<script type="text/javascript">';
        echo 'alert("Role deleted successfully!")';
        echo '</script>';
        echo '<script> location.replace("../../roles.php"); </script>';
    }
    else {
        echo '<script type="text/javascript">';
        echo 'alert("Something went wrong!")';
        echo '</script>';
        echo '<script> location.replace("../../roles.php"); </script>';
    }
}
?>