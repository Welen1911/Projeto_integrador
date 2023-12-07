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
                $("#empresa").hide();

              } else if (selectedOption === "2") {
                $("#empresa").show();
                $("#candidato").hide();
              } else if (selectedOption === "0") {
                $("#empresa").hide();
                $("#candidato").hide();
              }
            },
            error: function(xhr, status, error) {
              console.error(error);
            }
        });
      })
    })