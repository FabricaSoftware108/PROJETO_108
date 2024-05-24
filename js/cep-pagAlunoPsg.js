document.getElementById('cep').addEventListener('blur', function() {
  const cep = this.value.replace(/\D/g, '');
  
  if (cep.length !== 8) {
      alert('Por favor, insira um CEP válido.');
      return;
  }

  fetch(`https://viacep.com.br/ws/${cep}/json/`)
      .then(response => response.json())
      .then(data => {
          if (data.erro) {
              alert('CEP não encontrado.');
              return;
          }

          document.getElementById('rua').textContent = data.logradouro;
          document.getElementById('bairro').textContent = data.bairro;
          document.getElementById('complemento').textContent = data.complemento || 'N/A';
      })
      .catch(error => {
          console.error('Erro ao buscar o CEP:', error);
          alert('Erro ao buscar o CEP. Tente novamente mais tarde.');
      });
});






















// document.getElementById('cep').addEventListener('blur', function() {
//   const cep = this.value.replace(/\D/g, '');
  
//   if (cep.length !== 8) {
//       alert('Por favor, insira um CEP válido.');
//       return;
//   }

//   fetch(`https://viacep.com.br/ws/${cep}/json/`)
//       .then(response => response.json())
//       .then(data => {
//           if (data.erro) {
//               alert('CEP não encontrado.');
//               return;
//           }

//           document.getElementById('rua').textContent = data.logradouro;
//           document.getElementById('bairro').textContent = data.bairro;
//           document.getElementById('complemento').textContent = data.complemento || 'N/A';
//       })
//       .catch(error => {
//           console.error('Erro ao buscar o CEP:', error);
//           alert('Erro ao buscar o CEP. Tente novamente mais tarde.');
//       });
// });
