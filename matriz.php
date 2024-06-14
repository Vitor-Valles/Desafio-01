<?php
session_start();

$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$senha = isset($_SESSION['senha']) ? $_SESSION['senha'] : '';
$nomeT = isset($_SESSION['nomeT']) ? $_SESSION['nomeT'] : '';
$numC = isset($_SESSION['numC']) ? $_SESSION['numC'] : '';
$cvv = isset($_SESSION['cvv']) ? $_SESSION['cvv'] : '';
$dV = isset($_SESSION['dV']) ? $_SESSION['dV'] : '';
$cpf = isset($_SESSION['cpf']) ? $_SESSION['cpf'] : '';
$plano = isset($_SESSION['plano']) ? $_SESSION['plano'] : '';
$nomeP = isset($_SESSION['nomeP']) ? $_SESSION['nomeP'] : '';
$genero = isset($_SESSION['genero']) ? $_SESSION['genero'] : [];

$dados_usuario = [
    'nome' => $nome,
    'email' => $email,
    'senha' => $senha,
    'cartao' => [
        'nome_titular' => $nomeT,
        'numero' => $numC,
        'cvv' => $cvv,
        'data_vencimento' => $dV,
        'cpf' => $cpf,
        'plano' => $plano
    ],
    'perfil' => [
        'nome_perfil' => $nomeP,
        'generos_preferidos' => $genero
    ]
];

echo "Nome do usuário: " . $dados_usuario['nome'] . "<br>";
echo "E-mail: " . $dados_usuario['email'] . "<br>";
echo "Senha: " . $dados_usuario['senha'] . "<br>";

echo "<h3>Informações do cartão:</h3>";
echo "Nome do titular: " . $dados_usuario['cartao']['nome_titular'] . "<br>";
echo "Número do cartão: " . $dados_usuario['cartao']['numero'] . "<br>";
echo "CVV: " . $dados_usuario['cartao']['cvv'] . "<br>";
echo "Data de vencimento: " . $dados_usuario['cartao']['data_vencimento'] . "<br>";
echo "CPF: " . $dados_usuario['cartao']['cpf'] . "<br>";
echo "Plano selecionado: " . $dados_usuario['cartao']['plano'] . "<br>";

echo "<h3>Perfil do usuário:</h3>";
echo "Nome do perfil: " . $dados_usuario['perfil']['nome_perfil'] . "<br>";
echo "Gêneros preferidos: ";
echo "<ul>";
foreach ($dados_usuario['perfil']['generos_preferidos'] as $genero) {
    echo "<li>$genero</li>";
}
echo "</ul>";
?>
