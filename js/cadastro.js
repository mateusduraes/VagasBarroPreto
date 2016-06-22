
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
$('#form-cadastro-candidato').on('submit', function(){
  event.preventDefault();
  var booleans = [
    validaNome($('.input-cadastrar-nome')),
    validaTelefone($('.input-cadastrar-telefone')),
    validaCelular($('.input-cadastrar-celular')),
    validaIdade($('.input-cadastrar-idade')),
    validaSexo($('.input-cadastrar-sexo')),
    validaCPF($('.input-cadastrar-cpf')),
    validaDescricao($('.textarea-cadastrar-descricao')),
    validaHabilidades($('.textarea-cadastrar-habilidades')),
    validaEmailCandidato($('.input-cadastrar-email')),
    validaSenha($('.input-cadastrar-senha'))
  ];

  var invalido = false;
  for (var i = 0; i < booleans.length; i++) {
    if(!booleans[i]){
        invalido = true;
    }
  }

  if(invalido){
    var mensagemInformacaoInvalida = "<p class='text-danger'>Algum campo não foi preenchido ou é inválido.</p>"
    event.preventDefault();
    if($(this).find('button').parent().find('p').length == 0){
      $(this).find('button').parent().append(mensagemInformacaoInvalida).hide().fadeIn(1000);
    } else {
      $(this).find('button').parent().find('p').fadeOut(500).fadeIn(1000);
    }
  }
});



/*Aqui é feito de fato a validação para o formulário de cadastro de empresa, os listeners anteriores
apensa guiam o usuário para o preenchimento correto e validação visual dos campos */
$('#form-cadastro-empregador').on('submit', function(){

});
