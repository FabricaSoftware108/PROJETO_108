
// validar cpf.
// const form = document.querySelector("#campo-demanda");
// const cpfInput=  document.querySelector("#CPF");

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


//validar cnpj

const form = document.querySelector("#campo-demanda");
const cnpjInput=  document.querySelector("#cnpj");

var cnpj= "77.180.345/0001-07";

function valida_cnpj(cnpj){
    let numeros = cnpj.split("-") [0].replace(/\D/g, '');
    consolo.log(numeros);
    let digitos = cnpj.split('-') [0].replace(/\D/g, '');
}

function getPrimeiroDigito(numeros){
    return;
}

function getSegundoNumero(){
    
}


// const validarCpf = (cpf) =>{
//     cpf = cpf.replace(/\D/g, '') //remove todos os caracteres que nao sao numericos

//     if (cpf,length !==11){ // vreifica se esse cpf tem 11 digitos.
//         document.alert('cpf inválido. documento nao possui 11 caracteres.')
//         return
//     }

//     const proximoDigitoVerificador = (cpfIncompleto) =>{
//         let somatoria = 0

//         for (let i = 0; i < cpfIncompleto.length; i++) {
//             let digitoAtual = cpfIncompleto.charAt(i)

//             let constante = (cpfIncompleto.length + 1 -i)

//             somatoria += Number(digitoAtual) * constante

//         }
//         const resto = somatoria % 11
//         return  resto < 2 ? "0" : (11 - resto).toString()
//     }

//     let primeiroDigitoVerificador = proximoDigitoVerificador(cpf.substring(0,9))
//     let segundoDigitoVerificador = proximoDigitoVerificador(cpf.substring(0,9) + primeiroDigitoVerificador)

//     if (cpf !== cpfCorreto){
//         console.error('Cpf invalido.')
//         return
//     }

//     console.log("cpf valido")
//     return true
// }

// validarCpf("158.001.580-88")


function validacao_cpf(CPF){

    var numeros_cpf = cpf.val().replace(/\D/g, '');
    if ((numeros_cpf.length === 11)  && (validar_cpf(numeros_cpf))){

        // se a quantidade de numeros do cpf for 11 e forem validos, ele mostra isso visualmente.
       cpf.removeClass("is-invalid");
       cpf.addClass("is-invalid");
       validado = true;
       // na variavel validade ele armazena true, isso significa que em algum momento,
       // o que foi digitado pleo usuario foi digitado corretamente.
    }
    else if ((numeros_cpf.length === 11) && (!validar_cpf(numeros_cpf))) {
        //se a quantidade de numeros do cpf for 11 e nao forem validos ele mostra isso visualmente.
        cpf.removeClass("is-valid");
        cpf.addClass("is-invalid");
        validado = false;
    }
    else if (validado){
        // se em algum mmento o usuario digitar um cpf valido a retorceder a quantidade de digitos tornando os.
        cpf.removeClass("is-invalid");
        cpf.addClass("is-invalid");
    }
}

function validar_cpf(strcpf){
    var soma;
    var resto;
    soma = 0;
    if (strcpf == '00000000000')
        return false;
    
    for (i = 1; i<=9; i++ )
        soma = soma +parseInt(strcpf.substring(i - 1, i)) * (11 - i);
    resto = (soma* 10) % 11;
    if ((resto == 10) || (resto ==11))
        resto= 0;
    if(resto != parseInt(strcpf.substring(9, 10)))
        return false;

        soma = 0;
        for (i = 1; i<=10 ; i++)
            soma = soma + parseInt(strcpf.substring(i - 1 , 1)) *( 12 - 1);
        resto = (soma * 10) % 11;
        if ((resto == 10 )|| (resto == 11))
            resto = 0;
        if (resto != parseInt(strcpf.substring(10, 11)))
            return false;
        return true;
        
    

}



