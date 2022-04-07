<?php

require_once "include/header.php";
require_once "include/connection.php";

if(isset($_SESSION['user_id'])){

   $_SESSION['get']= $get_id=$_GET['success'];
    $select="SELECT * FROM student WHERE id= '".$get_id."'";
    $select_query= $connect->query($select);

    while($row=$select_query->fetch_assoc()){

        $userid= $row['id'];
        $image=$row['Image'];
        $firstname=$row['Fname'];
        $lastname=$row['Lname'];
        $username=$row['username'];
        $dob=$row['DOB'];
        $gender=$row['gender'];
        $email=$row['email'];
        $date=$row['date'];
    }
   

}





require_once "include/footer.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white mt-3">
                <h3 class="text-center py-3">Student Personal Records</h3>

            </div>
        </div>
    </div>

<?php
if($_SESSION['get']==$_SESSION['user_id']){

    

?>




    <div class="row">
        <div class="col-lg-3">
            <div class="card mt-3">
                <div class="card-title bg-primary text-white py-2 rounded-top">
                    <h4 class="text-center "><?php echo $firstname." ".$lastname  ?></h4>

                </div>

                <div class=" card-body">
                    <img  src="iamges/<?php echo $image ?>" width="200" height="200" alt="" srcset="">
                </div>
            </div>
        </div>


        <div class="col-lg-9">
            <div class="card mt-3">
                <table class="table table-striped">
                    <tr>
                        <td>Student ID</td>
                        <td><?php echo $userid ?></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $firstname ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $lastname ?></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td><?php echo $dob ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $gender ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $email ?></td>
                    </tr>
                    <tr>
                        <td>Date of Registartion</td>
                        <td><?php echo $date ?></td>
                    </tr>
                   

                </table>
            </div>
        </div>

    </div>
<?php
}else{

  echo '<div class="alert alert-danger text-center"><h1>Something went Wrong</h1></div> ';

}
?>

</div>