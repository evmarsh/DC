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
              <a class="nav-link btn btn-secondary px-4 text-light" href="#">Book a Party</a>
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

    <div class="bg-dark py-5">
      <div class="container bg-dark">
        <!--Picture Carousel-->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
          </div>
        
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="resources/wide_shot.jpg" alt="Banquet Room" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="resources/long_shot.jpg" alt="Set up table" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="resources/birthday.jpg" alt="Birthday Decorations" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="resources/buffet.jpg" alt="Buffet" class="d-block w-100">
            </div>
          </div>
        
          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-light">
        <div id="bottomBox" class="d-flex flex-column justify-content-center bg-white">
            <div class="container p-5 my-5 border border-2 rounded rounded-2 w-75">
                <h4 class="display-4 border-bottom">Book a Party</h4>
                <form action="party_booked.php" method="POST" id="bookParty">
                    <div class="my-3">
                        <label for="firstName" class="form-label">First Name:</label>
                        <input id="firstName" name="firstName" type="text" class="form-control" placeholder="Enter First Name" required>
                        <span id="firstErr" class="error">Invalid first name</span>
                    </div>
                    <div class="my-3">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Enter Last Name" required>
                        <span id="lastErr" class="error">Invalid last name</span>
                    </div>
                    <div class="my-3">
                        <label for="phone" class="form-label">Phone Number:</label>
                        <input id="phone" name="phoneNumber" type="tel" class="form-control" placeholder="xxxxxxxxxx" required>
                        <span id="phoneErr" class="error">Phone format is incorrect</span>
                    </div>
                    <div class="my-3">
                        <label for="partyDate" class="form-label">Date of Party:</label>
                        <input id="partyDate" name="partyDate" class="form-control" type="datepicker" placeholder="yyyy-mm-dd" required>
                        <span id="dateErr" class="error">Date format is incorrect</span>
                    </div>
                    <div class="my-3">
                        <label for="partyTime" class="form-label">Party Start:</label>
                        <input id="partyTime" name="partyTime" class="form-control" type="time" required>
                        <span id="timeErr" class="error">We cannot take a party at selected time.</span>
                    </div>
                    <div class="my-3">
                        <label for="endTime" class="form-label">Party End:</label>
                        <input id="endTime" name="endTime" class="form-control" type="time" required>
                        <span id="durationErr" class="error"></span>
                    <div class="my-3">
                        <label for="numPeople" class="form-label">Number of People:</label>
                        <input id="numPeople" name="numPeople" class="form-control" type="number" min="8" max="300" required>
                        <span id="peopleErr" class="error">Number of people must be numeric</span>
                    </div>
                    <div class="my-3 container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="partyRoom" value="Party Room" name="partyLocation" required>
                            <label class="form-check-label" for="partyRoom">Party Room</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="smallRoom" value="Small Room" name="partyLocation" required>
                            <label class="form-check-label" for="smallRoom">Small Room</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="diningRoom" value="Dining Room" name="partyLocation" required>
                            <label class="form-check-label" for="diningRoom">Dining Room</label>
                        </div>
                        <span id="locationErr" class="error">Please select one of the above</span>
                    </div>
                    <div class="my-3">
                        <label for="comments" class="form-label">Additional Comments:</label>
                        <textarea class="form-control" rows="5" id="comments" name="comments"></textarea>
                        <span id="commentsErr" class="error">Comments cannot be more than 256 characters</span>
                    </div>
                    <div>
                        <input id="bookedDate" name="bookedDate" type="date" style="display: none">
                        <input id="bookedTime" name="bookedTime" type="time" style="display: none">
                    </div>

                    <button id="submit" type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
