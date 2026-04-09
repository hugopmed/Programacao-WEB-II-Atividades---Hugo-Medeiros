<?php

$users = file_get_contents("https://jsonplaceholder.typicode.com/users");
$users = json_decode($users, true);
foreach($users as $aux) {
    echo "nome: " . $aux ['name'] . "<br>";
    echo "email: " . $aux ['email'] . "<br>";
    echo "cidade: " . $aux ['address']['city'] . "<br>" . "<br>";
};