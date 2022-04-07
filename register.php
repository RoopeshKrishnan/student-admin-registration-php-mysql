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
                    <h2 style="color: white;text-align: center; padding-bottom: 5px;">Student Registration system</h2>

                </div>




                <?php


                RegisterFun();


                ?>




                <div class="card-body">
                    <form action="registerphp.php" method="post" enctype="multipart/form-data">
                        <label class="btn btn-primary mb-2">Upload an Image <input type="file" style="display: none;" name="image">
                        </label>
                        <input type="text" name="fname" placeholder="First Name" class="form-control mb-2">
                        <input type="text" name="lname" placeholder="Last Name" class="form-control mb-2">
                        <input type="text" name="username" placeholder="User Name" class="form-control mb-2">
                        <input type="text" name="DOB" placeholder="DOB DD/MM/YY" class="form-control mb-2">




                        <label class="label_style" for="name">gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
                            <label class="form-check-label label_style" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                            <label class="form-check-label label_style" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Other">
                            <label class="form-check-label label_style" for="inlineRadio2">Other</label>
                        </div>


                        <input type="email" name="email" placeholder="email" class="form-control mb-2">
                        <input type="password" name="password" placeholder="password" class="form-control mb-3">
                        <div class="button_wrap">
                            <button class="btn btn-success " name="register">Register Now</button>
                        </div>
                        <a href="register.php">Login Now</a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<?php require_once "include/footer.php" ?>