<?php
  if (isset($_POST['login'])) {
    # code...
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'ashfakalam@gmail.com' and $password=='admin@aa') {
        # code...
        $_SESSION['login'] =true;
        header('Location:../index.html');
    }
    else {
        echo "Wrong EMAIL/PASSWORD";
    }
  }
?>