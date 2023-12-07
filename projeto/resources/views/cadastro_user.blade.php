<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Estilo -->
    <link rel="stylesheet" href="{{ asset('css/interacao.css') }}">
</head>
</head>
<body>
  
  @include('components.app.header')

<form class="inset-x-0 mt-20 z-10 w-full px-8 sm:px-16 lg:px-40 py-1 " id="myForm">
  <!-- component -->
  <div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100 ">
    <h2 class="text-xl">Informações do Usuário</h1>
    <div class="mt-6 -mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
          Tipo de Conta
        </label>
        <div class="flex flex-row-reverse items-center">
          <select class="block appearance-none w-full bg-gray-300 border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="dropdown">
            <option value="0">Selecione o tipo de conta</option>
            <option value="1">Candidato</option>
            <option value="2">Empresa</option>
          </select>
          <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0 hidden" id="candidatoCampo">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Nome Completo
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Gabigol de Arascaeta Henrique">
        <p class="text-red text-xs italic">Digite o seu nome completo.</p>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0 hidden" id="empresaCampo">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Nome da Empresa
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Gabigol de Arascaeta Henrique">
        <p class="text-red text-xs italic">Digite o nome da empresa.</p>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0 hidden" id="cnpjCampo">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
         CNPJ
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="cnpj" type="text" placeholder="12.345.678/0001-10">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0 hidden" id="cpfCampo">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
         CPF
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="cnpj" type="text" placeholder="123.456.789-10">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
          Endereço
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Rua longe pra caralho">
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>

    <div class="-mx-3 md:flex mb-2">

      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
          Numero
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="" type="text" placeholder="124">
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Bairro
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="grid-city" type="text" name="cidade" placeholder="Logo ali">
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Complemento
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="grid-city" type="text" name="estado" placeholder="Perto de onde eu tava">
      </div>
      
    </div>

    

    <div class="-mx-3 md:flex mb-2">

      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
          Cep
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="cep" type="text" placeholder="00000-000">
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Cidade
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="grid-city" type="text" name="cidade" placeholder="">
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Estado
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="grid-city" type="text" name="estado" placeholder="">
      </div>
      
    </div>

    <div class="-mx-3 md:flex mb-2">

      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
          Celular
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="celular" type="text" placeholder="(99) 99999-9999">
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Telefone Fixo
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="fixo" type="text" name="cidade" placeholder="9999-9999">
      </div>
      
    </div>
  </div>

  <!-- form do candidato -->
  {{--<div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100 hidden" id="candidato">
    <h2 class="text-xl">Mais Informações do Candidato</h1>
    <div class="mt-6 -mx-3 md:flex mb-6">
      
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Nome Completo
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Gabigol de Arascaeta Henrique">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
          Endereço
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Rua longe pra caralho">
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Bairro
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Logo ali">
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-2">

      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
          Cep
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="cep" type="text" placeholder="00000-000">
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Cidade
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="grid-city" type="text" name="cidade" placeholder="">
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          Estado
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="grid-city" type="text" name="estado" placeholder="">
      </div>
      
    </div>
  </div>--}}

  <!--Form da Empresa-->
  <div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100 hidden" id="empresa">
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

    <input class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-800
    rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" value="Enviar">
  </div>
</form>

</body>
</html>