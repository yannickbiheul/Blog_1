<?php $title = 'Mon Blog'; ?>

<?php ob_start(); ?>

<h1>Derniers articles</h1>

<?php

while ($data = $posts->fetch()) {

?>
    <div class="article">
        <div class="titreArticle">
            <h3><?= htmlspecialchars($data['title']) ?></h3>
            <em><?= $data['creation_date_fr'] ?></em>
        </div>
        <div class="contenuArticle">
            <p>
                <?= nl2br(htmlspecialchars($data['content'])) ?>
                <br>
                <em><a class="commentaire" href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
            </p>
        </div>
    </div>
<?php
}
$posts->closeCursor();
?>
    
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
