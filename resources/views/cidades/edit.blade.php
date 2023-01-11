<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4 mt-3"
    ><i class="fa-solid fa-arrow-left"></i> Voltar
    </a>
    <body>
    <form action="{{route('alterar_cidade', ['id' => $cidade->id])}}" method="post">
        @csrf
        <div class="mx-4">
            <div
                class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Editando Cidade
                    </h2>
                </header>

                <form action="">
                    <div class="mb-4">
                        <label
                            for="nome"
                            class="inline-block text-lg mb-2"
                        >Cidade</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="nome"
                            placeholder="Exemplo: Curitiba"
                            value="{{$cidade->nome}}"
                        />
                    </div>

                    <div class="mb-4">
                        <label for="cep" class="inline-block text-lg mb-2"
                        >CEP</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="cep"
                            placeholder="Exemplo: 99250-000"
                            value="{{$cidade->cep}}"
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            for="populacao"
                            class="inline-block text-lg mb-2"
                        >População</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="populacao"
                            value="{{$cidade->populacao}}"
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="estado_sigla"
                            class="inline-block text-lg mb-2"
                        >UF</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="estado_sigla"
                            value="{{$cidade->estado_sigla}}"
                        />
                    </div>

                    <div class="mb-6">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            Editar
                        </button>

                        <a href="/" class="text-black ml-4"> Voltar </a>
                    </div>
                </form>
            </div>
        </div>
    </form>
    </body>
</x-layout>
