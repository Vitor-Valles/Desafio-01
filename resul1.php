<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];

    if ($senha1 != $senha2) {
        echo "<script>
                alert('Suas senhas são diferentes, por favor, digite novamente.');
                window.history.back(); // Volta para a página anterior
              </script>";
        exit();
    } else {
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha1;
        header("Location: cartao.php");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}
?>
