<?php
require('controller/frontend.php');

try {

    if (isset($_GET['action'])) {

        // Si action = listPosts : controller/frontend.php -> listPost()
        if ($_GET['action'] == 'listPosts') {
            listPosts();

        // Si action = post : controller/frontend.php -> post()
        } else if ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }

        // Si action = addComment : controller/frontend.php -> addComment()
        } else if ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        // Si action = oneComment : controller/frontend.php -> oneComment()
        } else if ($_GET ['action'] == 'oneComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                oneComment($_GET['id']);
            } else {
                throw new Exception("Ne peut pas charger cette page d'édition de commentaire");
            }
        }

    } else {
        listPosts();
    }
} catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}


