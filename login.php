

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php
    include_once("register.php");
    // Connection Created Successfully

    session_start();

    // Store All Errors
    $errors = [];

    ?>

    <?php

include_once("register.php");

   if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = sha1($_POST['password']);
        
        $emailQuery = "SELECT * FROM register WHERE email = '$email'";
        $email_check = mysqli_query($conn, $emailQuery);

        if (mysqli_num_rows($email_check) > 0) {
            $passwordQuery = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
            $password_check = mysqli_query($conn, $passwordQuery);

            if (mysqli_num_rows($password_check) > 0) {
                $fetchInfo = mysqli_fetch_assoc($password_check);
                    header('location: index.html');
                } 
                
             
        }else{
           echo  '<script type="text/javascript">

           $(document).ready(function(){
           
             swal({
                icon: "error",
                title: "Oops...",
                text: "Email and Password Are Not Match!",
             
             }).then(function() {
                window.location = "http://localhost/crypto/all/login.html";
                            });
           });
           
           </script>';
        }
      
       

        ?>

        <?php

    }

    ?>

   