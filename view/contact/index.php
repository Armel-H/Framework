<?php foreach($GLOBALS['blog'] as $article): ?>
<div>
    Prénom : <a href="/blog/edit/?id=<?= $article['id'] ?>"><?= $article['titre'] ?></a><br>
    Nom : <?= $article['auteur'] ?><br>
    Téléphone : <?= $article['articles'] ?><br>
    <a href="/blog/delete/?id=<?=$article['id'] ?>">Supprimer</a>
</div>
<hr>
<?php endforeach

 ?>
