<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nomeT'] = $_POST['nomeT'];
    $_SESSION['numC'] = $_POST['numC'];
    $_SESSION['cvv'] = $_POST['cvv'];
    $_SESSION['dV'] = $_POST['dV'];
    $_SESSION['cpf'] = $_POST['cpf'];
    $_SESSION['plano'] = $_POST['plano'];
    header("Location: perfilM.php"); // Redireciona para a próxima página
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartão</title>
</head>
<body>
    <form method="post" action="">
        <label>Nome do titular</label>
        <input type="text" name="nomeT" id="nomeT" placeholder="Digite o nome do titular do cartão" required>
        <hr>
        <label>Número do cartão</label>
        <input type="text" name="numC" id="numC" placeholder="Digite o número do cartão" required>
        <hr>
        <label>CVV</label>
        <input type="text" name="cvv" id="cvv" placeholder="Digite o código de segurança" required>
        <hr>
        <label>Data de vencimento</label>
        <input type="date" name="dV" id="dV" placeholder="Digite a data de vencimento do cartão" required>
        <hr>
        <label>CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF" required>
        <hr>
        <label>Selecione seu plano</label>
        <select name="plano">
            <option value="planoB">Plano básico</option>
            <option value="planoM">Plano médio</option>
            <option value="planoP">Plano premium</option>
        </select>
        <hr>
        <button type="submit">Avançar</button>
    </form>
</body>
</html>
