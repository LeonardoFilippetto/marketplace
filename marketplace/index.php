<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marketplace</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <span>Header<span>
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
        <form action='precarrinho.php?id=".$id_anunc."'>
            <button class='btn_anunc'>COMPRAR</button>
        <form>
    </div>";
}
echo"</div>";
        
?>
<footer>
    <span>Footer</span>
</footer>
</body>
</html> 
