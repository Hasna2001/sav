<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=sav', 'root', '');
} catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}