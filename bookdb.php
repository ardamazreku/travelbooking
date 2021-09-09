<?php
    
$leaving = $_POST['leaving'];
$going = $_POST['going'];
$nripersonave = $_POST['nripersonave'];
$departing = $_POST['departing'];
$returning = $_POST['returning'];
$email = $_POST['email'];

//konektimi me db
$server = 'localhost:3307';
$user = 'root';
$password = '';
$dbName = 'travelbooking';

$connect = mysqli_connect($server,$user,$password,$dbName);

  //Kjo pjese na nevojitet te shikojme nese ekziston perdoruesi me email te njejte
  $queryEmail = mysqli_query($connect, "SELECT * FROM booking WHERE email='$email';");
  $countEmail = @mysqli_num_rows($queryEmail);

  $send = true;

    //errori i pergjithshem
    if(empty($leaving) && empty($going) && empty($nripersonave) && empty($departing) && empty($returning) && empty($email)){
	$errorGen = "Te gjitha fushat duhet te plotesohen!";
	$send = false;
   }

   else {
      //nese fusha e leaving eshte e zbrazet
	  if(empty($leaving)){
		$errorLeaving = "Fusha duhet te plotesohet!";
		$send = false;
	}

	 else {
		//nese qyteti permban edhe karaktere tjera jo-shkronje
		if(!preg_match("/^[a-zA-Z ]*$/", $leaving)){
            $errorLeaving = "Qyteti duhet te permbaje vetem shkronja!";
			$send = false;
		}
	}
       
     if(empty($going)){
         $errorGoing = "Fusha duhet te plotesohet!";
         $send = false;
	}

     if(empty($nripersonave)){
		$errorNriPersonave = "Fusha duhet te plotesohet!";
		$send = false;
	}

    //nese fusha e dates eshte e zbrazet
	if(empty($departing)){
		$errorDeparting = "Fusha duhet te plotesohet!";
		$send = false;
	}
   
  //nese fusha e ores eshte e zbrazet
	if(empty($returning)){
		$errorReturning = "Fusha duhet te plotesohet!";
		$send = false;
	}
    
	//nese fusha e email adreses eshte e zbrazet
	if(empty($email)){
		$errorEmail = "Fusha duhet te plotesohet!";
		$send = false;
	}

	//nese perdoruesi nuk ekziston
    else {
		$query1 = "SELECT * FROM booking WHERE email = '$email';";
		$query1Res = mysqli_query($connect, $query1);
		$count1 = mysqli_num_rows($query1Res);
	}
	
    if($send == true){

		//tani jemi gati te insertojme perdoruesin e ri ne db
		//ne rastin tone do te bejme nje insertim
		$querysql = "INSERT INTO booking
			(leaving, going, nripersonave, departing, returning, email)
			VALUES ('$leaving', '$going', '$nripersonave', '$departing', '$returning', '$email');";

		//funksioni ne vazhdim perdoret per te ekzekutuar deklarata te shumta te sql query ne mysql
		if (mysqli_multi_query($connect, $querysql)){
            echo '<script type="text/javascript">';
            echo 'alert("Reservation is completed successfully!")';  
            echo '</script>';
		 }
      }
   }
