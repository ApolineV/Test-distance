<?php
class bdd
{
    private $_bdd;
    public function __construct()
    {
    }
  
    public function connectbdd()
    {
        try {
            $bdd = new PDO('mysql:host=mysql-projetserre.alwaysdata.net; dbname=projetserre_sql; charset=utf8', '231031_admin', 'serre1234');
        } catch (Exception $erreur) {
            echo 'Erreur : ' . $erreur->getMessage();
        }
        $this->_bdd=$bdd;
        return $this->_bdd;
    }

    public function getBdd(){

        return $this->_bdd;

    }
        
}