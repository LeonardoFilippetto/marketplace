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
input[type="email"],
input[type="password"],
input[type="tel"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 3px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
  font-size: 16px;
}

input[type="submit"] {
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
            <div class="cadastro">
                <h1>Cadastro</h1>
                <div class="entrar-items">
                    <input type="text" id="nome" name="nome" required>
                    <label for="nome">Nome Completo:</label>
                </div>
                <div class="entrar-items">
                    <input type="text" id="cpf" name="cpf" required >
                    <label for="cpf">CPF:</label>
                </div>
                <div class="entrar-items">
                    <input type="email" id="email" name="email" required >
                    <label for="email">Email:</label>
                </div>
                <div class="entrar-items">
                    <input type="password" id="senha" name="senha" required>
                    <label for="senha">Senha:</label>
                </div>
                <div class="entrar-items">
                    <input type="password" id="conf_senha" name="conf_senha" required>
                    <label for="conf_senha">Confirmar Senha:</label>
                </div>
                <div class="entrar-items">
                    <input type="text" id="celular" required>
                    <label for="celular">Celular:</label>
                </div>
                <input type="hidden" name="pagina_anterior" value="<?php echo $pagina_anterior ?>">
                <div class="btn-cad justify"><input type="submit" onclick="return verificar" value="Cadastrar"></div>
            </div>
        </div>
    </form>
</body>
</html>
    
