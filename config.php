<?php 
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=simpylex;charset=utf8','user','password');
    }catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }