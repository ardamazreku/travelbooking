<?php
session_start();

require "../../../database/connect.php";

//marrja e te dhenave me metoden GET
if(isset($_SESSION['email']) && isset($_SESSION['roli']) && $_SESSION['roli'] == 1 && isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM perdoruesi where id='$id'";

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