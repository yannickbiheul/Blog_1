<?php

namespace Deskad\Blog\Model;

class Manager {

    // Connexion à la base de données
    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=blog_opc', 'root', '');
        return $db;
    }

}