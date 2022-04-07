<?php

require_once "include/connection.php";


if (isset($_POST['register'])) {


    $Image = $_FILES['image']['name'];
    $Type = $_FILES['image']['type'];
    $Temp = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];


    $Ext = explode('.', $Image);
    $TrueExt = (strtolower(end($Ext)));
    $AllowImg = array('jpg', 'jpeg', 'png');
    $Target = "iamges/" . $Image;


    $firstname = $connect->real_escape_string($_POST['fname']);
    $lastname = $connect->real_escape_string($_POST['lname']);
    $username = $connect->real_escape_string($_POST['username']);
    $dob = $connect->real_escape_string($_POST['DOB']);
    $gender = $connect->real_escape_string($_POST['inlineRadioOptions']);
    $email = $connect->real_escape_string($_POST['email']);
    $password = $connect->real_escape_string($_POST['password']);

    # echo $firstname."".$lastname."".$username."".$dob."".$gender."".$email."".$password;

    if (empty($firstname) || empty($lastname) || empty($username) || empty($dob) || empty($gender) || empty($email) || empty($password) || empty($Image)) 
    {

        header("location:register.php?Empty");
        exit();
    }
    else
       {

          if (!preg_match("/^[a-z,A-Z]*$/",$firstname) || !preg_match("/^[a-z,A-Z]*$/",$lastname) || !preg_match("/^[a-z,A-Z,0-9,_]*$/",$username))
            {
               header("location:register.php?characters");
               exit();
            }
          else
            {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                   {
                      header("location:register.php?Valid_email");
                      exit();
                   } 
                else 
                   {

                      $select ="SELECT * FROM student WHERE username = '".$username."'";
                      $select_query= $connect->query($select);

                         if($select_query->fetch_assoc())
                            {

                              header("location:register.php?username");
                              exit();
                            }  
                         else
                            {

                              $select2 ="SELECT * FROM student WHERE email = '".$email."'";
                              $select_query2= $connect->query($select2);
    
                                if($select_query2->fetch_assoc())
                                    {
    
                                      header("location:register.php?email");
                                      exit();

                                    }
                                else
                                    {

                                        $HashPass= password_hash($password,PASSWORD_DEFAULT);
                                        date_default_timezone_set('Asia/Kolkata');
                                        $date= date("d/m/Y");
                                           
                                           if(in_array($TrueExt,$AllowImg))
                                             {

                                                if($size<1000000)
                                                   {
                                                       $insert="INSERT INTO student (Image,Fname,Lname,username,DOB,gender,email,password,date) VALUES('$Image', '$firstname', '$lastname', '$username', '$dob', '$gender', '$email', '$HashPass', '$date')";

                                                       $insert_query= $connect->query($insert);
                                                       move_uploaded_file($Temp,$Target);

                                                       header("location:register.php?success");
                                                       exit();

                                                   }
                                                 else
                                                   {

                                                    header("location:register.php?toolarge");
                                                    exit();

                                                   }  

                                            }
                                           else
                                             {
                                                header("location:register.php?invalid_format");
                                                exit();
                                              }
                                    }    

                            }
                    }
                }
            } 
        }
else
 {

    header("location:register.php");
}
