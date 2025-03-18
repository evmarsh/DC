<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dick Clark's</title>
    <link rel="icon" type="image/x-icon" href="resources/dcLogo.png">
    <meta charset="utf-8">
    <!--Mobile first, scales window to device size-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Favicon Stuff-->
    <link rel="apple-touch-icon" sizes="57x57" href="resources/favi_stuff/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="resources/favi_stuff/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="resources/favi_stuff/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="resources/favi_stuff/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="resources/favi_stuff/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="resources/favi_stuff/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="resources/favi_stuff/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="resources/favi_stuff/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favi_stuff/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="resources/favi_stuff/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favi_stuff/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="resources/favi_stuff/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favi_stuff/favicon-16x16.png">
    <link rel="manifest" href="resources/favi_stuff/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="resources/favi_stuff/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  rel="stylesheet" href="css/font-awesome.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
</head>

<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top py-2">
      <div class="container-fluid h-50">
        <a class="navbar-brand" href="index.html">
          <img src="resources/dcLogo.png" alt="Dick Clark's" style="width:50px" class="rounded-5">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link btn btn-secondary px-4 text-light" href="hours_and_location.html">Hours & Location</a>
            </li>
            <li class="nav-item mx-auto">
              <div class="dropdown">
                <button type="button" class="btn btn-dark px-4 dropdown-toggle text-light" data-bs-toggle="dropdown">Menu</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item btn btn-secondary" href="menu.html">DC Menu</a></li>
                  <li><a class="dropdown-item btn btn-secondary" href="catering_menu.html">Catering Menu</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-secondary px-4 text-light" href="about_us.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-secondary px-4 text-light" href="book_a_party.php">Book a Party</a>
            </li>
            <li class="nav-item mx-auto">
              <div class="dropdown">
                <button type="button" class="btn btn-dark px-4 dropdown-toggle text-light" data-bs-toggle="dropdown">Order Online</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item btn btn-secondary" href="https://order.online/store/dick-clark's-family-restaurant-princeton-24897238/?hideModal=true&pickup=true&redirected=true" target="_blank">DoorDash</a></li>
                  <li><a class="dropdown-item btn btn-secondary" href="https://www.ubereats.com/store/dick-clarks-family-restaurant/LtUoSCBIWNivm6_vTPg5nA" target="_blank">UberEats</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $configs = include('../config.php');

        $servername = $configs->host;
        $username = $configs->username;
        $password = $configs->password;
        $dbname = $configs->dbname;

        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phoneNumber = $_POST["phoneNumber"];
        $partyDate = $_POST["partyDate"];
        $partyTime = $_POST["partyTime"];
        $numPeople = $_POST["numPeople"];
        $partyLocation = $_POST["partyLocation"];
        $endTime = $_POST["endTime"];
        $bookedDate = $_POST["bookedDate"];
        $bookedTime = $_POST["bookedTime"];
        $status = "Not Created";
        $comments = $_POST["comments"];

        //Remove AM/PM
        $amPM = array("a", "A", "p", "P", "m", "M", " ");
        $partyTime = str_replace($amPM, "", $partyTime);
        $bookedTime = str_replace($amPM, "", $bookedTime);

        $partyTime = $partyTime . ":00";
        $endTime = $endTime . ":00";

        //Make sure there are no other parties in same location at same time
        $stmt = $conn->prepare("SELECT * FROM parties WHERE partyDate='".$partyDate."' AND partyTime='".$partyTime."' AND partyLocation='".$partyLocation."'");
        $stmt->execute();

        $stmt->store_result();

        $outputHeader = "Oops...";
        $outputText = "This date and time are not available in this location.";
        $outputLink = '<a class="btn btn-primary" href="book_a_party.php">Return</a>';

        if ($stmt->num_rows == 0) {
            $stmt = $conn->prepare("INSERT INTO parties (firstName, lastName, phoneNumber, numberPeople, partyLocation, endTime, partyDate, partyTime, bookDate, bookTime, status, comments)
            values (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssssssss", $firstName, $lastName, $phoneNumber, $numPeople, $partyLocation, $endTime, $partyDate, $partyTime, $bookedDate, $bookedTime, $status, $comments);
            $stmt->execute();
            $outputHeader = "Party has been booked!";
            $outputText = "";
            $outputLink = '<a class="btn btn-primary" href="index.html">Return</a>';
        }

        $stmt->close();
        $conn->close();
    ?>

    <div class="container-fluid bg-light">
        <div id="bottomBox" class="d-flex flex-column justify-content-center bg-white">
            <div class="container p-5 my-5 border border-2 rounded rounded-2 w-75">
                <h4 class="display-4 border-bottom"><?php echo $outputHeader ?></h4>
                <p><?php echo $outputText ?></p>
                <?php echo $outputLink ?>
            </div>
        </div>
    </div>

</body>
</html>