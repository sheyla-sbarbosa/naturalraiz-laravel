let cep = document.querySelector('#cep')
let rua = document.querySelector('#endereco')
let bairro = document.querySelector('#bairro')


cep.onkeyup = async (event)=>{

    if(cep.value.length == 8){
        
        let resposta = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`)
        let dadosDoCep = await resposta.json()
        
        
        endereco.value = dadosDoCep.endereco
        bairro.value = dadosDoCep.bairro
       
    }

}
