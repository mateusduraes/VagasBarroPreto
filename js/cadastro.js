
/*Validações do formulário do cadastro para candidato*/
$('#form-cadastro-candidato').on('blur', 'input', function(){
    /* Pra cada validação, caso false, será chamado a respectiva function para adicionar um elemento na página*/
    if ($(this).hasClass('input-cadastrar-nome')){
      validaNome($(this));
    }
    if ($(this).hasClass('input-cadastrar-telefone')){
      validaTelefone($(this));
    }
    if ($(this).hasClass('input-cadastrar-celular')){
      validaCelular($(this));
    }
    if($(this).hasClass('input-cadastrar-idade')){
        validaIdade($(this));
    }
    if($(this).hasClass('input-cadastrar-sexo')){
        validaSexo($(this));
    }
    if($(this).hasClass('input-cadastrar-cpf')){
        validaCPF($(this));
    }
    if($(this).hasClass('input-cadastrar-email')){
        validaEmailCandidato($(this));
    }

    if($(this).hasClass('input-cadastrar-senha')){
        validaSenha($(this));
    }
});

/*Validações dos textarea do cadastro para candidato*/
$('#form-cadastro-candidato').on('blur', 'textarea', function(){
    if($(this).hasClass('textarea-cadastrar-descricao')){
        validaDescricao($(this));
    }
    if($(this).hasClass('textarea-cadastrar-habilidades')){
        validaHabilidades($(this));
    }
});

$('#form-cadastro-empregador').on('blur', 'input', function(){
  if($(this).hasClass('input-cadastrar-nome')){
    validaNome($(this));
  }
  if($(this).hasClass('input-cadastrar-cnpj')){
    validaCNPJ($(this));
  }
  if($(this).hasClass('input-cadastrar-telefone')){
    validaTelefone($(this));
  }
  if($(this).hasClass('input-cadastrar-celular')){
    validaCelular($(this));
  }
  if($(this).hasClass('input-cadastrar-email')){
    validaEmailEmpregador($(this));
  }
  if($(this).hasClass('input-cadastrar-senha')){
    validaSenha($(this));
  }
});


/*Aqui é feito de fato a validação para o formulário de cadastro de candidato, os listeners anteriores
apensa guiam o usuário para o preenchimento correto e validação visual dos campos */
$('#form-cadastro-candidato').on('submit', function(event){
  
  validaEmailCandidato($('#form-cadastro-candidato .input-cadastrar-email'));
  var booleans = [
    validaNome($('#form-cadastro-candidato .input-cadastrar-nome')),
    validaTelefone($('#form-cadastro-candidato .input-cadastrar-telefone')),
    validaCelular($('#form-cadastro-candidato .input-cadastrar-celular')),
    validaIdade($('#form-cadastro-candidato .input-cadastrar-idade')),
    validaCPF($('#form-cadastro-candidato .input-cadastrar-cpf')),
    validaDescricao($('#form-cadastro-candidato .textarea-cadastrar-descricao')),
    validaHabilidades($('#form-cadastro-candidato .textarea-cadastrar-habilidades')),
    $('#form-cadastro-candidato .input-cadastrar-email').hasClass('valido'),
    validaSenha($('#form-cadastro-candidato .input-cadastrar-senha'))
  ];

  console.log(booleans);
  var invalido = false;
  for (var i = 0; i < booleans.length; i++) {
    if(!booleans[i]){
        invalido = true;
    }
  }

  if(invalido){
    event.preventDefault();
    var mensagemInformacaoInvalida = "<p class='text-danger'>Algum campo não foi preenchido ou é inválido.</p>"    
    if($(this).find('button').parent().find('p').length == 0){
      $(this).find('button').parent().append(mensagemInformacaoInvalida).hide().fadeIn(1000);
    } else {
      $(this).find('button').parent().find('p').fadeOut(500).fadeIn(1000);
    }
  }

});



/*Aqui é feito de fato a validação para o formulário de cadastro de empresa, os listeners anteriores
apensa guiam o usuário para o preenchimento correto e validação visual dos campos */
$('#form-cadastro-empregador').on('submit', function(event){
  validaEmailEmpregador($('#form-cadastro-empregador .input-cadastrar-email'));
  var booleans = [
    validaNome($('#form-cadastro-empregador .input-cadastrar-nome')),
    validaCNPJ($('#form-cadastro-empregador .input-cadastrar-cnpj')),
    validaTelefone($('#form-cadastro-empregador .input-cadastrar-telefone')),
    validaCelular($('#form-cadastro-empregador .input-cadastrar-celular')),
    $('#form-cadastro-empregador .input-cadastrar-email').hasClass('valido'),
    validaSenha($('#form-cadastro-empregador .input-cadastrar-senha'))
  ];

  console.log(booleans);
  var invalido = false;
  for (var i = 0; i < booleans.length; i++) {
    if(!booleans[i]){
        invalido = true;
    }
  }

  if(invalido){
    event.preventDefault();
    var mensagemInformacaoInvalida = "<p class='text-danger'>Algum campo não foi preenchido ou é inválido.</p>"    
    if($(this).find('button').parent().find('p').length == 0){
      $(this).find('button').parent().append(mensagemInformacaoInvalida).hide().fadeIn(1000);
    } else {
      $(this).find('button').parent().find('p').fadeOut(500).fadeIn(1000);
    }
  }

});
