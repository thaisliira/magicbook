<?php

if (isset($_POST["cart_id"])) {

    $servername = "db";
$username = "user";
$password = "password";
$dbname = "library_magicbook"; // <-- Agora o nome bate com o docker-compose!

$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $cartId = $_POST["cart_id"];

    $sql = "DELETE FROM cart WHERE cart_id = $cartId";

    if ($conn->query($sql) === TRUE) {
        
        header("Location: carrinho.php");
        exit; 
    } else {
        echo "Erro ao excluir o item do carrinho: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID do item não especificado";
}
?>