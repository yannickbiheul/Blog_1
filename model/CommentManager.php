<?php

namespace Deskad\Blog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager {

    // Récupération d'un commentaire
    public function getComment($commentId) {
        $db = $this->dbConnect();
        $comment = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
        $comment->execute(array($commentId));

        return $comment;
    }

    // Récupération des commentaires
    public function getComments($postId) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    // Création d'un commentaire
    public function postComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW()');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function editComment($commentId, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comments SET comment = ?, comment_date = NOW() WHERE id = ?');
        $editComment = $comments->execute(array($comment, $commentId));

        return $editComment;
    }

}