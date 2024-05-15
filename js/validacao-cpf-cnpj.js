

// cpf.blur(function() {
//     var numeros_cpf = cpf.val().replace(/\D/g,'');
//     if (!ValidarCPF(numeros_cpf)){
//         // o campo do cpf ao perder o foco chama a funçao validarcpf se essa retornar falso, significa que o cpf e invalido.
//         cpf.removeClass("is-valid");
//         cpf.addClass("is-invalid");
//         return false;

//     }
// })



// var cpf= document.getElementsByid('#CPF');
// var numeros_cpf = cpf.value().replace(/\D/g,'');

// cpf.keyup(function(cpf=0){
    
//     if ((numeros_cpf.length == 11) && (ValidarCPF(numeros_cpf))){
//         cpf.removeClass("is-invalid");
//         cpf.addClass("is-valid");
//         validado = true;
//     } else if ((numeros_cpf.length ==11) && (ValidarCPF(numeros_cpf))){
//         cpf.addClass("is-valid");
//         cpf.removeClass("is-invalid");
//     }else if (numeros_cpf.length == 0){
//         // se a quantidade d enumeros for 0, volte as configuraçoes iniciais
//         cpf.addClass("is-valid");
//         cpf.removeClass("is-invalid");
//         validado = false;
//     }else if (validado){
//         // se em algum momento o usuario digitar um CPF válido e retorceder a quantidade de digitos tornando-o inválido.
//         cpf.addClass("is-valid");
//         cpf.removeClass("is-invalid");
//     }

//     function ValidarCPF(cpf=0){
//         console.log(cpf);
//         cpf = cpf.replace(/\.|-/g,"");
    
//         let soma = 0;
//         soma += cpf[0] * 10;
//         soma += cpf[1] * 9;
//         soma += cpf[2] * 8;
//         soma += cpf[3] * 7;
//         soma += cpf[4] * 6;
//         soma += cpf[5] * 5;
//         soma += cpf[6] * 4;
//         soma += cpf[7] * 3;
//         soma += cpf[8] * 2;
//         soma = (soma * 10 ) % 11;
    
//         if(soma == 10 || soma == 11)
//             soma = 0;
    
//         console.log("Primeiro digito: "+soma);
    
//         if(soma != cpf[9] )
//             return false;
//           alert("DIGITE O CPF CERTO")
    
//         soma = 0;
//         soma += cpf[0] * 11;
//         soma += cpf[1] * 10;
//         soma += cpf[2] * 9;
//         soma += cpf[3] * 8;
//         soma += cpf[4] * 7;
//         soma += cpf[5] * 6;
//         soma += cpf[6] * 5;
//         soma += cpf[7] * 4;
//         soma += cpf[8] * 3;
//         soma += cpf[9] * 2;
//         soma = (soma * 10 ) % 11;
    
//         if(soma == 10 || soma == 11)
//             soma = 0;
    
        
    
//         if(soma != cpf[10] )
//             return false;
//         alert("DIGITE O CPF CERTO")
    
    
//         console.log("Segundo digito: "+soma);
//         return true;
//     }
//     console.log(ValidarCPF(cpf));
    
//     document.getElementById("#CPF").addEventListener("input", function (e){
//         console.log(e.target.value())
//     })





// });

const form = document.querySelector('#form')
const campo = document.querySelector('.campo');

form.addEventListener('submit',function(ValidarCPF){
    ValidarCPF.preventDefault()
    const input = campo.value

    console.log(input)

   
    cpf = input.replace(/\.|-/g,"");// aqui tira todos os caracteres e deixa apenas os numeros.

    
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
    //   alert("DIGITE O CPF CERTO")

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
    // alert("DIGITE O CPF CERTO")


    console.log("Segundo digito: "+soma);
    return true;
}


)
  
// function ValidarCPF(input){
//     console.log(cpf);
//     cpf = cpf.replace(/\.|-/g,"");// aqui tira todos os caracteres e deixa apenas os numeros.

 

//     let soma = 0;
//     soma += cpf[0] * 10;
//     soma += cpf[1] * 9;
//     soma += cpf[2] * 8;
//     soma += cpf[3] * 7;
//     soma += cpf[4] * 6;
//     soma += cpf[5] * 5;
//     soma += cpf[6] * 4;
//     soma += cpf[7] * 3;
//     soma += cpf[8] * 2;
//     soma = (soma * 10 ) % 11;

//     if(soma == 10 || soma == 11)
//         soma = 0;

//     console.log("Primeiro digito: "+soma);

//     if(soma != cpf[9] )
//         return false;
//     //   alert("DIGITE O CPF CERTO")

//     soma = 0;
//     soma += cpf[0] * 11;
//     soma += cpf[1] * 10;
//     soma += cpf[2] * 9;
//     soma += cpf[3] * 8;
//     soma += cpf[4] * 7;
//     soma += cpf[5] * 6;
//     soma += cpf[6] * 5;
//     soma += cpf[7] * 4;
//     soma += cpf[8] * 3;
//     soma += cpf[9] * 2;
//     soma = (soma * 10 ) % 11;

//     if(soma == 10 || soma == 11)
//         soma = 0;

    

//     if(soma != cpf[10] )
//         return false;
//     // alert("DIGITE O CPF CERTO")


//     console.log("Segundo digito: "+soma);
//     return true;
// }
// console.log(ValidarCPF(cpf));

// document.getElementById("CPF").value()



    