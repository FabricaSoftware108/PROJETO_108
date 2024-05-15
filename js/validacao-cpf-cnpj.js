// function validar() {
//     var documento = document.getElementById("documento").value.replace(/[^\d]+/g,'');
  
//     if (documento.length === 11) {
//       if (!validarCPF(documento)) {
//         document.getElementById("resultado").innerText = "CPF inválido.";
//       } else {
//         document.getElementById("resultado").innerText = "CPF válido.";
//       }
//     } else if (documento.length === 14) {
//       if (!validarCNPJ(documento)) {
//         document.getElementById("resultado").innerText = "CNPJ inválido.";
//       } else {
//         document.getElementById("resultado").innerText = "CNPJ válido.";
//       }
//     } else {
//       document.getElementById("resultado").innerText = "Documento inválido.";
//     }
//   }
  
//   function validarCPF(cpf) {
//     cpf = cpf.replace(/[^\d]+/g,'');
//     if (cpf == '') return false;
//     // Elimina CPFs invalidos conhecidos
//     if (cpf.length != 11 ||
//       cpf == "00000000000" ||
//       cpf == "11111111111" ||
//       cpf == "22222222222" ||
//       cpf == "33333333333" ||
//       cpf == "44444444444" ||
//       cpf == "55555555555" ||
//       cpf == "66666666666" ||
//       cpf == "77777777777" ||
//       cpf == "88888888888" ||
//       cpf == "99999999999")
//       return false;
//     // Valida 1o digito
//     add = 0;
//     for (i=0; i < 9; i ++)
//       add += parseInt(cpf.charAt(i)) * (10 - i);
//     rev = 11 - (add % 11);
//     if (rev == 10 || rev == 11)
//       rev = 0;
//     if (rev != parseInt(cpf.charAt(9)))
//       return false;
//     // Valida 2o digito
//     add = 0;
//     for (i = 0; i < 10; i ++)
//       add += parseInt(cpf.charAt(i)) * (11 - i);
//     rev = 11 - (add % 11);
//     if (rev == 10 || rev == 11)
//       rev = 0;
//     if (rev != parseInt(cpf.charAt(10)))
//       return false;
//     return true;
//   }
  
//   function validarCNPJ(cnpj) {
//     cnpj = cnpj.replace(/[^\d]+/g,'');
//     if (cnpj == '') return false;
//     if (cnpj.length != 14)
//       return false;
//     // Elimina CNPJs invalidos conhecidos
//     if (cnpj == "00000000000000" ||
//       cnpj == "11111111111111" ||
//       cnpj == "22222222222222" ||
//       cnpj == "33333333333333" ||
//       cnpj == "44444444444444" ||
//       cnpj == "55555555555555" ||
//       cnpj == "66666666666666" ||
//       cnpj == "77777777777777" ||
//       cnpj == "88888888888888" ||
//       cnpj == "99999999999999")
//       return false;
//     // Valida DVs
//     tamanho = cnpj.length - 2;
//     numeros = cnpj.substring(0,tamanho);
//     digitos = cnpj.substring(tamanho);
//     soma = 0;
//     pos = tamanho - 7;
//     for (i = tamanho; i >= 1; i--) {
//       soma += numeros.charAt(tamanho - i) * pos--;
//       if (pos < 2)
//         pos = 9;
//     }
//     resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
//     if (resultado != digitos.charAt(0))
//       return false;
//     tamanho = tamanho + 1;
//     numeros = cnpj.substring(0,tamanho);
//     soma = 0;
//     pos = tamanho - 7;
//     for (i = tamanho; i >= 1; i--) {
//       soma += numeros.charAt(tamanho - i) * pos--;
//       if (pos < 2)
//         pos = 9;
//     }
//     resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
//     if (resultado != digitos.charAt(1))
//       return false;
//     return true;
//   }



  
var cpf= document.getElementsByClassName('cpfverification');
var cpf= document.getElementsByid('#CPF');

document.querySelector("#CPF").addEventListener("input",function(e){

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
          alert("DIGITE O CPF CERTO")
    
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
        alert("DIGITE O CPF CERTO")
    
    
        console.log("Segundo digito: "+soma);
        return true;
    }
    console.log(isCPF(cpf));
    
    document.getElementById("#CPF").addEventListener("input", function (e){
        console.log(e.target.value)
    })

})


