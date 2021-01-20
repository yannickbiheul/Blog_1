<?php $title = 'Éditer commentaire'; ?>

<?php ob_start(); ?>

<h2>Commentaire édité !</h2>

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

<a href="index.php?action=editCommentt&amp;id=<?= $post['id'] ?>&amp,comment=<?= $_POST['comment'] ?>">Retour aux Commentaires</a>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>