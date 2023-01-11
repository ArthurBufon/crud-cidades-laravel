<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4 mt-3"
    ><i class="fa-solid fa-arrow-left"></i> Voltar
    </a>
    <body>
    <form action="{{route('inserir_cidade')}}" method="post">
        @csrf
        <div class="mx-4">
            <div
                class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Inserindo Cidade
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
                            required
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
                            required
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
                            placeholder="Exemplo: 3.231.223"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label
                            for="estado_sigla"
                            class="inline-block text-lg mb-2"
                        >UF</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="estado_sigla"
                            placeholder="Exemplo: RS"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <button
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            Criar
                        </button>

                        <a href="/" class="text-black ml-4"> Voltar </a>
                    </div>
                </form>
            </div>
        </div>
    </form>
    </body>
</x-layout>
