function validaVisualmente($elemento){
    $elemento.removeClass('invalido');
    $elemento.addClass('valido');
}

function invalidaVisualmente($elemento){
    $elemento.removeClass('valido');
    $elemento.addClass('invalido');
}

/*Validações do formulário do cadastro para candidato*/
$('#form-cadastro-candidato').on('blur', 'input', function(){
    /* Pra cada validação, caso false, será chamado a respectiva function para adicionar um elemento na página*/
    if ($(this).hasClass('input-cadastrar-nome')){
        if(validaNome($(this).val())){
           validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

    if ($(this).hasClass('input-cadastrar-telefone')){
        if(validaTelefone($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

    if ($(this).hasClass('input-cadastrar-celular')){
        if(validaCelular($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

    if($(this).hasClass('input-cadastrar-idade')){
        if(validaIdade($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

    if($(this).hasClass('input-cadastrar-sexo')){
        if(validaSexo($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

    if($(this).hasClass('input-cadastrar-cpf')){
        if(validaCPF($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

    if($(this).hasClass('input-cadastrar-email')){
        validaEmailCandidato($(this).val(), $(this));
    }

    if($(this).hasClass('input-cadastrar-senha')){
        if(validaSenha($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

});

/*Validações dos textarea do cadastro para candidato*/
$('#form-cadastro-candidato').on('blur', 'textarea', function(){
    if($(this).hasClass('textarea-cadastrar-descricao')){
        if(validaDescricao($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

    if($(this).hasClass('textarea-cadastrar-habilidades')){
        if(validaHabilidades($(this).val())){
            validaVisualmente($(this));
        } else {
            invalidaVisualmente($(this));
        }
    }

});

$('#form-cadastro-empregador').on('blur', 'input', function(){

  if($(this).hasClass('input-cadastrar-nome')){
    if(validaNome($(this).val())){
      validaVisualmente($(this));
    } else {
      invalidaVisualmente($(this));
    }
  }

  if($(this).hasClass('input-cadastrar-cnpj')){
    if(validaCNPJ($(this).val())){
      validaVisualmente($(this));
    } else {
      invalidaVisualmente($(this));
    }
  }

  if($(this).hasClass('input-cadastrar-telefone')){
    if(validaTelefone($(this).val())){
      validaVisualmente($(this));
    } else {
      invalidaVisualmente($(this));
    }
  }

  if($(this).hasClass('input-cadastrar-celular')){
    if(validaCelular($(this).val())){
      validaVisualmente($(this));
    } else {
      invalidaVisualmente($(this));
    }
  }

  if($(this).hasClass('input-cadastrar-email')){
    validaEmailEmpregador($(this).val(), $(this));
  }

  if($(this).hasClass('input-cadastrar-senha')){
    if(validaSenha($(this).val())){
      validaVisualmente($(this));
    } else {
      invalidaVisualmente($(this));
    }
  }

});
