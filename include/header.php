<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Student Registartion</title>


    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!------------------navigation bar------------------------------>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"> </span>

            </button>

            <a href="index.php" class="navbar-brand">
                <h3>Student Registartion</h3>
            </a>
            <div class="nav_title">

            <div  collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav ml-auto">

                    <li class="navbar-item">


                        <?php

                        if (isset($_SESSION['user_id'])) {

                            echo ' <form action="logout.php" method="post">
                                
                            <button class="btn " name="logout">logout</button>

                            </form>';
                        } else {

                            echo '<a href="login.php"  class="nav-link">Login</a> ';
                        }

                        ?>
                        <!--<a href="login.php"  class="nav-link">Login</a> -->


                    </li>
                </ul>

            </div>

        </div>

        </div>

    </nav>