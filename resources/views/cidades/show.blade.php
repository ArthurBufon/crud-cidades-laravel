<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Voltar
    </a>
    <div class="mx-4">
        <div
            class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    {{$cidade->nome}}
                </h2>
            </header>
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
                    value="{{$cidade->nome}}"
                    readonly
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
                    value="{{$cidade->cep}}"
                    readonly
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
                    readonly
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
                    value="{{$cidade->estado_sigla}}"
                    readonly
                />
            </div>

        </div>
    </div>
</x-layout>
