//com

$(function(){
    $('#cep').mask('00000-000');
    $('#cnpj').mask('00.000.000/0000-00');
    $('#cpf').mask('000.000.000-00');
    $('#celular').mask('(00) 00000-0000');
    $('#fixo').mask('0000-0000');

})


//Completar Cidade e Estado pelo CEP

$(function () {
    // code
    $('#cep').on('keyup', function (a) {
        if ($(this).val().length == 9) {
            $.ajax("http://viacep.com.br/ws/" + $(this).val().replace("-", "")
            + "/json/", {
        success: function (res) {
            $("[name=cidade]").val(res.localidade);
            $("[name=estado]").val(res.uf);
        }
    });
    }
    });
    });

//Muda o Form Conforme o tipo de usuário

$(document).ready(function(){
    $("#dropdown").change(function(){
      var selectedOption = $(this).val();
      
      $.ajax({
        url: '/', // Substitua 'seu_arquivo.php' pelo arquivo que processará a requisição
        method: 'GET', // Pode ser POST ou GET, dependendo da sua implementação
        data: { option: selectedOption },
        success: function(response) {

          if (selectedOption === "1") {
            $("#candidato").show();
            $("#candidatoCampo").show();
            $("#cpfCampo").show();
            $("#empresa").hide();
            $("#empresaCampo").hide();
            $("#cnpjCampo").hide();

          } else if (selectedOption === "2") {
            $("#empresa").show();
            $("#empresaCampo").show();
            $("#cnpjCampo").show();
            $("#candidato").hide();
            $("#candidatoCampo").hide();
            $("#cpfCampo").hide();
          } else if (selectedOption === "0") {
            $("#empresa").hide();
            $("#empresaCampo").hide();
            $("#cnpjCampo").hide();
            $("#candidato").hide();
            $("#candidatoCampo").hide();
            $("#cpfCampo").hide();
          }
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
    });
  })
})

$(document).ready(function() {
  $('#tagInput').on('keydown', function(event) {
    if (event.key === 'Enter' || event.keyCode === 13) {
      event.preventDefault();

      const tagValue = $(this).val().trim();
      if (tagValue !== '') {
        // Adicionar a tag dentro do campo de input
        $('#tagInputWrapper').append(`<span class="bg-gray-200 px-2 py-1 rounded-md mr-2 mb-2">${tagValue}<button type="button" class="ml-2 text-gray-700 font-bold">x</button></span>`);

        // Limpar o input
        $(this).val('');
      }
    }
  });

  // Remover a tag quando o botão "x" é clicado
  $('#tagInputWrapper').on('click', 'button', function() {
    $(this).parent().remove();
  });
});