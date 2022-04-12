<!DOCTYPE html>
<?php
  session_start();
  include('db_conn.php');
  ?>
<html>
  <head>
    <title>Add Map</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKblPBimQUF-jQTgFwwuYXKYTcoG3hbE0&callback=initMap&libraries=&v=weekly"
      defer
    ></script>


    <!-- OWN CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 300px;
        /* The height is 400 pixels */
        width: 300px;
        /* The width is the width of the web page */
      }
    </style>

  </head>

  <body>
    <?php include('phpTemplates/header.php') ?>

    <div class="small-container about-container">
      <h2 class = "about-us"><b>About Us</b></h2>
      <br>
      <hr>
        <div class="row">

          <br><br>
          <hr>
          <hr>
        </div>

      <div class="row">
          <div class="col-2">
              <p>Welcome to FoodiGo, the online platform for the OFS grocery store in Downtown San Jose. We strive to be your number one source for your groceries! 
                We're dedicated to providing you the very best of our products, with an emphasis on our delivery speed,  your satisfaction, and for society's good.</p>
                <br>
              <p>Founded in 2022, We are a small startup focusing on delivering groceries to your doorstep while maintaining the highest quality and freshness of our products.
                We strive to break up the monopoly by the few grocery store giants by offering extremely competitive prices and best services to you.
              </p>
                <br>
              <p>We hope you enjoy our products with the exceptional services</p> 
              <p>If you have any questions or comments, please don't hesitate to contact us.</p>
                <br>
              <p>Sincerely,</p>
              <p><em>FoodiGo Team</em></p>
          </div>

          <div class ="col-2">
              <p><b> &nbsp;  &nbsp; &nbsp;   Our location:</b></p>
              <div id="map"></div>
          </div>


      </div>
    </div>

    <?php include('phpTemplates/footer.php')?>
  </body>
</html>
