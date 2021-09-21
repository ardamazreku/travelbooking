<?php
session_start();

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

<!-- packages section starts -->

<section class="packages" id="packages">

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

    <div class="box-container">

        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Mumbai, India </h3>
                <p>Visit Mumbai!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMumbai%20%28BOM%20-%20Chhatrapati%20Shivaji%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AMumbai%20%28BOM%20-%20Chhatrapati%20Shivaji%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hawaii, US </h3>
                <p>Visit Hawaii!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href=" https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AHonolulu%20%28HNL%20-%20Daniel%20K.%20Inouye%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AHonolulu%20%28HNL%20-%20Daniel%20K.%20Inouye%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Sydney, Australia </h3>
                <p>Visit Sydney!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"> $120.00 <span>$160.00</span> </div>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Paris, France </h3>
                <p>Visit Paris!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3AParis%20%28PAR%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AParis%20%28PAR%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tokyo, Japan </h3>
                <p>Visit Tokyo!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ATokyo%20%28TYO%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ATokyo%20%28TYO%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Cairo, Egypt </h3>
                <p>Visit Cairo!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ACairo%20%28CAI%20-%20Cairo%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ACairo%20%28CAI%20-%20Cairo%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/f-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Venice, Italy </h3>
                <p>Visit Venice!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AVenice%20%28VCE%20-%20Marco%20Polo%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AVenice%20%28VCE%20-%20Marco%20Polo%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/f-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> New York, US </h3>
                <p>Visit New York!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3ANew%20York%2C%20NY%20%28NYC-All%20Airports%29%2Cdeparture%3A10%2F15%2F2021TANYT&leg2=from%3ANew%20York%2C%20NY%20%28NYC-All%20Airports%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A10%2F25%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/f-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Istanbul, Turkey </h3>
                <p>Visit Istanbul!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AIstanbul%20%28IST%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AIstanbul%20%28IST%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/f-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> London, UK </h3>
                <p>Visit London!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ALondon%20%28LON-All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ALondon%20%28LON-All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/f-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Prague, Czech Republic </h3>
                <p>Visit Prague!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3APrague%20%28PRG%20-%20Vaclav%20Havel%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3APrague%20%28PRG%20-%20Vaclav%20Havel%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/f-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Amsterdam, Netherlands </h3>
                <p>Visit Amsterdam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AAmsterdam%20%28AMS%20-%20Schiphol%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AAmsterdam%20%28AMS%20-%20Schiphol%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/h-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Vienna, Austria </h3>
                <p>Visit Vienna!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AVienna%20%28VIE%20-%20Vienna%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AVienna%20%28VIE%20-%20Vienna%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/h-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Berlin, Germany </h3>
                <p>Visit Berlin!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABerlin%20%28BER%20-%20Brandenburg%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABerlin%20%28BER%20-%20Brandenburg%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/h-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Madrid, Spain </h3>
                <p>Visit Madrid!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMadrid%20%28MAD%20-%20Adolfo%20Suarez%20Madrid-Barajas%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AMadrid%20%28MAD%20-%20Adolfo%20Suarez%20Madrid-Barajas%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/h-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Edinburgh, UK </h3>
                <p>Visit Edinburgh!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AEdinburgh%20%28EDI%20-%20Edinburgh%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AEdinburgh%20%28EDI%20-%20Edinburgh%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/h-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Bergen, Norway </h3>
                <p>Visit Bergen!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABergen%20%28BGO%20-%20Flesland%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABergen%20%28BGO%20-%20Flesland%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/h-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Helsinki, Finland </h3>
                <p>Visit Helsinki!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AHelsinki%20%28HEL%20-%20Vantaa%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AHelsinki%20%28HEL%20-%20Vantaa%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/j-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Stockholm, Sweden </h3>
                <p>Visit Stockholm!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AStockholm%20%28STO%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AStockholm%20%28STO%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/j-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Zurich, Switzerland </h3>
                <p>Visit Zurich!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AZurich%20%28ZRH%20-%20Zurich%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AZurich%20%28ZRH%20-%20Zurich%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/j-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Lisbon, Portugal </h3>
                <p>Visit Lisbon!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ALisbon%20%28LIS%20-%20Humberto%20Delgado%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ALisbon%20%28LIS%20-%20Humberto%20Delgado%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/j-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tirana, Albania </h3>
                <p>Visit Tirana!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3ALondon%20%28LON%20-%20All%20Airports%29%2Cto%3ATirana%20%28TIA-Nene%20Tereza%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ATirana%20%28TIA-Nene%20Tereza%20Intl.%29%2Cto%3ALondon%20%28LON%20-%20All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/j-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Pristina, Kosovo </h3>
                <p>Visit Pristina!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3ALondon%20%28LON-All%20Airports%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3ALondon%20%28LON-All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/j-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Skopje, Macedonia </h3>
                <p>Visit Skopje!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3ALondon%20%28LON-All%20Airports%29%2Cto%3ASkopje%20%28SKP%20-%20Alexander%20the%20Great%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ASkopje%20%28SKP%20-%20Alexander%20the%20Great%29%2Cto%3ALondon%20%28LON-All%20Airports%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Moscow, Russia </h3>
                <p>Visit Moscow!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMoscow%20%28MOW%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AMoscow%20%28MOW%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Los Angeles, US </h3>
                <p>Visit LA!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ALos%20Angeles%20%28LAX%20-%20Los%20Angeles%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ALos%20Angeles%20%28LAX%20-%20Los%20Angeles%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Seoul, South Korea </h3>
                <p>Visit Seoul!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ASeoul%20%28ICN%20-%20Incheon%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ASeoul%20%28ICN%20-%20Incheon%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Athens, Greece </h3>
                <p>Visit Athens!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AAthens%20%28ATH%20-%20Eleftherios%20Venizelos%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AAthens%20%28ATH%20-%20Eleftherios%20Venizelos%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Mexico City, Mexico </h3>
                <p>Visit Mexico!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AMexico%20City%20%28MEX%20-%20Mexico%20City%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AMexico%20City%20%28MEX%20-%20Mexico%20City%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/i-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Rio de Janeiro, Brazil </h3>
                <p>Visit Rio de Janeiro!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ARio%20de%20Janeiro%20%28RIO-All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ARio%20de%20Janeiro%20%28RIO-All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Delhi, India </h3>
                <p>Visit Delhi!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ADelhi%20%28DEL%20-%20Indira%20Gandhi%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ADelhi%20%28DEL%20-%20Indira%20Gandhi%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kuala Lumpur, Malaysia </h3>
                <p>Visit Kuala Lumpur!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AKuala%20Lumpur%20%28KUL%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AKuala%20Lumpur%20%28KUL%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Dubai, United Arab Emirates </h3>
                <p>Visit Dubai!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ADubai%20%28DXB%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ADubai%20%28DXB%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Bangkok, Thailand </h3>
                <p>Visit Bangkok!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABangkok%20%28BKK%20-%20All%20Airports%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABangkok%20%28BKK%20-%20All%20Airports%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k-5.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hong Kong, China </h3>
                <p>Visit Hong Kong!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cto%3AHong%20Kong%20%28HKG-Hong%20Kong%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AHong%20Kong%20%28HKG-Hong%20Kong%20Intl.%29%2Cto%3APristina%20%28PRN%20-%20Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/k-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Singapore </h3>
                <p>Visit Singapore!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ASingapore%20%28SIN%20-%20Changi%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ASingapore%20%28SIN%20-%20Changi%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Toronto, Canada </h3>
                <p>Visit Toronto!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AToronto%20%28YYZ%20-%20Pearson%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AToronto%20%28YYZ%20-%20Pearson%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l-2.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Warsaw, Poland </h3>
                <p>Visit Warsaw!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AWarsaw%20%28WAW%20-%20Frederic%20Chopin%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AWarsaw%20%28WAW%20-%20Frederic%20Chopin%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kyiv, Ukraine </h3>
                <p>Visit Kyiv!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3AKyiv%20%28KBP%20-%20Borispol%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3AKyiv%20%28KBP%20-%20Borispol%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Bucharest, Romania </h3>
                <p>Visit Bucharest!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABucharest%20%28OTP%20-%20Henri%20Coanda%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABucharest%20%28OTP%20-%20Henri%20Coanda%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Copenhagen, Denmark </h3>
                <p>Visit Copenhagen!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ACopenhagen%20%28CPH%20-%20Kastrup%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ACopenhagen%20%28CPH%20-%20Kastrup%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Budapest, Hungary </h3>
                <p>Visit Budapest!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="https://www.travelocity.com/Flights-Search?leg1=from%3APristina%20%28PRN-Pristina%20Intl.%29%2Cto%3ABudapest%20%28BUD%20-%20Ferenc%20Liszt%20Intl.%29%2Cdeparture%3A10%2F1%2F2021TANYT&leg2=from%3ABudapest%20%28BUD%20-%20Ferenc%20Liszt%20Intl.%29%2Cto%3APristina%20%28PRN-Pristina%20Intl.%29%2Cdeparture%3A10%2F10%2F2021TANYT&mode=search&options=carrier%3A%2A%2Ccabinclass%3A%2Cmaxhops%3A1%2Cnopenalty%3AN&pageId=0&passengers=adults%3A1%2Cchildren%3A0%2Cinfantinlap%3AN&trip=roundtrip"
                   class="btn">Search</a>
            </div>
        </div>

        <div class="box">
            <img src="images/l-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i>  </h3>
                <p>Visit Bangkok!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href=""
                   class="btn">Search</a>
            </div>
        </div>

    </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>

<?php include "includes/template/footer.php";?>

</body>
</html>