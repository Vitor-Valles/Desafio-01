<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nomeT'] = $_POST['nomeT'];
    $_SESSION['numC'] = $_POST['numC'];
    $_SESSION['cvv'] = $_POST['cvv'];
    $_SESSION['dV'] = $_POST['dV'];
    $_SESSION['cpf'] = $_POST['cpf'];
    $_SESSION['plano'] = $_POST['plano'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
<form action="matriz.php" method="post">
        <label>Nome seu do perfil</label>
            <input type="text" name="nomeP" id="nomeP" placeholder="Digite o nome do seu perfil" required>
        <hr>
        <label>Selecione as categorias de preferencias</label>
        <br>
        <input type="checkbox" id="acao" name="genero[]" value="acao">
        <label for="acao">Ação</label><br>
        
        <input type="checkbox" id="aventura" name="genero[]" value="aventura">
        <label for="aventura">Aventura</label><br>
        
        <input type="checkbox" id="animacao" name="genero[]" value="animacao">
        <label for="animacao">Animação</label><br>
        
        <input type="checkbox" id="comedia" name="genero[]" value="comedia">
        <label for="comedia">Comédia</label><br>
        
        <input type="checkbox" id="crime" name="genero[]" value="crime">
        <label for="crime">Crime</label><br>
        
        <input type="checkbox" id="drama" name="genero[]" value="drama">
        <label for="drama">Drama</label><br>
        
        <input type="checkbox" id="fantasia" name="genero[]" value="fantasia">
        <label for="fantasia">Fantasia</label><br>
        
        <input type="checkbox" id="ficcao-cientifica" name="genero[]" value="ficcao-cientifica">
        <label for="ficcao-cientifica">Ficção Científica</label><br>
        
        <input type="checkbox" id="horror" name="genero[]" value="horror">
        <label for="horror">Horror</label><br>
        
        <input type="checkbox" id="musical" name="genero[]" value="musical">
        <label for="musical">Musical</label><br>
        
        <input type="checkbox" id="misterio" name="genero[]" value="misterio">
        <label for="misterio">Mistério</label><br>
        
        <input type="checkbox" id="romance" name="genero[]" value="romance">
        <label for="romance">Romance</label><br>
        
        <input type="checkbox" id="suspense" name="genero[]" value="suspense">
        <label for="suspense">Suspense</label><br>
        
        <input type="checkbox" id="guerra" name="genero[]" value="guerra">
        <label for="guerra">Guerra</label><br>


        <button type="submit">Avançar</button>
        
        </form>
    
</body>
</html>