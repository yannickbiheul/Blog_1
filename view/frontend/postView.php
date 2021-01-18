<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

    <div class="article">
        <div class="titreArticle">
            <h3><?= htmlspecialchars($post['title']) ?></h3>
            <em><?= $post['creation_date_fr'] ?></em>
        </div>
        <div class="contenuArticle">
            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
                <br>
            </p>
        </div>
    </div>

    <h3 class="commentTitle">Commentaires</h3>

    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="POST" class="editComment">
        <div>
            <label for="author">Auteur</label><br>
            <input type="text" id="author" name="author">
        </div>
        <div>
            <label for="comment">Commentaire</label><br>
            <textarea id="comment name="comment"></textarea>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>


    <?php
        while ($comment = $comments->fetch()) {
    ?>
        <div class="commentaires">
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?> <a href="index.php?action=oneComment&amp;id=<?= $comment['id'] ?>">(Modifier)</a></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        </div>
    <?php
        }
    ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>