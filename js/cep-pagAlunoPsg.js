const inputs = document.querySelectorAll('input');

inputs.forEach(
    input => {
        input.onfocus = function() {
            const parent = input.parentElement;
            parent.querySelector('label').classList.add('active');
        }

        input.onblur = function() {
            if(input.value.length == 0){
                const parent = input.parentElement;
                parent.querySelector('label').classList.remove('active');
            }
            
        }
    }
);

// CEP.JS

const formatar_cep = cep => {
  cep = cep.replace(/\D/g, '')
  return cep
}

const buscar_cep = async () => {
  let cep = document.querySelector('#cep').value
  cep = formatar_cep(cep)

  if (cep.length == 8) {
    const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`)
    const data = await response.json()
    if (typeof data.erro != 'undefined') return alert('CEP não encontrado')

    return data
  }
}

document.querySelector('#cep').addEventListener('keyup', async () => {
  const data = await buscar_cep()
  if (data == undefined) return

  const bairro = document.querySelector('#bairro')
  const numero = document.querySelector('#numero')
  const complemento = document.querySelector('#complemento')
  const rua = document.querySelector('#rua')

  bairro.value = data.bairro
  numero.value = data.numero
  complemento.value = data.complemento
  rua.value = data.rua
  renderiza_mudancas()
})

const renderiza_mudancas = () => {
  const bairro = document.querySelector('#bairro')
  const numero = document.querySelector('#numero')
  const complemento = document.querySelector('#complemento')
  const rua = document.querySelector('#rua')
  const cep_field = document.querySelector('#cep')
  logradouro_field.focus()
  bairro_field.focus()
  localidade_field.focus()
  uf_field.focus()
  cep_field.focus()
}
