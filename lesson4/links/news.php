<?
require_once 'database.php';

$news = getNews();

?>

<h1>Новости</h1>
<a href="index.php">
    <- Назад
</a>
<br>

<? foreach($news as $key => $post): ?>
    <a href="news-post.php?id=<?= $key ?>">
        <?=$post['title']?>
    </a>
    <br>
<? endforeach ?>
