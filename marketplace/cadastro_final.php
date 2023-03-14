<?php
require("conexao.php");
if(isset($_POST['numero'])){
    $numero_form=$_POST['numero'];
    $complemento_form=$_POST['complemento'];
    $logradouro_form=$_POST['logradouro'];
    $data_form=$_POST['data'];
    $bairro_form=$_POST['bairro'];
    $cep_form=$_POST['cep'];

    $query = "INSERT INTO usuarios (cep, logradouro, data, numero, bairro, complemento) VALUES ($cep_form, $logradouro_form, $data_form, $numero_form, $bairro_form, $complemento_form)";
    $result = mysqli_query($con, $query);

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
    <div id="topo">
        <ul class="back-list">
            <li><a href="entrar.php"><h1>‹ Voltar</h1></a></li>
        </ul>
    </div>
    <form method="POST" action="cadastro_final.php">
        <div class="cadastre-se">
            <div class="cadastro">
                <h1>Cadastro</h1>
                <div class="entrar-items">
                    <input type="text" id="cep" name="cep" required>
                    <label for="cep">cep Completo:</label>
                </div>
                <div class="entrar-items">
                    <input type="text" id="l" name="logradouro" required >
                    <label for="logradouro">logradouro:</label>
                </div>
                <div class="entrar-items">
                    <input type="numero text" id="numero" name="numero" required >
                    <label for="numero">numero:</label>
                </div>
                <div class="entrar-items">
                    <input type="password" id="complemento" name="complemento" required>
                    <label for="complemento">complemento:</label>
                </div>
                <div class="entrar-items">
                    <input type="password" id="conf_senha" name="conf_senha" required>
                    <label for="conf_senha">Confirmar Senha:</label>
                </div>
                <div class="entrar-items">
                    <input type="bairro" id="bairro" name="bairro" required>
                    <label for="bairro">bairro:</label>
                </div>
                <div class="entrar-items">
                    <input type="cidade" id="cidade" name="cidade" required>
                    <label for="cidade">cidade:</label>
                </div>
                <div class="entrar-items">
                    <input type="referencia" id="referencia" required>
                    <label for="referencia">Referência:</label>
                </div>
                <input type="hidden" name="pagina_anterior" value="<?php echo $pagina_anterior ?>">
                <div class="btn-cad justify"><input type="submit" onclick="return verificar" value="Cadastrar"></div>
            </div>
        </div>
    </form>
</body>
</html>

