<?php

function RegisterFun(){
    $message="";
    if(isset($_GET['Empty'])){

        $message="please fill in the blanks";

       echo '<div class="alert alert-danger text-center">'.$message.'</div>';
    }

    if(isset($_GET['characters'])){

        $message2="please Enter valid characters";

       echo '<div class="alert alert-danger text-center">'.$message2.'</div>';
    }


    if(isset($_GET['Valid_email'])){

        $message3="please Enter valid E-mail address";

       echo '<div class="alert alert-danger text-center">'.$message3.'</div>';
    }

    
    if(isset($_GET['username'])){

        $message4="username already taken";

       echo '<div class="alert alert-danger text-center">'.$message4.'</div>';
    }


    if(isset($_GET['email'])){

        $message5="email already taken";

       echo '<div class="alert alert-danger text-center">'.$message5.'</div>';
    }

    if(isset($_GET['invalid_format'])){

        $message6="Invalid image format";

       echo '<div class="alert alert-danger text-center">'.$message6.'</div>';
    }

    if(isset($_GET['toolarge'])){

        $message7="only Accept image size below 1 mb";

       echo '<div class="alert alert-danger text-center">'.$message7.'</div>';
    }

    if(isset($_GET['success'])){

        $message8="Registartion completed";

       echo '<div class="alert alert-success text-center">'.$message8.'
       <a href="login.php" >Login Now</a>
       
       </div>';
    }



}



function login_fun(){

    if(isset($_GET['empty'])){

        $message1="please fill the fields";

       echo '<div class="alert alert-danger text-center">'.$message1.'</div>';
    }

    if(isset($_GET['invalidusername'])){

        $message2="inncorrect username";

       echo '<div class="alert alert-danger text-center">'.$message2.'</div>';
    }

    if(isset($_GET['invalidpassword'])){

        $message3="inncorrect password";

       echo '<div class="alert alert-danger text-center">'.$message3.'</div>';
    }

    if(isset($_SESSION['user_id'])){
        header("location:index.php");
    }


}
?>