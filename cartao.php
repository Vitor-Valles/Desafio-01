<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" src="resul1.php">
    <title>Document</title>
</head>
<body>
    <form action="perfilM.php" method="post">
            <input type="hidden" name="nome" value="<?php echo $_SESSION['nome']; ?>">
            <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
            <input type="hidden" name="senha" value="<?php echo $_SESSION['senha']; ?>">

            <label>Nome do titular</label>
                <input type="text" name="nomeT" id="nomeT" placeholder="Digite o nome do titular do cartão" required>
            <hr>
            <label>Numero do cartão</label>
                <input type="text" name="numC" id="numC" placeholder="Digite o numero do cartão" required>
            <hr>
            <label>CVV</label>
                <input type="text" name="cvv" id="cvv" placeholder="Digite o codigo de segurança" required>
            <hr>
            <label>Data de vencimento</label>
                <input type="date" name="dV" id="dV" placeholder="Digite a data de vencimento do cartão" required>
            <hr>
            <label>CPF</label>
                <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF" required>
            <hr>
            <label>Selecione seu plano</label>
            <select name="plano">
                <option value="planoB">Plano basico</option>
                <option value="planoB">Plano medio</option>
                <option value="planoB">Plano premiun</option>
            </select>
            <hr>
            <button type="submit">Avançar</button>
        </form>
</body>
</html>