<?php

$posts = file_get_contents("https://jsonplaceholder.typicode.com/posts");
$posts = json_decode($posts, true);

foreach( $posts as $aux ) {
    echo "Title: " .  $aux ['title'] . "<br>";
    echo "Content: " . $aux ['body'] . "<br>";
    echo "ID: " . $aux ['id'] . "<br>" . "<br>";
}

?>