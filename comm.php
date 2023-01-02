<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>


<?php

$conn = mysqli_connect("localhost" , "root" , "" , "crypto") or die("Connection Failed");

if (isset($_POST['submit'])){
$pass= $_POST['pass'];
$email= $_POST['email'];
$msg=$_POST['msg'];


$query=mysqli_query($conn, "insert into comment(email,pass,message)  values('$email','$pass','$msg')")
or die("qurey error");


echo  '<script type="text/javascript">

           $(document).ready(function(){
           
             swal({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
             
             }).then(function() {
                window.location = "http://localhost/crypto/all/index.html";
                            });
           });
           
           </script>';

}

?>