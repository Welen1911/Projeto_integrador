<!--Form da Empresa-->
<div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100" id="empresa">
    <h2 class="text-xl">Cadastro de Vagas</h1>
    <div class="mt-6 -mx-3 md:flex mb-6">

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Titulo da Vaga 
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Vagabundo Senior">
        <p class="text-red text-xs italic"></p>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Tipo de Candidatura
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="PJ">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Modelo de Trabalho
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Remoto">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>

      
    </div>
    
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Área da Vaga
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Profissional em fazer nada">
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>
    
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full h-40 px-3 break-all">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Descrição
        </label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm bg-grey-lighter border-gray-500  rounded border " placeholder="Taca qualquer coisa ai"></textarea>
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3" id="">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
          Habilidades e Ferramentas
        </label>
        <div id="tagInputWrapper" class="flex flex-wrap bg-grey-lighter text-grey-darke">
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="tagInput" type="text" placeholder="Habilidades pra encher linguiça">
        </div>
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>

    <input class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-800
    rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" value="Enviar">
  </div>