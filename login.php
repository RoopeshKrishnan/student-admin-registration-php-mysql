<?php require_once "include/header.php";
require_once "include/function.php";

?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="mt-5">
                <img src="iamges/login.png" width="150" height="150" class="d-flex m-auto" alt="" srcset="">
            </div>

            <div class="card">
                <div class="card-title bg-dark rounded-top">
                    <h2 style="color: white;text-align: center; padding-bottom: 5px;">Student Login system</h2>

                </div>

                <?php

           

                login_fun();
                ?>


                <div class="card-body">
                    <form action="loginphp.php" method="post">
                        <input type="text" name="username" placeholder="Enter username/Email" class="form-control mb-2">
                        <input type="password" name="password" placeholder="password" class="form-control mb-3">
                        <div class="button_wrap">
                            <button class="btn btn-success " name="login">Login Now</button>
                        </div>
                        <a href="register.php">Register Now</a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<?php require_once "include/footer.php" ?>