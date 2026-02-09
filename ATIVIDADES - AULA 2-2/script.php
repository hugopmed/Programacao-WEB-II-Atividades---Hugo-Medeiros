<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $novoUsuario = [
        "id" => $_POST["id"],
        "username" => $_POST["username"],
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    ];

    $arquivo = "processa.json";

    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        $usuarios = json_decode($conteudo, true);

        if (!$usuarios) {
            $usuarios = [];
        }
    } else {
        $usuarios = [];
    }

    $usuarios[] = $novoUsuario;

    $jsonFinal = json_encode($usuarios, JSON_PRETTY_PRINT);
    file_put_contents($arquivo, $jsonFinal);

    echo "USUÁRIO CADASTRADO COM SUCESSO!<br><br>";
    echo "ID: {$novoUsuario['id']}<br>";
    echo "Username: {$novoUsuario['username']}<br>";
    echo "Email: {$novoUsuario['email']}<br>";
}
?>