<?php

include_once 'db.php';
class user extends DB{
    private $nombre;
    private $username;

    public function userExist($user, $pass){
        $query = $this->connect()->prepare('SELECT Nususario,Contraseña FROM infusuarios WHERE Nususario = :user and Contraseña = :pass');
        $query->execute(['user' => $user, 'pass'=> $pass]);

        if($query -> rowcount()){
            return true;
        }
        else{
            return false;
        }
    }


    public function setUser($user){
        $query = $this-> connec()->prepare('select * from usuarios where nusuario = $user');
        $query ->execute(['user'=> $user]);
        foreach ($query as $currentUser) {
            $this ->nombre = $currentUser['nombre'];
            $this ->username = $currentUser['username'];

        }
    }    

    public function getNombre(){
        return $this->Nombre;
    } 

}

?>