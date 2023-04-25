<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marketplace</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>

        <nav>
         <a href="#" id="logo2">STOCKPC</a>
     
            <div class="search-container">
                 <input type="text" placeholder="Buscar" name="search" >
                 <img src="img/stockpc/Stockpc.png" alt="" style="height:1rem; margin:0.2rem;">
            </div>

            <ul>
                <li><a href="#">Entrar</a></li>
            </ul>
        </nav>

    </header>

        

<?php
require("conexao.php");
$query = "SELECT * FROM anuncios";
$result = mysqli_query($con, $query);
echo "<div id='grid'>";
while ($row = mysqli_fetch_array($result)) {
    $id_anunc=($row['id_anuncio']);
    $id_vend=($row['id_vendedor']);
    $nome_prod=($row['titulo_anuncio']);
    //$tipo=($row['tipo_prod']);
    $preco=($row['preco']);
    $img_princ=($row['img_princ']);
    /*echo $id_anunc."<br>";
    echo $id_vend."<br>";
    echo $nome_prod."<br>";
    echo $tipo."<br>";
    echo $preco."<br>";
    echo "<img src='img/".$img_princ."' width='200px'><br><br>";*/
    
    echo"<div class='anuncio'>
        <div class='img_anunc'>
            <img src='img/".$img_princ."' >
        </div>
        <span class='titulo_anunc'>$nome_prod</span>
        <span class='preco'>R$ ".$preco."</span>
        <form id='form_carrinho' action='precarrinho.php?id=".$id_anunc."'>
            <button class='btn_anunc'>COMPRAR</button>
        </form>
    </div>";
}
echo"</div>";
        
?>
<footer>
    <span>Copyright © 2023 StockPC Inc. Todos os direitos reservados.</span>
</footer>
</body>
</html> 
