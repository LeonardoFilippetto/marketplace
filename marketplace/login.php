<?php
if(isset($_POST['pagina_anterior'])){
    $pagina_anterior=$_POST['pagina_anterior'];//input hidden
}
require("conexao.php");
$mensagem="";
if(isset($_POST['email'])){
    $email_form=$_POST['email'];
    $senha_form=$_POST['senha'];

    /*$options = ['cost' => 12,];
    $senha_hash = password_hash($senha, PASSWORD_BCRYPT, $options);*/
    
    $query = "SELECT email, senha FROM usuarios WHERE email='".$email_form."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    if(is_array($row)) {

        $senha_bd=$row['senha'];
        $email_bd=$row['email'];

        if(password_verify($senha_form, $senha_bd)) {
            session_start();
            $_SESSION["email"] = $email_bd;
            if($pagina_anterior){
                header("Location:$pagina_anterior");
            }else{
                header("Location:index.php");
            }
        }else{
            $mensagem="Email ou senha inválidos!";
        }

    }else{
        $mensagem="Email ou senha inválidos!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<style>
        *{
            color: #fff;
        }
        header{
            background-color: #5f17ea;
            border-bottom: solid 5px #0123;
        }
        footer{
            background-color: #5f17ea;
            border-top: solid 5px #0123;
        }
        .logo-stockpc{
           max-width: 300px;
           margin-top: -10px;
        }
        body{
            background-color: #222;
        }
        #form_container{
            backdrop-filter: blur(0px);
            color: #fff;
            background-color:#434343;
            box-shadow: 0px 0px 10px #222;
            border: none;
        
        }
        #botao{
            color: #fff;
            background-color: #222;
        }
        form input{
            border: solid 2px #434343;
            background-color: #333;
        }
        #cadastro{
            background-color: #333;
            height: 40px;
            width: 350px ;
            text-decoration: none;
        }
        #cadastro a{
            color: #111;
        }
        .entrar{
            font-size: 1.4em;
        }

</style>
<body>
    <header>
        <div id="logo"><img src="img/stockpc/Stockpc_escrito.png" alt="StockPC Logo" class="logo-stockpc"></div>
    </header>
    

    <div id="form_container">
        <form action="" method="post">
            <p class="entrar">Entrar na StockPC</p>
            <input type="email" name="email" required placeholder="Email"><br>
            <input type="password" name="senha" required placeholder="Senha"><br>
            <span class="mensagem"><?php echo $mensagem; ?></span><br>
            <button id="botao">Entrar</button>

            <div id="cadastro">
                <p><b>Novo na StockPC? <a href="cadastro_inicio.php">Crie uma nova conta.</a></b></p>
            </div>
        </form>
        
      
    </div>

    <footer>
        <strong>Copyright © 2023 StockPC Inc. Todos os direitos reservados.</strong>
    </footer>
</body>
</html>