<?php
$form_placa_mae='
<div class="entrar-items">
    <label for="fabricante">Fabricante:*</label>
    <input type="text" id="fabricante" name="fabricante" placeholder="ASUS" required>
    <p id="mens_fabricante" class="mens"></p>
</div>
<div class="entrar-items">
    <label for="modelo">Modelo:*</label>
    <input type="text" id="modelo" name="modelo" placeholder="ROG STRIX Z490-A GAMING" required>
    <p id="mens_modelo" class="mens"></p>
</div>
<div class="entrar-items">
    <label for="fab_comp">Fabricante do processador compatível:*</label>
    <select name="fab_comp" id="fab_comp" required>
        <option value="">Selecione uma opção</option>
        <option value="amd">AMD</option>
        <option value="intel">Intel</option>
    </select>
    <p id="mens_fab_comp" class="mens"></p>
</div>
<div class="entrar-items">
    <label for="soquete">Soquete do processador:*</label>
    <input type="text" id="soquete" name="soquete" placeholder="AM4" required >
    <p id="mens_soquete" class="mens"></p>
</div>
<div class="entrar-items">
    <label for="frequencia">Frequência base (Mhz):*</label>
    <input type="number" id="frequencia" name="frequencia" placeholder="3666" required>
    <p id="mens_frequencia" class="mens"></p>
</div>
<div class="entrar-items">
    <label for="slots_ram">Quantidade de Barramentos RAM:*</label>
    <input type="number" id="slots_ram" name="slots_ram" placeholder="4" required >
    <p id="mens_slots_ram" class="mens"></p>
</div>
<div class="entrar-items">
    <label for="max_ram">Capacidade máxima de memória RAM (Gb):*</label>
    <input type="number" id="max_ram" name="max_ram" placeholder="128" required >
    <p id="mens_max_ram" class="mens"></p>
</div>
<div class="entrar-items">
    <label for="tipo_ram">Tipo de memória RAM:*</label>
    <select name="tipo_ram" id="tipo_ram" required>
        <option value="">Selecione uma opção</option>
        <option value="DDR">DDR</option>
        <option value="DDR2">DDR2</option>
        <option value="DDR3">DDR3</option>
        <option value="DDR4">DDR4</option>
        <option value="DDR5">DDR5</option>
    </select>
    <p id="mens_tipo_ram" class="mens"></p>
</div>

<div class="entrar-items">
    <label>Barramentos PCIe:*</label>
    <div class="checkbox">
    <input type="checkbox" id="x1" name="x1" value="x1"> <label for="x1">X1</label><br>
    </div>
    <div class="checkbox">
    <input type="checkbox" id="x2" name="x2" value="x2"> <label for="x2">X2</label><br>
    </div>
    <div class="checkbox">
    <input type="checkbox" id="x4" name="x4" value="x4"> <label for="x4">X4</label><br>
    </div>
    <div class="checkbox">
    <input type="checkbox" id="x8" name="x8" value="x8"> <label for="x8">X8</label><br>
    </div>
    <div class="checkbox">
    <input type="checkbox" id="x16" name="x16" value="x16"> <label for="x16">X16</label><br>
    </div>
    <div class="checkbox">
    <input type="checkbox" id="x32" name="x32" value="x32"> <label for="x32">X32</label><br>
    </div>
    <p id="mens_pcie" class="mens"></p>
</div>

<div class="entrar-items">
    <label for="fator_forma">Fator de forma:*</label>
    <select name="fator_forma" id="fator_forma" required>
        <option value="">Selecione uma opção</option>
        <option value="atx">ATX</option>
        <option value="eatx">EATX</option>
        <option value="mini">Mini ATX</option>
        <option value="micro">Micro ATX</option>
    </select>
    <p id="mens_fator_forma" class="mens"></p>
</div>';

$form_processador="";
$form_ram="";
$form_placa_video="";
$form_armazenamento="";
$form_gabinete="";
$form_fonte="";
$form_cooler="";
$form_fan="";
?>