<!--Form da Empresa-->
<div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100" id="empresa">
    <h2 class="text-xl">Cadastro de Vagas</h1>
    <div class="mt-6 -mx-3 md:flex mb-6">

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Titulo da Vaga 
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Vagabundo Senior" name="titulo" value="{{ $vaga->titulo ?? old('titulo') }}">
        <p class="text-red text-xs italic"></p>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Tipo de Candidatura
        </label>
        <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" name="vinculo">
          <option value="pj">PJ</option>
          <option value="clt">CLT</option>
          <option value="fr">Freelancer</option>
        </select>
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>

      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Modelo de Trabalho
        </label>
        <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-first-name" name="tipo">
          <option value="r">Remoto</option>
          <option value="p">Presencial</option>
          <option value="h">Hibrido</option>
        </select>
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>

      
    </div>
    
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Área da Vaga
        </label>
        <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" name="area">
          @foreach ($areas as $area)
              <option value="{{ $area->id }}">{{ $area->nome }}</option>
          @endforeach
        </select>
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>
    
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full h-40 px-3 break-all">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Descrição
        </label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm bg-grey-lighter border-gray-500  rounded border " placeholder="Taca qualquer coisa ai" name="descricao">{{ $vaga->descricao ?? old('descricao') }}</textarea>
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>

    <h2 class="text-xl mb-6">Atributos do empregado na empresa</h1>
      <div class="rounded border-2 flex py-5 px-5 flex-col-reverse mb-6" id="atributo">
          {{-- Formação do Candidato --}}
          <div class="-mx-3 md:flex">
              <div class="md:w-full px-3" id="">
                  <p class="hover:cursor-pointer text-indigo-800 text-sm" id="btnatributos">Adiciona atributo +</p>
              </div>
          </div>
      </div>

      <h2 class="text-xl mb-6">Requisitos</h1>
          <div class="rounded border-2 flex py-5 px-5 flex-col-reverse mb-6" id="requisito">
              {{-- Formação do Candidato --}}
              <div class="-mx-3 md:flex">
                  <div class="md:w-full px-3" id="">
                      <p class="hover:cursor-pointer text-indigo-800 text-sm" id="btnRequisitos">Adiciona
                          experiencias +</p>
                  </div>
              </div>
          </div>

    <input class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-800
    rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" value="Enviar">
  </div>