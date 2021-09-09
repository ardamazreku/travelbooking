<?php
session_start();

if(isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Book </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Logo -->
    <link rel='shortcut icon' type='image/x-icon' href='images/travel.png'/>
    
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "includes/template/nav.php";?>
    
<!-- book section starts -->

<section class="book" id="book">

    <h1 class="heading">
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span class="space"></span>
        <span>N</span>
        <span>O</span>
        <span>W</span>
    </h1>
    <?php
    $errorGen = $errorLeaving = $errorGoing = $errorNriPersonave = $errorDeparting = $errorReturning = $errorEmail = "";
    $leaving = $going = $nripersonave = $departing = $returning = $email ="";

    //kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //POST

        include 'bookdb.php';
    }
    ?>
    <div class="row">
        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">     
               <div class="inputBox">
                <h3> ✈ Leaving from </h3>
                <input type="text" placeholder="Place name" value="<?php echo $leaving; ?>">
            </div>
                 <?php echo "<span class='error'>$errorLeaving<span>";?>
            <div class="inputBox">
                <h3> ✈ Going to </h3>
                <input type="text" placeholder="Place name" value="<?php echo $going; ?>">
            </div>
                 <?php echo "<span class='error'>$errorGoing<span>";?>
            <div class="inputBox">
                <h3> How many people? </h3>
                <input type="number" placeholder="" value="<?php echo $nripersonave; ?>">
            </div>
                 <?php echo "<span class='error'>$errorNriPersonave<span>";?>
            <div class="inputBox">
                <h3> Departing </h3>
                <input type="date" value="<?php echo $departing; ?>">
            </div>
                <?php echo "<span class='error'>$errorDeparting<span>";?>
            <div class="inputBox">
                <h3> Returning </h3>
                <input type="date" value="<?php echo $returning; ?>">
            </div>
               <?php echo "<span class='error'>$errorReturning<span>";?>
             <div class="inputBox">
                <h3> Email </h3>
                <input type="text" value="<?php echo $email; ?>">
            </div>
               <?php echo "<span class='error'>$errorEmail<span>";?>
            <input type="submit" class="btn" name="send" value="Book now">
               <?php echo "<span class='error'>$errorGen<span>";?>
         </form>
       </div>
    </section>
    
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>
    
<?php include "includes/template/footer.php";?>
    
</body>
</html>
<?php
}

else {
    //nese perdoruesi eshte i kyqur, atehere ridrejtoje ne faqen baze pas kyqjes
    header("Location: index.php");
}
?>