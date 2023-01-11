<x-layout>
<a href="/" class="inline-block text-black ml-4 mb-4 mt-3"
><i class="fa-solid fa-arrow-left"></i> Voltar
</a>
<body>
    <form action="{{route('inserir_estado')}}" method="post">
        @csrf
        <div class="mx-4">
            <div
                class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Inserindo Estado
                    </h2>
                </header>

                <form action="">
                    <div class="mb-6">
                        <label
                            for="nome"
                            class="inline-block text-lg mb-2"
                        >Estado</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="nome"
                            placeholder="Exemplo: Rio Grande do Sul"
                        />
                    </div>

                    <div class="mb-6">
                        <label for="sigla" class="inline-block text-lg mb-2"
                        >Sigla</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="sigla"
                            placeholder="Exemplo: RS"
                        />
                    </div>

                    <div class="mb-6">
                        <label
                            for="populacao"
                            class="inline-block text-lg mb-2"
                        >População</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="populacao"
                            placeholder="Exemplo: 11.29 milhões"
                        />
                    </div>

                    <div class="mb-6">
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
