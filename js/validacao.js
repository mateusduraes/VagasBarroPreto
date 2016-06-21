function validaNome (nome){
    if(nome == ""){
        return false;
    } else {
        return true;
    }
}

/*
Aqui é feito validação com expressão regular, formato
(99)9999-9999
*/
function validaTelefone(telefone){
  var er = /\([0-9]{2}\)[0-9]{4}\-[0-9]{4}/g;
  if(telefone.length != 13){
      return false;
  } else {
      return er.test(telefone);
  }
}

/*
Aqui é feito validação com expressão regular, formato
(99)99999-9999
*/
function validaCelular(celular){
  var er = /\([0-9]{2}\)[0-9]{5}\-[0-9]{4}/g;
  if(celular.length != 14){
      return false;
  } else {
      return er.test(celular);
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
/*
  Aqui é feito validação com expressão regular, formato
  123.456.789-01
*/
function validaCPF(cpf){
    var er = /[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/g;
    if(cpf.length != 14){
        return false;
    } else {
        return er.test(cpf);
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
        invalidaVisualmente($elemento);
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


function validaEmailEmpregador(email, $elemento){
    if (email.length == 0){ //verificar também expressão regular
        invalidaVisualmente($elemento);
    } else {
      var resultado;
      $.ajax({
           type: 'post',
           data: {email : email},
           url: 'get-empregador.php',
           success: function(retorno){
               console.log("Email não existe: " + retorno);
               if(retorno == "false"){
                 invalidaVisualmente($elemento);
                 var mensagemInformacaoInvalida = "<p class='text-danger'>Este e-mail já está sendo utilizado.</p>"
                 $elemento.parent().append(mensagemInformacaoInvalida);
               } else if(retorno == "true") {
                 validaVisualmente($elemento);
                 $elemento.parent().find('.text-danger').remove();
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


/*
Aqui é feito validação com expressão regular, formato
99.999.999/9999-99
*/
function validaCNPJ(cnpj){
  var er = /[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}/g;
  if(cnpj.length != 18){
      return false;
  } else {
      return er.test(cnpj);
  }
}
