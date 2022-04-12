<?php
session_start();
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodiGo | Welcome!</title>

    <!-- Add boostrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- OWN CSS -->
    <link rel="stylesheet" href="css/style.css">

    

</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div  style="background-color:rgb(253, 201, 201);" class = header-nav>
            <div class = "container">
                <div class = "navbar">
                    <div style = "color: purple;" class = "logo">
                        <h1 style = "color: purple;">FoodiGo</h1>
                    </div>

                    <nav>
                        <ul> 
                            <li><a href = "mainPage.php" style = "color: purple;"> Home</a></li>
                            <li><a href = "category-allProducts.php" style = "color: purple;"> Products</a></li>
                            <li><a href = "about.php" style = "color: purple;"> About</a></li>
                            <?php if (isset($_SESSION['user_id'])&& isset($_SESSION['user_loginname'])){ ?>


                            <li><a href = "account.php" style = "color: purple;"> Hello, <?php echo $_SESSION['user_name']; ?></a></li>
                            <li><a href = "logout.php" style = "color: purple;"> Logout</a></li>
                                  <?php } else { ?>

                                  <li><a href = "account.php" style = "color: purple;"> Account</a></li>
                                  <?php } ?>
                            <li><a href = "cart.php"><i class="fa fa-shopping-cart cart-icon" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class = "row">
            <div class ="column">
                <link rel="stylesheet" href="style.css">
                <img src="images/logo2.jpg" id="bg" alt="">
                
                <hr>
                <center style="background-color:rgb(253, 201, 201);">
                    <h4>You want to get Food</h4>
                    <h4> You want to stay Home</h4>
                    <h3>Don't worry. Do it in few clicks</h3>
                <center>
                <hr>
                    <p style = "color:blue;">
                    How are we different? We offer the best price and delivery services.
                    </p>
                <p style = "color:blue;"> 
                    What are you waiting for? Join us now. <br>
                  <?php if (isset($_SESSION['user_id'])&& isset($_SESSION['user_loginname'])){ ?>
                    
                    <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
                  <a href="logout.php">Logout</a>
                      <?php } else { ?>

                        <a href = "loginregister.php" class = "btn">Sign Up &#10026;</a>
                        <a href = "loginregister.php" class = "btn">Log in &#10026;</a>
                      <?php } ?>
                </p>
            </div>

        </div>
    </div>
