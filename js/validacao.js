function validaNome (nome){
    if(nome == ""){
        return false;
    } else {
        return true;
    }
}

/*Aqui deve ser trocado por uma expressão regular*/
function validaTelefone(telefone){
    if  (telefone.length != 13){
        return false;
    } else {
        return true;
    }
}

/*Aqui deve ser trocado por uma expressão regular*/
function validaCelular(celular){
    if(celular.length != 14){
        return false;
    } else {
        return true;
    }
}

function validaIdade(idade){
    if(parseInt(idade) <= 0 || idade == ""){
        return false;
    } else {
        return true;
    }
}

function validaSexo(sexo){
    if(sexo != "m" || sexo != "f"){
        return false;
    } else {
        return true;
    }
}
/*Aqui deve ser trocado por uma expressão regular*/
function validaCPF(cpf){
    if(cpf.length != 14){
        return false;
    } else {
        return true;
    }
}

function validaDescricao(descricao){
    if(descricao == ""){
        return false;
    } else {
        return true;
    }
}

function validaHabilidades(habilidades){
    if(habilidades == ""){
        return false;
    } else {
        return true;
    }
}

/*Expressão Regular de email e ajax pra verificar unique index no banco*/
function validaEmailCandidato(email, $elemento){
    if (email.length == 0){ //verificar também expressão regular
        return false;
    } else {
      var resultado;
      $.ajax({
           type: 'post',
           data: {email : email},
           url: 'get-candidato.php',
           success: function(retorno){
               console.log("Email não existe: " + retorno);
               if(retorno == "false"){
                 invalidaVisualmente($elemento);
               } else if(retorno == "true") {
                 validaVisualmente($elemento);
               }
           }
       })
    }
}

/*Pelo menos 6 dígitos*/
function validaSenha(senha){
    if (senha.length != 6){
        return false;
    } else {
        return true;
    }
}


/*Só de empresa*/
function validaCNPJ(cnpj){
    if(cnpj.length != 18){
        return false;
    } else {
        return true;
    }
}
