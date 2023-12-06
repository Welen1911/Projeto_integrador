<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- component -->
<div class="bg-white relative lg:py-20">
    <div class="flex flex-col items-center justify-between pt-0 pr-10 pb-0 pl-10 mt-0 mr-auto mb-0 ml-auto max-w-7xl
        xl:px-5 lg:flex-row">
      <div class="flex flex-col items-center w-full pt-5 pr-10 pb-20 pl-10 lg:pt-20 lg:flex-row">
        <div class="w-full bg-cover relative max-w-md lg:max-w-2xl lg:w-7/12">
          <div class="flex flex-col items-center justify-center w-full h-full relative lg:pr-10">
            <img src="{{ asset('imagens/ImgBanner.png') }}" class="btn-"/>
          </div>
        </div>
        <div class="w-full mt-20 mr-0 mb-0 ml-0 relative z-10 max-w-2xl lg:mt-0 lg:w-5/12">
          <form class="flex flex-col items-start justify-start pt-10 pr-10 pb-10 pl-10 bg-white shadow-2xl rounded-xl
              relative z-10" action="" method="">
              @csrf
            <p class="w-full text-4xl font-extrabold text-center leading-snug ">Tipo da conta</p>
            <div class="w-full mt-6 mr-0 mb-0 ml-0 relative space-y-8">
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Tipo</p>
                <select placeholder="123@ex.com" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="tipo_conta" value="{{ old('tipo_conta') }}"> 
                    <option value="candidato">Candidato</option>
                    <option value="empresa">Empresa</option>
                </select>
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Celular</p>
                <input placeholder="(11) 4002-8922" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="celular" value="{{ old('celular') }}"/> 
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">CEP</p>
                <input placeholder="00000-000" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="cep" value="{{ old('cep') }}"/> 
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Estado</p>
                <select placeholder="" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="estado" value="{{ old('estado') }}"> 
                    <option value="">RN</option>
                    <option value="">PR</option>
                  </select>
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Cidade</p>
                <input placeholder="Nova Cruz" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="cidade" value="{{ old('cidade') }}"/> 
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Bairro</p>
                <input placeholder="Centro" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="bairro" value="{{ old('bairro') }}"/> 
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Rua</p>
                <input placeholder="Principal" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="rua" value="{{ old('rua') }}"/> 
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Número</p>
                <input placeholder="Principal" type="number" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="numero" value="{{ old('numero') }}"/> 
              </div>
              <div class="relative">
                <p class="bg-white pt-0 pr-2 pb-0 pl-2 -mt-3 mr-0 mb-0 ml-2 font-medium text-gray-600 absolute">Complemento</p>
                <input placeholder="Perto do sinal" type="text" class="border placeholder-gray-400 focus:outline-none
                    focus:border-black w-full pt-4 pr-4 pb-4 pl-4 mt-2 mr-0 mb-0 ml-0 text-base block bg-white
                    border-gray-300 rounded-md" name="complemento" value="{{ old('complemento') }}"/> 
              </div>
              <div class="relative">
                <button class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-800
                    rounded-lg transition duration-200 hover:bg-indigo-600 ease">Entrar</button>
              </div>
              

            </div>
          </form>
          <svg viewbox="0 0 91 91" class="absolute top-0 left-0 z-0 w-32 h-32 -mt-12 -ml-12 text-yellow-300
              fill-current"><g stroke="none" strokewidth="1" fillrule="evenodd"><g fillrule="nonzero"><g><g><circle
              cx="3.261" cy="3.445" r="2.72"/><circle cx="15.296" cy="3.445" r="2.719"/><circle cx="27.333" cy="3.445"
              r="2.72"/><circle cx="39.369" cy="3.445" r="2.72"/><circle cx="51.405" cy="3.445" r="2.72"/><circle cx="63.441"
              cy="3.445" r="2.72"/><circle cx="75.479" cy="3.445" r="2.72"/><circle cx="87.514" cy="3.445" r="2.719"/></g><g
              transform="translate(0 12)"><circle cx="3.261" cy="3.525" r="2.72"/><circle cx="15.296" cy="3.525"
              r="2.719"/><circle cx="27.333" cy="3.525" r="2.72"/><circle cx="39.369" cy="3.525" r="2.72"/><circle
              cx="51.405" cy="3.525" r="2.72"/><circle cx="63.441" cy="3.525" r="2.72"/><circle cx="75.479" cy="3.525"
              r="2.72"/><circle cx="87.514" cy="3.525" r="2.719"/></g><g transform="translate(0 24)"><circle cx="3.261"
              cy="3.605" r="2.72"/><circle cx="15.296" cy="3.605" r="2.719"/><circle cx="27.333" cy="3.605" r="2.72"/><circle
              cx="39.369" cy="3.605" r="2.72"/><circle cx="51.405" cy="3.605" r="2.72"/><circle cx="63.441" cy="3.605"
              r="2.72"/><circle cx="75.479" cy="3.605" r="2.72"/><circle cx="87.514" cy="3.605" r="2.719"/></g><g
              transform="translate(0 36)"><circle cx="3.261" cy="3.686" r="2.72"/><circle cx="15.296" cy="3.686"
              r="2.719"/><circle cx="27.333" cy="3.686" r="2.72"/><circle cx="39.369" cy="3.686" r="2.72"/><circle
              cx="51.405" cy="3.686" r="2.72"/><circle cx="63.441" cy="3.686" r="2.72"/><circle cx="75.479" cy="3.686"
              r="2.72"/><circle cx="87.514" cy="3.686" r="2.719"/></g><g transform="translate(0 49)"><circle cx="3.261"
              cy="2.767" r="2.72"/><circle cx="15.296" cy="2.767" r="2.719"/><circle cx="27.333" cy="2.767" r="2.72"/><circle
              cx="39.369" cy="2.767" r="2.72"/><circle cx="51.405" cy="2.767" r="2.72"/><circle cx="63.441" cy="2.767"
              r="2.72"/><circle cx="75.479" cy="2.767" r="2.72"/><circle cx="87.514" cy="2.767" r="2.719"/></g><g
              transform="translate(0 61)"><circle cx="3.261" cy="2.846" r="2.72"/><circle cx="15.296" cy="2.846"
              r="2.719"/><circle cx="27.333" cy="2.846" r="2.72"/><circle cx="39.369" cy="2.846" r="2.72"/><circle
              cx="51.405" cy="2.846" r="2.72"/><circle cx="63.441" cy="2.846" r="2.72"/><circle cx="75.479" cy="2.846"
              r="2.72"/><circle cx="87.514" cy="2.846" r="2.719"/></g><g transform="translate(0 73)"><circle cx="3.261"
              cy="2.926" r="2.72"/><circle cx="15.296" cy="2.926" r="2.719"/><circle cx="27.333" cy="2.926" r="2.72"/><circle
              cx="39.369" cy="2.926" r="2.72"/><circle cx="51.405" cy="2.926" r="2.72"/><circle cx="63.441" cy="2.926"
              r="2.72"/><circle cx="75.479" cy="2.926" r="2.72"/><circle cx="87.514" cy="2.926" r="2.719"/></g><g
              transform="translate(0 85)"><circle cx="3.261" cy="3.006" r="2.72"/><circle cx="15.296" cy="3.006"
              r="2.719"/><circle cx="27.333" cy="3.006" r="2.72"/><circle cx="39.369" cy="3.006" r="2.72"/><circle
              cx="51.405" cy="3.006" r="2.72"/><circle cx="63.441" cy="3.006" r="2.72"/><circle cx="75.479" cy="3.006"
              r="2.72"/><circle cx="87.514" cy="3.006" r="2.719"/></g></g></g></g></svg>
          <svg viewbox="0 0 91 91" class="absolute bottom-0 right-0 z-0 w-32 h-32 -mb-12 -mr-12 text-indigo-500
              fill-current"><g stroke="none" strokewidth="1" fillrule="evenodd"><g fillrule="nonzero"><g><g><circle
              cx="3.261" cy="3.445" r="2.72"/><circle cx="15.296" cy="3.445" r="2.719"/><circle cx="27.333" cy="3.445"
              r="2.72"/><circle cx="39.369" cy="3.445" r="2.72"/><circle cx="51.405" cy="3.445" r="2.72"/><circle cx="63.441"
              cy="3.445" r="2.72"/><circle cx="75.479" cy="3.445" r="2.72"/><circle cx="87.514" cy="3.445" r="2.719"/></g><g
              transform="translate(0 12)"><circle cx="3.261" cy="3.525" r="2.72"/><circle cx="15.296" cy="3.525"
              r="2.719"/><circle cx="27.333" cy="3.525" r="2.72"/><circle cx="39.369" cy="3.525" r="2.72"/><circle
              cx="51.405" cy="3.525" r="2.72"/><circle cx="63.441" cy="3.525" r="2.72"/><circle cx="75.479" cy="3.525"
              r="2.72"/><circle cx="87.514" cy="3.525" r="2.719"/></g><g transform="translate(0 24)"><circle cx="3.261"
              cy="3.605" r="2.72"/><circle cx="15.296" cy="3.605" r="2.719"/><circle cx="27.333" cy="3.605" r="2.72"/><circle
              cx="39.369" cy="3.605" r="2.72"/><circle cx="51.405" cy="3.605" r="2.72"/><circle cx="63.441" cy="3.605"
              r="2.72"/><circle cx="75.479" cy="3.605" r="2.72"/><circle cx="87.514" cy="3.605" r="2.719"/></g><g
              transform="translate(0 36)"><circle cx="3.261" cy="3.686" r="2.72"/><circle cx="15.296" cy="3.686"
              r="2.719"/><circle cx="27.333" cy="3.686" r="2.72"/><circle cx="39.369" cy="3.686" r="2.72"/><circle
              cx="51.405" cy="3.686" r="2.72"/><circle cx="63.441" cy="3.686" r="2.72"/><circle cx="75.479" cy="3.686"
              r="2.72"/><circle cx="87.514" cy="3.686" r="2.719"/></g><g transform="translate(0 49)"><circle cx="3.261"
              cy="2.767" r="2.72"/><circle cx="15.296" cy="2.767" r="2.719"/><circle cx="27.333" cy="2.767" r="2.72"/><circle
              cx="39.369" cy="2.767" r="2.72"/><circle cx="51.405" cy="2.767" r="2.72"/><circle cx="63.441" cy="2.767"
              r="2.72"/><circle cx="75.479" cy="2.767" r="2.72"/><circle cx="87.514" cy="2.767" r="2.719"/></g><g
              transform="translate(0 61)"><circle cx="3.261" cy="2.846" r="2.72"/><circle cx="15.296" cy="2.846"
              r="2.719"/><circle cx="27.333" cy="2.846" r="2.72"/><circle cx="39.369" cy="2.846" r="2.72"/><circle
              cx="51.405" cy="2.846" r="2.72"/><circle cx="63.441" cy="2.846" r="2.72"/><circle cx="75.479" cy="2.846"
              r="2.72"/><circle cx="87.514" cy="2.846" r="2.719"/></g><g transform="translate(0 73)"><circle cx="3.261"
              cy="2.926" r="2.72"/><circle cx="15.296" cy="2.926" r="2.719"/><circle cx="27.333" cy="2.926" r="2.72"/><circle
              cx="39.369" cy="2.926" r="2.72"/><circle cx="51.405" cy="2.926" r="2.72"/><circle cx="63.441" cy="2.926"
              r="2.72"/><circle cx="75.479" cy="2.926" r="2.72"/><circle cx="87.514" cy="2.926" r="2.719"/></g><g
              transform="translate(0 85)"><circle cx="3.261" cy="3.006" r="2.72"/><circle cx="15.296" cy="3.006"
              r="2.719"/><circle cx="27.333" cy="3.006" r="2.72"/><circle cx="39.369" cy="3.006" r="2.72"/><circle
              cx="51.405" cy="3.006" r="2.72"/><circle cx="63.441" cy="3.006" r="2.72"/><circle cx="75.479" cy="3.006"
              r="2.72"/><circle cx="87.514" cy="3.006" r="2.719"/></g></g></g></g></svg>
        </div>
      </div>
    </div>
  </div>
</body>
</html>