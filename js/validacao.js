function validaNome ($elemento){
    if($($elemento).val() == ""){
        invalidaVisualmente($elemento);
        return false;
    } else {
        validaVisualmente($elemento);
        return true;
    }
}

/*
Aqui é feito validação com expressão regular, formato
(99)9999-9999
*/
function validaTelefone($elemento){
  var er = /\([0-9]{2}\)[0-9]{4}\-[0-9]{4}/g;
  if($($elemento).val().length != 13){
      invalidaVisualmente($elemento);
      return false;
  } else if(er.test($($elemento).val())) {
      validaVisualmente($elemento);
      return true;
  } else {
    invalidaVisualmente($elemento);
    return false;
  }
}

/*
Aqui é feito validação com expressão regular, formato
(99)99999-9999
*/
function validaCelular($elemento){
  var er = /\([0-9]{2}\)[0-9]{5}\-[0-9]{4}/g;
  if($($elemento).val().length != 14){
      invalidaVisualmente($elemento);
      return false;
  } else if(er.test($($elemento).val())) {
        validaVisualmente($elemento);
        return true;
  } else {
    invalidaVisualmente($elemento);
    return false;
  }
}

function validaIdade($elemento){
    if(parseInt($($elemento).val()) <= 0 || $($elemento).val() == ""){
        invalidaVisualmente($elemento);
        return false;
    } else {
        validaVisualmente($elemento);
        return true;
    }
}

function validaSexo($elemento){
    if($($elemento).val() != "m" || $($elemento).val() != "f"){
        invalidaVisualmente($elemento);
        return false;
    } else {
        validaVisualmente($elemento);
        return true;
    }
}
/*
  Aqui é feito validação com expressão regular, formato
  123.456.789-01
*/
function validaCPF($elemento){
    var er = /[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/g;
    if($($elemento).val().length != 14){
        invalidaVisualmente($elemento);
        return false;
    } else if (er.test($($elemento).val())){
        validaVisualmente($elemento);
        return true;
    } else {
      invalidaVisualmente($elemento);
      return false;
    }
}

function validaDescricao($elemento){
    if($($elemento).val() == ""){
        invalidaVisualmente($elemento);
        return false;
    } else {
        validaVisualmente($elemento);
        return true;
    }
}

function validaHabilidades($elemento){
    if($($elemento).val() == ""){
        invalidaVisualmente($elemento);
        return false;
    } else {
        validaVisualmente($elemento);
        return true;
    }
}

/*Expressão Regular de email e ajax pra verificar unique index no banco*/
function validaEmailCandidato($elemento){
  if ($($elemento).val().length == 0){ //verificar também expressão regular
      invalidaVisualmente($elemento);
      var mensagemInformacaoInvalida = "<p class='text-danger'>E-mail inválido.</p>"
      if($($elemento).hasClass('invalido')){
        if($($elemento).parent().find('.text-danger').length == 0){
          $($elemento).parent().append(mensagemInformacaoInvalida);
          $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
        } else {
          $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
        }
      }
  } else {    
    $.ajax({
         type: 'post',
         data: {email : $($elemento).val()},
         url: 'get-candidato.php',
         success: function(retorno){
             console.log("Email não existe: " + retorno);
             if(retorno == "false"){
               invalidaVisualmente($elemento);
               var mensagemInformacaoInvalida = "<p class='text-danger'>E-mail não disponível.</p>"
               if($($elemento).hasClass('invalido')){
                 if($($elemento).parent().find('.text-danger').length == 0){
                   $($elemento).parent().append(mensagemInformacaoInvalida);
                   $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
                 } else {
                   $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
                 }
               }
             } else if(retorno == "true") {
               validaVisualmente($elemento);
               $($elemento).parent().find('.text-danger').remove();
             }
         }
     })
  }
  
}


function validaEmailEmpregador($elemento){
  if ($($elemento).val().length == 0){ //verificar também expressão regular
      invalidaVisualmente($elemento);
      var mensagemInformacaoInvalida = "<p class='text-danger'>E-mail inválido.</p>"
      if($($elemento).hasClass('invalido')){
        if($($elemento).parent().find('.text-danger').length == 0){
          $($elemento).parent().append(mensagemInformacaoInvalida);
          $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
        } else {
          $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
        }
      }
  } else {    
    $.ajax({
         type: 'post',
         data: {email : $($elemento).val()},
         url: 'get-empregador.php',
         success: function(retorno){
             console.log("Email não existe: " + retorno);
             if(retorno == "false"){
               invalidaVisualmente($elemento);
               var mensagemInformacaoInvalida = "<p class='text-danger'>E-mail não disponível.</p>"
               if($($elemento).hasClass('invalido')){
                 if($($elemento).parent().find('.text-danger').length == 0){
                   $($elemento).parent().append(mensagemInformacaoInvalida);
                   $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
                 } else {
                   $($elemento).parent().find('.text-danger').hide().fadeIn(1000);
                 }
               }
             } else if(retorno == "true") {
               validaVisualmente($elemento);
               $($elemento).parent().find('.text-danger').remove();
             }
         }
     })
  }
}

/*Pelo menos 6 dígitos*/
function validaSenha($elemento){
    if ($($elemento).val() < 6){
        invalidaVisualmente($elemento);
        return false;
    } else {
        validaVisualmente($elemento);
        return true;
    }
}


/*
Aqui é feito validação com expressão regular, formato
99.999.999/9999-99
*/

function validaCNPJ($elemento){
  var er = /[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}/g;
  if($($elemento).val().length != 18){
      invalidaVisualmente($elemento);
      return false;
  } else if(er.test($($elemento).val())){
      validaVisualmente($elemento);
      return true;
  } else {
    invalidaVisualmente($elemento);
    return false;
  }
}

function validaVisualmente($elemento){
    $elemento.removeClass('invalido');
    $elemento.addClass('valido');
}

function invalidaVisualmente($elemento){
    $elemento.removeClass('valido');
    $elemento.addClass('invalido');
}
