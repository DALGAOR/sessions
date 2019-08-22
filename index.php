<?php

include_once 'includes/user.php';
include_once 'includes/userSession.php';

$UserSession = new UserSession();
$user = new user();

if(isset($_SESSION['user'])){
    echo"hay sesion";
    
}
else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo"validacion de login";
    $userForm = $_POST['username'];
    $passform = $_POST['password'];
     if($user -> userExist($userForm,$passform)){
       $UserSession->setCurrentUser(userForm);
       $user->setUser($userForm);

       include_once'viewshome.php   ';

     }
     else{
       $errorlogin ='Error en el usuario y/o contraseña';
         include_once'views/login.php';
     }

}
else{
    echo'login';
    include_once'views/login.php';
}

?>