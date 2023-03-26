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
<body>
    <header>
        <span>Header</span>
    </header>

    <div id="form_container">
        <form action="" method="post">
            <h1>Login</h1>
            <input type="email" name="email" required placeholder="Email"><br>
            <input type="password" name="senha" required placeholder="Senha"><br>
            <span class="mensagem"><?php echo $mensagem; ?></span><br>
            <button>Entrar</button>
        </form>
    </div>

    <footer>
        Footer
    </footer>
</body>
</html>