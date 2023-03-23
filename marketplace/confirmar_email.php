<?php
if(isset($_POST['numero'])){
    $numero_form=$_POST['numero'];
    $complemento_form=$_POST['complemento'];
    $logradouro_form=$_POST['logradouro'];
    $bairro_form=$_POST['bairro'];
    $cep_form=$_POST['cep'];
    $cidade_form=$_POST['cidade'];
    $referencia_form=$_POST['referencia'];

    $nome_form=$_POST['nome'];
    $email_form=$_POST['email'];
    $cel_form=$_POST['celular'];
    $data_form=$_POST['data_nasc'];

    $senha = $_SESSION["senha"];

    if($_POST['cad']=="fis"){
        $cpf=$_POST['cpf'];

        $query = "INSERT INTO usuarios (cep, logradouro, data, numero, bairro, complemento, cidade, referencia, nome, cpf, email, senha, celular) VALUES ($cep_form, $logradouro_form, $data_form, $numero_form, $bairro_form, $complemento_form, $cidade_form, $referencia_form, $nome_form, $cpf_form, $email_form, $senha, $cel_form)";

    }else{
        $cnpj=$_POST['cnpj'];
        $nome_fant=$_POST['nome_fant'];
        $raz_soc=$_POST['raz_soc'];
        $tributo=$_POST['tributo'];
        $tel=$_POST['tel'];

        //ALTERAR**
        $query = "INSERT INTO usuarios (cep, logradouro, data, numero, bairro, complemento, cidade, referencia, nome, cnpj, , email, senha, celular) VALUES ($cep_form, $logradouro_form, $data_form, $numero_form, $bairro_form, $complemento_form, $cidade_form, $referencia_form, $nome_form, $cpf_form, $email_form, $senha, $cel_form)";

    }
    

    if()
    $query = "INSERT INTO usuarios (cep, logradouro, data, numero, bairro, complemento, cidade, referencia, nome, cpf, email, senha, celular) VALUES ($cep_form, $logradouro_form, $data_form, $numero_form, $bairro_form, $complemento_form, $cidade_form, $referencia_form, $nome_form, $cpf_form, $email_form, $senha, $cel_form)";
    //$result = mysqli_query($con, $query);
}
?>