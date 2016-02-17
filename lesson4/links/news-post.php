<?php
/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */

require_once 'database.php';

$news = getNews();

$id = $_GET['id'];
$newsPost = $news[$id];

?>

<h1><?=$newsPost['title']?></h1>
<a href="/lesson4/links/news.php">
    All News
</a>
<p><?=$newsPost['full_text']?></p>