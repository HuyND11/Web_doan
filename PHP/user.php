<?php

    class user{
        private string $idUser;
        private string $name;
        private string $email;
        private string $password;
    }

    function __construct($name, $email, $password){
        $this->idUser = "";
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function castToArray() {
        return [
            "idUser" => $this->idUser,
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password
        ]
    }


    public function getIdUser(){
        return $this->idUser;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getPassword() {
        return $this->password;
    }

?>