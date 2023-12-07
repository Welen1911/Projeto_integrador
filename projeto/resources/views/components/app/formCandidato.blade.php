<!-- form do candidato -->
<div class=" shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 bg-gray-100 hidden" id="candidato">
    <h2 class="text-xl mb-6">Mais Informações do Candidato</h2>
          
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full h-40 px-3 break-all">
              <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                Sobre Você
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

        <h2 class="text-xl mb-6">Formações</h1>
        <div class="rounded border-2 flex py-5 px-5 flex-col-reverse mb-6" id="formacao">
            {{--Formação do Candidato--}}
            <div class="-mx-3 md:flex">
                <div class="md:w-full px-3" id="">
                    <p class="hover:cursor-pointer text-indigo-800 text-sm"  id="btnFormacao">Adiciona formação +</p>
                </div>
            </div>
        </div>  
        
        <h2 class="text-xl mb-6">Experiencias Proficionais</h1>
          <div class="rounded border-2 flex py-5 px-5 flex-col-reverse mb-6" id="experiencia">
              {{--Formação do Candidato--}}
              <div class="-mx-3 md:flex">
                  <div class="md:w-full px-3" id="">
                      <p class="hover:cursor-pointer text-indigo-800 text-sm"  id="btnExperiencia">Adiciona experiencias +</p>
                  </div>
              </div>
          </div>  
        
       
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3" id="">
                <input class="w-40 inline-block pt-4 pr-5 pb-4 pl-5 text-xl  font-medium text-center text-white bg-indigo-800
                rounded-lg transition duration-200 hover:bg-indigo-600 ease" id="sub" type="submit" value="Enviar">
            </div>
        </div>
</div>
