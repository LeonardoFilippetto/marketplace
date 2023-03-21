function verificar(){

    const nome = document.querySelector("#nome");
    const cpf = document.querySelector("#cpf");
    const senha = document.querySelector("#senha");
    const confSenha = document.querySelector("#conf_senha");
    const cel = document.querySelector("#celular");

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
    if(cel.value.length!=11){
        alert("Celular inválido!");
        ret = false;
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

function cadastroFisica(){
    const formCpf = document.querySelector("#form_cpf");
    const formCnpj = document.querySelector("#form_cnpj");

    formCnpj.style.display="none";
    formCpf.style.display="block";
}

function cadastroJuridica(){
    const formCpf = document.querySelector("#form_cpf");
    const formCnpj = document.querySelector("#form_cnpj");

    formCpf.style.display="none";
    formCnpj.style.display="block";
}
