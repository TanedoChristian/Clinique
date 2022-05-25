<?php

class User {
    private $username;
    private $password;

    public function setIdNo($username) { $this->username = $username; }
    public function setPassword($password) { $this->password = $password; }

    public function getIdNo(){ return $this->username; }
    public function getPassword(){ return $this->password; }
}










?>