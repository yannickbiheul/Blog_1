<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

// use \Deskad\Blog\Model\PostManager;
// use \Deskad\Blog\Model\CommentManager;

// Affichage des posts
function listPosts() {
    $postManager = new \Deskad\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

// Affichage d'un post
function post() {
    $postManager = new \Deskad\Blog\Model\PostManager();
    $commentManager = new \Deskad\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

// Création d'un commentaire
function addComment($postId, $author, $comment) {
    $commentManager = new \Deskad\Blog\Model\CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter le commentaire !");
    } else {
        header('Location: index.php?action=post&id"' . $postId);
    }
}

// Affichage d'un commentaire
function oneComment($commentId) {
    $commentManager = new \Deskad\Blog\Model\CommentManager();
    $comment = $commentManager->getComment($commentId);

    require('view/frontend/editCommentView.php');
}

// Modification d'un commentaire
function editComment($commentId) {
    $commentManager = new \Deskad\Blog\Model\CommentManager();
    $comment = $commentManager->editComment($commentId);
}

