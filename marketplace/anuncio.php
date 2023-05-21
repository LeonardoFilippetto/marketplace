<?php
session_start();
if(!isset($_GET['id_anunc']))
    header("Location:index.php");
else{
    require("conexao.php");

    $id_anunc=$_GET['id_anunc'];

    $query="SELECT * FROM anuncios WHERE id_anuncio='$id_anunc' LIMIT 1";
    $result = mysqli_query($con, $query);
    $row_anunc = mysqli_fetch_array($result);
    
    $ativo=$row_anunc['ativo'];
    if($ativo==0)
        header("Location:index.php");

    $id_vendedor=$row_anunc['id_vendedor'];
    $titulo=$row_anunc['titulo_anuncio'];
    $categoria=$row_anunc['categoria_produto'];
    $preco=$row_anunc['preco'];
    $estoque=$row_anunc['estoque'];
    $img_princ=$row_anunc['img_princ'];
    $string_imgs_sec=$row_anunc['imgs_sec'];
    $descricao=$row_anunc['descricao'];
    $informacoes=$row_anunc['informacoes_adicionais'];

    $imagens_secundarias = explode(",", $string_imgs_sec);

    $query="SELECT nome, nome_fantasia, razao_social FROM usuarios WHERE id_usuario='$id_vendedor' LIMIT 1";
    $result = mysqli_query($con, $query);
    $row_vend = mysqli_fetch_array($result);
    
    $razao_social=$row_vend['razao_social'];
    $nome_fantasia=$row_vend['nome_fantasia'];
    $nome=$row_vend['nome'];


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/anuncio.css">
    <style>
    #logo2 {
        font-size: 24px;
        text-transform: uppercase;
        letter-spacing: 0.2rem;
    }

    a {
        color: rgb(255, 255, 255);
        text-decoration: none;
        transition: 0.3s;
    }

    a:hover {
        opacity: 0.7;
    }

    nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
        position: fixed;
        flex-wrap: wrap;
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: #000000;
        height: 10vh;
        width: 100%;
        top: 0;
    }

    #nav-list {
        list-style: none;
        display: flex;
    }

    #nav-list li {
        margin-left: 32px;
    }


    .search-container {
        float: right;
        border-radius: 30px;
        background-color: #e4e4e4;
        display: flex;
        align-items: center;
        padding-right: 0.3rem;
    }

    input[type=text] {
        padding: 0.4rem 0.8rem;
        font-size: 1rem;
        border: none;
        border-radius: 30px;
        background-color: #e4e4e4;
        color: #363636;
        text-align: left;

    }
    </style>
</head>
<body>
    <header>

    <nav>
        <a href="#" id="logo2">STOCKPC</a>

        <form action="" method="post" id="frm_busca">
            <div class="search-container">
                <input type="text" placeholder="Buscar" name="search" id="busca">
                <img src="img/stockpc/Stockpc.png" alt="" style="height:1rem; margin:0.2rem;" id="lupa">
            </div>
        </form>

        <ul>
            <li><a href="login.php">Entrar</a></li>
        </ul>
    </nav>

    </header>

    <div id="main" class="secao">
        <h1><?php echo $titulo; ?></h1>
        <div id="imagens" class="secao_main">
            <div id="imgs_secundarias">
            <div class='img_sec'><img src='img/<?php echo $img_princ; ?>' class='img_sec'></div>
                <?php
                    foreach($imagens_secundarias as $imagem){
                        echo"<div class='img_sec'><img src='img/$imagem' ></div>";
                    }
                ?>
            </div>
            <div id="img_principal">
                <img src="img/<?php echo $img_princ; ?>">
            </div>
        </div>

        <div id="info_principal"  class="secao_main">
            <div id="info_geral">
                <p>**avaliação** **condição** **fabricante**</p>
            </div>
            <div id="frete">
                <?php if(!isset($_SESSION['id_usuario'])){?>
                    <label for="cep">Insira o CEP para calcular frete e prazo de entrega:</label>
                    <input type="number" onKeyPress="if(this.value.length==8) return false;" id="cep" name="cep" placeholder="12345678" > <button id="frete">OK</button> 
                <?php } else{?>
                    <p>**frete** **endereço** **alterar endereço**</p>
                <?php } ?>
            </div>
            <div id="compra">
                <div id="preco">R$<?php echo $preco; ?></div>
                <form id='form_carrinho' action='precarrinho.php'>
                    <input type='hidden' value='<?php echo $id_anunc;?>' name='id_anunc'>
                    <button class='btn_anunc'>COMPRAR</button>
                </form>
            </div>
            
        </div>
    </div>

    <div id="info_secundaria">
        <div id="descricao" class="secao">
            <h3 class='titulo_secao'>Descrição do produto</h3>
            <p class='p_secao'><?php echo $descricao; ?></p>
        </div>
        <div id="especific_tec" class="secao">
            <h3 class='titulo_secao'>Especificações técnicas</h3>
            <p class='p_secao'><?php echo '**especificações**' ?></p>
        </div>
        <div id="info_adic" class="secao">
            <h3 class='titulo_secao'>Informações adicionais</h3>
            <p class='p_secao'><?php echo $informacoes ?></p>
        </div>
    </div>
    



    <footer>
        <span>Copyright © 2023 StockPC Inc. Todos os direitos reservados.</span>
    </footer>
</body>
</html>