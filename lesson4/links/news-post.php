<?php
/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */

$news = [
    10 => [
        'title' => "Пожарные спасли кошку",
        'full_text' => "Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных...Пожарные спасли кошку. Какие молодцы! Давайте поздравим пожарных..."
    ],
    53 => [
        'title' => "Светловолосая девушка на своём розовом лексусе разгромила магазин.",
        'full_text' => "Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала. Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала.Светловолосая девушка на своём розовом лексусе разгромила магазин. Покраска машины не пострадала."
    ],
];

$id = $_GET['id'];
$newsPost = $news[$id];

?>

<h1><?=$newsPost['title']?></h1>
<p><?=$newsPost['full_text']?></p>
