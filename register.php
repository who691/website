
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php
// syntax
// mysqli_connect("server" , "username" , "password" , "database");
$conn = mysqli_connect("localhost" , "root" , "" , "crypto") or die("Connection Failed");
if (isset($_POST['submit'])){

  
  /*-----  if (isset($_POST['status'])==0) { 

    echo '<script> window.alert("Mark The Chechbox please ..");</script>'; 

 die('<script>
 window.location = "http://localhost/crypto/all/register.html";;
 </script>');

    }
   
  --------*/

    if( (empty ( $_POST['fullname'])) || (empty( $_POST['email'])) || (empty( $_POST['pay_account1'])) 
    || (empty( $_POST['password'])) || (empty( $_POST['pay_account']))  )
    {
    ?>
    <script> window.alert("Enter All please ..");</script>
    
    

<?php


}
else{

    $fullname= $_POST['fullname'];
    $username 		= $_POST['username'];
    $password 		= sha1($_POST['password']);
    $password2 		= sha1($_POST['password2']);
    $pay_account = sha1($_POST['pay_account']);
    $pay_account1 = sha1($_POST['pay_account1']);
    $Account_ID = sha1($_POST['Account_ID']);
    $Account_ID1 = sha1($_POST['Account_ID1']);
    $Account_ID2 = sha1($_POST['Account_ID2']);
	$email 			= $_POST['email'];
	$email1 			= $_POST['email1'];
	$sq	= $_POST['sq'];
	$sa 		= $_POST['sa'];








$query=mysqli_query($conn, "insert into register(fullname,username,password,password2,pay_account,pay_account1,Account_ID,Account_ID1,Account_ID2,email,email1,sq,sa)  values('$fullname','$username','$password','$password2','$pay_account','$pay_account1','$Account_ID','$Account_ID1','$Account_ID2','$email','$email1','$sq','$sa')")
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


?>
<script>


</script>

<?php



}


}

?>
