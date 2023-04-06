function verificarFis(){

    const nome = document.querySelector("#fis_nome");
    const cpf = document.querySelector("#fis_cpf");
    const senha = document.querySelector("#fis_senha");
    const confSenha = document.querySelector("#fis_conf_senha");
    const cel = document.querySelector("#fis_celular");
    const email = document.querySelector("#fis_email");

    let ret = true;

    if(!nome.value.includes(" ")){
        alert("Inserir nome completo no campo 'Nome Completo:'!");
        ret = false;
    }
    if(cpf.value.length!=11||!testaCPF(cpf.value)){
        alert("CPF inválido!");
        ret = false;
    }
    if(senha.value!=confSenha.value){
        alert("Senhas fornecidas são diferentes!");
        ret = false;
    }
    if(cel.value.length!=15){
        alert("Celular inválido!");
        ret = false;
    }

    if(verificarEmailBd(email.value)){
        alert("Email já cadastrado!")
        ret = false;
    }

    if(!ret){
        return false;
    }


    return true;
}

function verificarJur(){

    const nome = document.querySelector("#jur_nome");
    const cnpj = document.querySelector("#jur_cnpj");
    const senha = document.querySelector("#jur_senha");
    const confSenha = document.querySelector("#jur_conf_senha");
    const cel = document.querySelector("#jur_celular");
    const tel = document.querySelector("#jur_tel");
    const email = document.querySelector("#jur_email");

    let ret = true;

    if(!nome.value.includes(" ")){
        alert("Inserir nome completo no campo 'Nome do responsável:'!");
        ret = false;
    }
    if(cnpj.value.length!=14||!testaCNPJ(cnpj.value)){
        alert("CNPJ inválido!");
        ret = false;
    }
    if(senha.value!=confSenha.value){
        alert("Senhas fornecidas são diferentes!");
        ret = false;
    }
    if(cel.value.length!=15){
        alert("Celular inválido!");
        ret = false;
    }
    if(tel.value.length!=10&&tel.value.length!=0){
        alert("Telefone inválido!");
        ret = false;
    }
    
    if(verificarEmailBd(email.value)){
        alert("Email já cadastrado!")
        ret = false;
    }else{
        alert("Email válido!");
    }

    if(!ret){
        return false;
    }

    return true;
}

function testaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000") return false;

  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

function testaCNPJ(cnpj) {
    if(cnpj == '') return false;
 
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999")
        return false;
         
    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;
           
    return true;
    
}

function cadastroFisica(e){
    e.preventDefault();
    const formCpf = document.querySelector("#form_cpf");
    const formCnpj = document.querySelector("#form_cnpj");

    formCnpj.style.display="none";
    formCpf.style.display="block";
}

function cadastroJuridica(e){
    e.preventDefault();
    const formCpf = document.querySelector("#form_cpf");
    const formCnpj = document.querySelector("#form_cnpj");

    formCpf.style.display="none";
    formCnpj.style.display="block";
}

const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }
  

function verificarEmailBd(email){
    let resposta;
    let httpRequest;
    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        resposta = this.responseText;
        console.log(`email resposta: ${resposta}`);
        if(resposta==email){
            console.log("correspondência!!!!");
            console.log("return true!");
            return true;
        }
        console.log("return false!")
        return false;
      }
    };
    console.log(`email enviado: ${email}`);
    let url = "ajax_verificar_email_bd.php?email="+email;
    console.log(`URL: ${url}`);
    httpRequest.open("GET", url, true);
    httpRequest.send();
}
