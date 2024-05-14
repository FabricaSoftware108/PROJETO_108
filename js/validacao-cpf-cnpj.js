 
//validar cpf.
// const form = document.getElementById('campo-demanda');
// const cpfInput=  document.getElementById('CPF');

// form.addEventListener("submit", (event) =>{
//     event.preventDefault();

//     //verifica se o cpf está vazio.

//     if (cpfInput.value ==''){
//         alert("Preencha o campo CPF CORRETAMENTE!!")
//         return false;
//     }

//     //se todos os campos estiverem preenchidos corretamente evia o form.
//     form.submit();


// })

var cpf = "169.169.000-75";
   cpf = "469.957.937-06";


function isCPF(cpf=0){
    console.log(cpf);
    cpf = cpf.replace(/\.|-/g,"");

    let soma = 0;
    soma += cpf[0] * 10;
    soma += cpf[1] * 9;
    soma += cpf[2] * 8;
    soma += cpf[3] * 7;
    soma += cpf[4] * 6;
    soma += cpf[5] * 5;
    soma += cpf[6] * 4;
    soma += cpf[7] * 3;
    soma += cpf[8] * 2;
    soma = (soma * 10 ) % 11;

    if(soma == 10 || soma == 11)
        soma = 0;

    console.log("Primeiro digito: "+soma);

    if(soma != cpf[9] )
        return false;

    soma = 0;
    soma += cpf[0] * 11;
    soma += cpf[1] * 10;
    soma += cpf[2] * 9;
    soma += cpf[3] * 8;
    soma += cpf[4] * 7;
    soma += cpf[5] * 6;
    soma += cpf[6] * 5;
    soma += cpf[7] * 4;
    soma += cpf[8] * 3;
    soma += cpf[9] * 2;
    soma = (soma * 10 ) % 11;

    if(soma == 10 || soma == 11)
        soma = 0;

    

    if(soma != cpf[10] )
        return false;


    console.log("Segundo digito: "+soma);
    return true;
}
console.log(isCPF(cpf));





 //validar cnpj

// const form = document.querySelector("#campo-demanda"); 
// const cnpjInput=  document.querySelector("#cnpj");

// var cnpj= "77.180.345/0001-07";

// function valida_cnpj(cnpj){
//     let numeros = cnpj.split("-") [0].replace(/\D/g, '');    
//     consolo.log(numeros);
//     let digitos = cnpj.split('-') [1];
//     console.log(digitos);
//     if(getPrimeiroDigito() != digitos[0])
//         return "cnpj("+cnpj+") - invalido";    

//     return "cnpj("+cnpj+") - valido";
    
// }

// function getPrimeiroDigito(numeros){
//     for (let i= numeros.length -1 ; i > 0; i--){
//         console.log(i);    
//     }
//     return 0;
// }

// function getSegundoNumero(){
//     return 0;    
// }

// console.log(valida_cnpj(cnpj));
// valida_cnpj(cnpj); -->



//validar cpf ESSE ESTÁ FUNCIONANDOO.



