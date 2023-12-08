
var contFormacao = 0
var contExperiancia = 0


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
      let selectedOption = $(this).val();
      let userId = $('#user_id').val();
      $.ajax({
        url: '/api/tipo_conta/' + userId, // Substitua 'seu_arquivo.php' pelo arquivo que processará a requisição
        method: 'put', // Pode ser POST ou GET, dependendo da sua implementação
        data: { option: selectedOption },
        success: function(response) {
          $(this).prop("disabled", true);
          console.log(response);
          if (selectedOption === "1") {
            $("#candidato").show();
            $("#candidatoCampo").show();
            $("#cpfCampo").show();
            $("#cnpjCampo").hide();
            $("#sub").hide();

          } else if (selectedOption === "2") {
            $("#cnpjCampo").show();
            $("#sub").show();
            $("#candidato").hide();
            $("#candidatoCampo").hide();
            $("#cpfCampo").hide();
          } else if (selectedOption === "0") {
            $("#cnpjCampo").hide();
            $("#candidato").hide();
            $("#candidatoCampo").hide();
            $("#cpfCampo").hide();
            $("#sub").hide();
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

//Adiciona Formm de Formação
$(document).ready(()=>{
  $('#btnFormacao').on('click', (event)=>{
    $('#formacao').append(`
        
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-full px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
              Instituição
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Rua longe pra caralho">
            <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
          </div>
        </div>

        <div class="-mx-3 md:flex mb-2">

          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
              Nome do Curso
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="" type="text" placeholder="Analise e Desenvolvimento de Sistemas">
          </div>

          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
              Tipo de Fomação
            </label>
            <div class="flex flex-row-reverse items-center">
              <select class="block appearance-none w-full bg-gray-300 border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="dropdown">
                <option >Bacharelado</option>
                <option >Tecnologo</option>
                <option >Licenciatura</option>
              </select>
              <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
          </div>

          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
              Atualmente
            </label>
            <div class="flex flex-row-reverse items-center">
              <select class="block appearance-none w-full bg-gray-300 border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="dropdown">
                <option >Completo</option>
                <option >Incompleto</option>
                <option >Cursando</option>
              </select>
              <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
          </div>
        
        </div>

        <h2 class="mb-4 text-lg">Formação ${contFormacao + 1}</h2>
  
    `)

    contFormacao++
  })
})

// Adiciona Form de Experiencias
$(document).ready(()=>{
  $('#btnExperiencia').on('click', (event)=>{
    $('#experiencia').append(`
        
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-full h-40 px-3 break-all">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
              Descrição
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm bg-grey-lighter border-gray-500  rounded border " placeholder="Taca qualquer coisa ai"></textarea>
            <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
          </div>
        </div>

        <div class="-mx-3 md:flex mb-2">
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
              Nome da Empresa
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="" type="text" placeholder="Analise e Desenvolvimento de Sistemas">
          </div>

          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
              Função
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="" type="text" placeholder="Analise e Desenvolvimento de Sistemas">
          </div>
        </div>

        <h2 class="mb-4 text-lg">Experiencia ${contExperiancia + 1}</h2>
  
    `)

    contFormacao++
  })
})