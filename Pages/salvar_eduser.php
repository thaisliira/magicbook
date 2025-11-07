<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: admin_page.php");
    exit();
}

$servername = "db";
$username = "user";
$password = "password";
$dbname = "library_magicbook"; // <-- Agora o nome bate com o docker-compose!

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET name = ?, surname = ?, username = ?, email = ?, password = ?  WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $name, $surname, $username, $email, $password, $user_id);

    if ($stmt->execute()) {
        header("Location: editar_users.php");
        exit();
    } else {
        echo "Erro ao atualizar os dados dos usuários: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
