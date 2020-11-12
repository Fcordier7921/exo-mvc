<h1>bien vue sur le blog acess 2020</h1>
<?php foreach($articles as $article):?>
    <h2><?= $article['titre'] ?></h2>
    <h3><?= $article['auteur'] ?></h3>
    <p><?= $article['contenu'] ?></p>
    
<?php endforeach;?>