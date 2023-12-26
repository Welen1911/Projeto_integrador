<!-- form do candidato -->
<div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100" id="candidato">
    <h2 class="text-xl mb-6">Mais Informações do Candidato</h2>

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full h-40 px-3 break-all">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                Sobre Você
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm bg-grey-lighter border-gray-500  rounded border "
                placeholder="Taca qualquer coisa ai" name="sobre">{{
                    $candidato->sobre ?? old('sobre')
                }}</textarea>
            <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3" id="">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
                Currículo
            </label>
            <div id="tagInputWrapper" class="flex flex-wrap bg-grey-lighter text-grey-darke">
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3"
                    id="tagInput" type="file" name="curriculo">
            </div>
            <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3" id="">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
              area de atuação
          </label>
          <div id="tagInputWrapper" class="flex flex-wrap bg-grey-lighter text-grey-darke">
              <select
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3"
                  id="tagInput" name="area">
                  @foreach ($areas as $area)
                  <option value="{{ $area->id }}">
                    {{ $area->nome }}
                  </option>
                  @endforeach
                </select>
          </div>
          <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
  </div>


    <h2 class="text-xl mb-6">Formações</h1>
        <div class="rounded border-2 flex py-5 px-5 flex-col-reverse mb-6" id="formacao">

            {{-- Formação do Candidato --}}
            <div class="-mx-3 md:flex">
              <div class="md:w-full px-3" id="">
                  <p class="hover:cursor-pointer text-indigo-800 text-sm" id="btnFormacao">Adiciona formação +</p>
              </div>
          </div>
            @if (isset($candidato->formacaos) && count($candidato->formacaos) > 0)
            @foreach ($candidato->formacaos as $formacao)
          
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 " for="grid-password">
                    Instituição
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4 mb-3" id="grid-password" type="text" placeholder="Rua longe pra caralho" name="formacaoExists[{{ $formacao->id }}][]" value="{{
                    $formacao->instituto ?? ''
                  }}">
                  <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
                </div>
              </div>
      
              <div class="-mx-3 md:flex mb-2">
      
                <div class="md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                    Nome do Curso
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="" type="text" placeholder="Analise e Desenvolvimento de Sistemas" name="formacaoExists[{{ $formacao->id }}][]" value="{{
                    $formacao->curso
                  }}">
                </div>
      
                <div class="md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                    Tipo de Fomação
                  </label>
                  <div class="flex flex-row-reverse items-center">
                    <select class="block appearance-none w-full bg-gray-300 border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="dropdown" name="formacaoExists[{{ $formacao->id }}][]">
                      <option value="s">Superior</option>
                      <option value="t">Tecnico</option>
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
                    <select class="block appearance-none w-full bg-gray-300 border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="dropdown" name="formacaoExists[{{ $formacao->id }}][]">
                      <option value="c">Completo</option>
                      <option value="n">Incompleto</option>
                      <option value="s">Cursando</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>
                </div>
              
              </div>
      
          
            @endforeach
            @endif
            
        </div>

        <h2 class="text-xl mb-6">Experiencias Profissionais</h1>
            <div class="rounded border-2 flex py-5 px-5 flex-col-reverse mb-6" id="experiencia">
              {{-- Formação do Candidato --}}
              <div class="-mx-3 md:flex">
                <div class="md:w-full px-3" id="">
                    <p class="hover:cursor-pointer text-indigo-800 text-sm" id="btnExperiencia">Adiciona
                        experiencias +</p>
                </div>
            </div>
                @if (isset($candidato->experiencias) && count($candidato->experiencias) > 0)
              @foreach ($candidato->experiencias as $experiencia)
              <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full h-40 px-3 break-all">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Descrição
                  </label>
                  <textarea id="message" rows="4" class="block p-2.5 w-full text-sm bg-grey-lighter border-gray-500  rounded border " placeholder="Taca qualquer coisa ai" name="experienciaExists[{{ $experiencia->id }}][]">{{ $experiencia->descricao ?? '' }}</textarea>
                  <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
                </div>
              </div>
      
              <div class="-mx-3 md:flex mb-2">
                <div class="md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                    Nome da Empresa
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="" type="text" placeholder="Analise e Desenvolvimento de Sistemas" name="experienciaExists[{{ $experiencia->id }}][]" value="{{
                    $experiencia->empresa ?? ''
                  }}">
                </div>
      
                <div class="md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                    Trabalha aqui atualmente ?
                  </label>
                  <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-500 rounded py-3 px-4" id="" name="experienciaExists[{{ $experiencia->id }}][]">
                  <option value="n">Não</option>
                  <option value="s">Sim</option>
                  </select>
                </div>
              </div>
      
              @endforeach

                @endif
                
            </div>


            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3" id="">
                    <input
                        class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl  font-medium text-center text-white bg-indigo-800
                rounded-lg transition duration-200 hover:bg-indigo-600 ease"
                        id="sub" type="submit" value="Enviar">
                </div>
            </div>
</div>
