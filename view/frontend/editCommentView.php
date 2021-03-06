<?php $title = 'Éditer commentaire'; ?>

<?php ob_start(); ?>

<h2>Éditer commentaire</h2>

<?php
    while ($commentaire = $comment->fetch()) {
?>
    <div class="commentaires">
        <p><strong><?= htmlspecialchars($commentaire['author']) ?></strong> le <?= $commentaire['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($commentaire['comment'])) ?></p>
    </div>
<?php
    }
?>

<form action="index.php?action=validComment&amp;id=<?= $post['id'] ?>" method="POST" class="editComment">
        <textarea placeholder="Votre nouveau commentaire" name="comment"></textarea>
        <input type="submit">
</form>

<a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Retour aux Commentaires</a>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>