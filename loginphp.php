<?php

session_start();

require_once "include/connection.php";

if(isset($_POST['login'])){

       if(empty($_POST['username']) || empty($_POST['password']))
         {

           header("location:login.php?empty");

         }
       else
         {
             $username =$_POST['username'];
             $password =$_POST['password'];

            $select = "SELECT * FROM student WHERE username= '".$username."' or email='".$username."' ";
            $select_query = $connect->query($select);

              if($row=$select_query->fetch_assoc())
              {

                  $Hash=password_verify($password,$row['password']);
                    if($Hash==false)
                    {
                        header("location:login.php?invalidpassword");
                        exit();
                    }
                    elseif($Hash==true)
                    {

                        $_SESSION['user_id']=$row['id'];
                        $user_id=$row['id'];
                        header("location:view.php?success=$user_id");

                    }


              }
              else
              {
                  header("location:login.php?invalidusername");
                  exit();

              }

         }  

     


}
else
{
    header("location:login.php");
}

?>