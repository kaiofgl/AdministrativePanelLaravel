function clearCEPForm(){
    document.getElementById('address').value="";
    document.getElementById('neighborhood').value="";
    document.getElementById('city').value="";
    document.getElementById('state').value=""; 
} 
function callbackViaCep(content){
    document.getElementById('address').value=(content.logradouro);
    document.getElementById('neighborhood').value=(content.bairro);
    document.getElementById('city').value=(content.localidade);
    document.getElementById('state').value=(content.uf);
}

function getCEPData(cep){
    var cep = cep.replace(/\D/g, '');
    if (cep != "") {
        var regularExpression = /^[0-9]{8}$/;
        if(regularExpression.test(cep)) {
            document.getElementById('address').value="Carregando...";
            document.getElementById('neighborhood').value="Carregando...";
            document.getElementById('city').value="Carregando...";
            document.getElementById('state').value="Carregando...";
            var script = document.createElement('script');
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=callbackViaCep';
            document.body.appendChild(script);
        }
        else {
            clearCEPForm();
            alert("Formato de CEP inválido.");
        }
    }
    else {
        clearCEPForm();
    }
}