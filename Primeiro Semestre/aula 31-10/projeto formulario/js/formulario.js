function cadastrar(){
    
    var nome= document.getElementById('nomeDigitado').value.trim();
    var email= document.getElementById('emailDigitado').value.trim();
    var endereco= document.getElementById('enderecoDigitado').value.trim();

    if (nome === "" || email === "" || endereco === ""){
        alert("Por favor, preencha todos os campos.");
    }
    else {
        alert("Cadastro realizado com sucesso!\nNome: " + nome + "\nE-mail: " +email + "\nEndereço: " + endereco);
    }
    
}


    