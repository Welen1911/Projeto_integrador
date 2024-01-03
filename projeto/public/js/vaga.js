
let contAtributo = 0
let contRequisito = 0


$(function () {
  $('#cep').mask('00000-000');
  $('#cnpj').mask('00.000.000/0000-00');
  $('#cpf').mask('000.000.000-00');
  $('#celular').mask('(00) 00000-0000');
  $('#fixo').mask('0000-0000');

})

$(document).ready(function () {
  $('#tagInput').on('keydown', function (event) {
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
  $('#tagInputWrapper').on('click', 'button', function () {
    $(this).parent().remove();
  });
});

//Adiciona Formm de Formação
$(document).ready(() => {
  $('#btnatributos').on('click', (event) => {
    $('#atributo').append(`
        
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-full px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
              Atributo
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Atributo" name="atributo[]">
            <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
          </div>
        </div>
        <h2 class="mb-4 text-lg">Atributo ${contAtributo + 1}</h2>
  
    `)

    contAtributo++
  })
})

// Adiciona Form de Experiencias
$(document).ready(() => {
  $('#btnRequisitos').on('click', (event) => {
    $('#requisito').append(`
        
    <div class="-mx-3 md:flex mb-2">
    <div class="md:w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Requisito
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" id="" type="text" placeholder="Requisito" name="requisito[]">
    </div>
    </div>
        <h2 class="mb-4 text-lg">Requisito ${contRequisito + 1}</h2>
  
    `)

    contRequisito++
  })
})

