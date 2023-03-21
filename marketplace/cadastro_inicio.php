<?php 
if(isset($_POST['pagina_anterior'])){
    $pagina_anterior=$_POST['pagina_anterior'];//input hidden
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
    <script defer src="js/cadastro_inicio.js"></script>
    <style>
   /* Reset default browser styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styles */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  background-color: #f1f1f1;
}

/* Top bar styles */
#topo {
  background-color: #333;
  color: #fff;
  display: flex;
  align-items: center;
  padding: 10px;
}

#topo h1 {
  font-size: 24px;
}

#topo a {
  color: #fff;
  text-decoration: none;
}

/* Form styles */
form {
  background-color: #fff;
  padding: 20px;
  max-width: 500px;
  margin: 20px auto;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

form h1 {
  font-size: 32px;
  margin-bottom: 20px;
  text-align: center;
}

.entrar-items {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="email"],
input[type="password"],
input[type="date"],
select {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 3px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
  font-size: 16px;
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
  width: 100%;
  background-color: #333;
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
    </style>
</head>
<body>
    <div id="topo">
        <ul class="back-list">
            <li><a href="entrar.php"><h1>‹ Voltar</h1></a></li>
        </ul>
    </div>
    <form method="POST" action="cadastro_final.php">
        <div class="cadastre-se">
            <h1>Cadastro</h1>
            <div id="tipo_usuario">
              <input type="radio" id="cad_fis" name="cad" value="fis" onclick="cadastroFisica()" checked="checked"> <label for="cad_fis" style="width:30%;">Pessoa Física</label>

              <input type="radio" id="cad_jur" name="cad" value="jur" onclick="cadastroJuridica()" /> <label for="cad_jur" style="width:30%;">Pessoa Jurídica</label><br>
            </div>
            
            <div class="cadastro" id="form_cnpj" style="display:none">
                <div class="entrar-items">
                  <label for="nome">Nome Completo do Responsável:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="entrar-items">
                  <label for="cnpj">CNPJ:</label>
                    <input type="number" onKeyPress="if(this.value.length==14) return false;" id="cnpj" name="cnpj" required >
                </div>
                <div class="entrar-items">
                  <label for="nome_fant">Nome Fantasia:</label>
                    <input type="text" id="nome_fant" name="nome_fant" required >
                </div>
                <div class="entrar-items">
                  <label for="raz_soc">Razão Social:</label>
                    <input type="text" id="raz_soc" name="raz_soc" required >
                </div>
                <div class="entrar-items">
                  <label for="tributo">Informações Tributárias:</label>
                  <select name="tributo" id="tributo" required>
                    <option value="contribuinte">Contribuinte ICMS</option>
                    <option value="naocontribuinte">Não contribuinte ICMS
                    </option>
                    <option value="isento">Isento de inscrição estadual</option>
                  </select>
                </div>
                <div class="entrar-items">
                  <label for="email">Email da Empresa:</label>
                    <input type="email" id="email" name="email" required >
                </div>
                <div class="entrar-items">
                  <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="entrar-items">
                  <label for="conf_senha">Confirmar Senha:</label>
                    <input type="password" id="conf_senha" name="conf_senha" required>
                </div>
                <div class="entrar-items">
                  <label for="celular">Celular da Empresa:</label>
                    <input type="number" onKeyPress="if(this.value.length==11) return false;" id="celular" name="celular" required>
                </div>
                <div class="entrar-items">
                    <label for="tel">Telefone da Empresa:</label>
                    <input type="number" onKeyPress="if(this.value.length==10) return false;"  id="tel" name="tel" >
                </div>
                <div class="entrar-items">
                    <label for="data_nasc">Data de Fundação:</label>
                    <input type="date" id="data_nasc" name="data_nasc" required>
                </div>
                <input type="hidden" name="pagina_anterior" value="<?php echo $pagina_anterior ?>">
                <div class="btn-cad justify"><input type="submit" onclick="return verificar()" value="Cadastrar"></div>
            </div>

            <div class="cadastro" id="form_cpf" style="display:block">
                <div class="entrar-items">
                  <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="entrar-items">
                  <label for="cpf">CPF:</label>
                    <input type="number" onKeyPress="if(this.value.length==11) return false;" id="cpf" name="cpf" required >
                </div>
                <div class="entrar-items">
                  <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required >
                </div>
                <div class="entrar-items">
                  <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="entrar-items">
                  <label for="conf_senha">Confirmar Senha:</label>
                    <input type="password" id="conf_senha" name="conf_senha" required>
                </div>
                <div class="entrar-items">
                  <label for="celular">Celular:</label>
                    <input type="number" onKeyPress="if(this.value.length==11) return false;" id="celular" name="celular" required>
                </div>
                <div class="entrar-items">
                    <label for="data_nasc">Data de nascimento:</label>
                    <input type="date" id="data_nasc" name="data_nasc" required>
                </div>
                <input type="hidden" name="pagina_anterior" value="<?php echo $pagina_anterior ?>">
                <div class="btn-cad justify"><input type="submit" onclick="return verificar()" value="Cadastrar"></div>
            </div>
        </div>
    </form>
</body>
</html>
    
