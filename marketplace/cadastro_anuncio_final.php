<?php
$hidden_inputs = "";
require("req_tipos_produtos.php");
$form_produto = $form_placa_mae;
if(isset($_POST['titulo_anuncio'])){
    $condicao=$_POST['cond'];
    if($condicao=="usado"){
      $hidden_inputs .= "<input type='hidden' name='tempo_uso' value='".$_POST['tempo_uso']."'>";
    }
    $hidden_inputs .= "<input type='hidden' name='cond' value='".$condicao."'>";
    $hidden_inputs .= "<input type='hidden' name='preco_anunc' value='".$_POST['preco_anunc']."'>";
    $hidden_inputs .= "<input type='hidden' name='tipo_produto' value='".$_POST['tipo_produto'].  "'>";
    $hidden_inputs .= "<input type='hidden' name='titulo_anuncio' value='".$_POST['titulo_anuncio']."'>";
    //$celular=str_replace("-","", $_POST['celular']);
}
/*if(isset($_POST['numero'])){
    $numero_form=$_POST['numero'];
    $complemento_form=$_POST['complemento'];
    $logradouro_form=$_POST['logradouro'];
    $bairro_form=$_POST['bairro'];
    $cep_form=$_POST['cep'];
    $cidade_form=$_POST['cidade'];
    $referencia_form=$_POST['referencia'];

    $query = "INSERT INTO usuarios (cep, logradouro, data, numero, bairro, complemento, cidade, referencia, nome, cpf, email, senha, celular) VALUES ($cep_form, $logradouro_form, $data_form, $numero_form, $bairro_form, $complemento_form)";
    $result = mysqli_query($con, $query);
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do produto</title>
    <!-- <script defer src="js/cadastro_final.js"></script> -->
    <style>
   /* Reset default browser styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
  color: #fff;
}

/* Body styles */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  background-color: #222;
}

/* Top bar styles */
#topo {
  background-color: #5f17ea;
  color: #fff;
  display: flex;
  align-items: center;
  padding: 10px;
  border-bottom: solid 5px #0123;
  height: 5rem;
}

#topo h1 {
  font-size: 24px;
}

#topo a {
  color: #fff;
  text-decoration: none;
}

.logo-stockpc{
  align-items: center;
  margin-left: 50%;
  transform: translate(-50%);
  margin-top: -25px;
  position:absolute;
}

/* Form styles */
form {
  color: #fff;
  background-color:#434343;
  box-shadow: 0px 0px 10px #222;
  padding: 20px;
  max-width: 500px;
  margin: 20px auto;
  border-radius: 0.8rem;
}

form h1 {
  font-size: 32px;
  margin-bottom: 20px;
  text-align: center;
}

.entrar-items {
  margin-bottom: 20px;
}

.checkbox{
    height: 2rem;
  display:flex;
  flex-direction: row;
  align-items: center;
  justify-items: left;
  wrap:nowrap;
  margin: 0.25rem 0;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="number"],
select {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 3px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
  font-size: 16px;
  background-color: #333;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type="number"]{
  -moz-appearance: textfield;
}

input[type="submit"] {
  width: 100%;;
  background-color: #222;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #555;
}

footer{
  height: 5rem;
  width: 100%;
  background-color: #5f17ea;
  text-align: center;
  font-size: 1rem;
  margin-top: 10px ;
  color:#fff;
  display: block;

  border-top: solid 5px #0123;
}

footer p{
  padding: 1.8rem;
}

    </style>
</head>
<body>
    <div id="topo">
        <ul class="back-list">
            <li><a href="login.php"><h1>Voltar</h1></a></li>
            <img src="img/stockpc_escrito.png" alt="" class="logo-stockpc">
        </ul>
    </div>
    <form method="POST" action="confirmar_email.php">
        <div class="cadastre-se">
            <div class="cadastro">
                <h1>Dados do Produto</h1>
                <div class="entrar-items">
                  <label for="ean">EAN (código de barras):*</label>
                    <input type="number" onKeyPress="if(this.value.length==13) return false;" placeholder="1234567891234" id="ean" name="ean" required>
                </div>
                <?php echo $form_produto; ?>
                <p style="font-size:12px; color:#a6a6a6;">(*) - Campos obrigatórios</p><br>
                <?php echo $hidden_inputs; ?>
                <div class="btn-cad justify"><input type="submit" onclick="return verificarEnd()" value="Cadastrar"></div>
            </div>
        </div>
    </form>
    <footer>
        <strong><p>Copyright © 2023 StockPC Inc. Todos os direitos reservados.</p></strong>
    </footer>  
</body>
</html>


