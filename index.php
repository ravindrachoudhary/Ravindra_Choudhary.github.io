<?php 
if(isset($_POST['name'])){
  $servername = "localhost";
    $username = "root";
    $password = "3215";
   // $dbname="project2";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn = new mysqli($servername,$username,$password);

    if (!$conn)
    {
        // die("Connectin failed :" .$conn);
        $conn->close();
    }

    else
        // echo "connected..";

    
    $sql = "INSERT INTO `travelly`.`users`(`username`, `email`,`message`) VALUES ('${name}','${email}','${message}')";

    if ($conn->query($sql)== true) {
        // echo "values inserted successfully";
    } else{
        // echo $sql;
        // echo "error";
        // echo $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="This is one and only international agency thay provide visa with traveeling facility">
    <meta name="robot" content="index,follow">
    <link rel="icon" href="icons/airplane.svg">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Travelly</title>
</head>

<body>

    <header id="main-head">
        <nav>
            <h2 id="logo">Travelly</h2>
            <ul>
                <li><a href="#location">Location</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li id="contact-link"><a href="#">Contact</a></li>

            </ul>

        </nav>
    </header>

    <section id="showcase">
    <h2>Travel Beyond Limits</h2>
        <h3>Start your at affodable price with Travelly <br>contact us now below</h3>
        <button>Book now</button>
    </section>

    <section id="location">
        <header id="location-head">
            <h2>Visit interesting cities</h2>
            <h3>London,Barcelona,Rio de Janiero,New Orleans,Tokyo,Berlin,Dubai</h3>
        </header>
        <img src="./img/cloud.png" class="cloud cloud-animation-1">
        <img src="./img/cloud.png" class="cloud cloud-animation-2">
    </section>


    <section id="benefits">
        <header id="benefits-head">
            <h2>The Perfect Travel</h2>
            <h3>We offer trips and travel services which suit any type of explorer.<br> Experience with Travelly is unlike any other.</h3>
        </header>
        <div class="cards">
            <div class="card">
                <div class="card-wrap">
                    <img src="./icons/route-solid.svg" alt="">
                </div>
                <h4>Travel</h4>
                <p>Travel in over 250 countries with no effort.Choose from a variety of solo or tour group packages.</p>
            </div>

            <div class="card">
                <div class="card-wrap">
                    <img src="./icons/bed-solid.svg" alt="">
                </div>
                <h4>Hotel</h4>
                <p>Four and five star hotels located near popular areas, with all the amenities to fit your needs and style.</p>
            </div>

            <div class="card">
                <div class="card-wrap">
                    <img src="./icons/plane-departure-solid.svg" alt="">
                </div>
                <h4>Fly</h4>
                <p>Flight included in every purchased trip. Choose from a selection of local and trusted airline partnerships.</p>
            </div>

        </div>

    </section>

    <section class="form-section" >
        <!-- <form method="POST" action="<//?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
        <form action="index.php" method="POST" >
            <i class="far fa-times-circle fa-5x" id="icon"></i>
            <label for="name"><Strong>Name</Strong></label>
            <input type="text" id="name" name="name" required>
            <label for="email"><Strong>Email</Strong></label>
            <input type="email" id="email" name="email" required>
            <label for="Message"><Strong>message</Strong></label>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            <!-- <input type="submit" value="submit"> -->
            <button type="submit" id="submit-btn">Submit</button>
        </form>
    </section>


    <footer>
        <h3>Travelly<sup>&reg;</sup></h3>
        <ul>
            <li><a href="#"><img src="./icons/twitter.svg" alt="twitter" title="Twitter"></a></li>
            <li><a href="#"><img src="./icons/instagram.svg" alt="instagram" title="Instagram"></a></li>
            <li><a href="#"><img src="./icons/youtube.svg" alt="youtube" title="Youtube"></a></li>
        </ul>
    </footer>
    <script src="./index.js"></script>

</body>

</html>