<?

$news = [
    10 => [
        'title' => "Пожарные спасли кошку",
        'full_text' => "Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных..."
    ],
    53 => [
        'title' => "Светловолосая девушка на своём розовом лексусе разгромила магазин.",
        'full_text' => "Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала. Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала."
    ],
]

?>

<h1>Новости</h1>
<a href="index.php">
    <- Назад
</a>
<br>

<? foreach($news as $key => $post): ?>
    <a href="/news-post?id=<?= $news_key ?>">
        <?=$post['title']?>
    </a>
    <br>
<? endforeach ?>
