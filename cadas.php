<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Dados</title>
    </head>
     <script>
            function validarFormulario(){
                var senha1 = parseFloat(document.getElementById('senha1').value);
                var senha2 = parseFloat(document.getElementById('senha2').value);
                
                if(senha1 != senha2){
                    alert("Suas senhas são diferentes, Digite novamente");
                    document.getElementById('senha1').value = "";
                    document.getElementById('senha2').value = "";
                    document.getElementById('senha1').focus();
                    return false;
                }else{
                    alert("Suas senhas iguais");
                    return true;
                }
            
            }
    </script>
    <body>
    <form action="resul1.php" method="post">
            <label>Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" required>
            <hr>
            <label>Email</label>
                <input type="text" name="email" id="email" placeholder="Digite seu E-mail" required>
            <hr>
            <label>Digite sua Senha</label>
                <input type="password" name="senha1" id="senha1" placeholder="Digite a sua senha" required>
            <hr>
            <label>Repita sua Senha</label>
                <input type="password" name="senha2" id="senha2" placeholder="Repita a sua Senha" required>
            <hr>
            <button type="submit">Avançar</button>
        </form>        
    </body>
    </html>
