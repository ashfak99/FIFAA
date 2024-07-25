<?php
$pass=$_POST['password'];
$pass2=$_POST['conformpassword'];
if (isset($_POST['register'])) {
    # code...
   if ($pass==$pass2) {
    # code...
    header('Location:../index.html');
   }
   else {
    echo " Password Miss Match";
   }
}
?>