(function() {
    const cep = document.querySelector("input[name=cep]"); 

    cep.addEventListener('blur', e => {
        const value = cep.value.replace(/[^0-9]+/g, '');

        if (value.length !== 8) {
            alert('Por favor, insira um CEP válido.');
            cep.value = '';
            return;
        }

        const url = `https://viacep.com.br/ws/${value}/json/`;

        fetch(url)
        .then(response => response.json())
        .then(json => {
            if (json.erro) {
                alert('CEP não encontrado.');
                cep.value = '';
            } else if (json.logradouro) {
                document.querySelector('input[name=rua]').value = json.logradouro;
                document.querySelector('input[name=bairro]').value = json.bairro;
                document.querySelector('input[name=cidade]').value = json.localidade;
                document.querySelector('input[name=uf]').value = json.uf;
            }
        })

        // esse aqui estava dando erro no cep na pag banco de talentos apagar quando for dar PR amém.
        // .catch(error => {
        //     console.error('Erro ao buscar o CEP:', error);
        //     alert('Ocorreu um erro ao buscar o CEP.');
        // });
    });
})();
