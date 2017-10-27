<a href="/blog/create/">Create a new article</a><br>
<?php foreach($GLOBALS['blog'] as $article): ?>
<div>
    titre : <a href="/blog/edit/?id=<?= $article['id'] ?>"><?= $article['titre'] ?></a><br>
    auteur : <?= $article['auteur'] ?><br>
    article : <?= $article['article'] ?><br>
    <a href="/blog/delete/?id=<?=$article['id'] ?>">Supprimer</a>
</div>
<hr>
<?php endforeach

 ?>
