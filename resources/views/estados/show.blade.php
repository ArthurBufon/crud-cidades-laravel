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
                {{$estado->nome}}
            </h2>
        </header>
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
                    value="{{$estado->nome}}"
                    readonly
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
                    value="{{$estado->sigla}}"
                    readonly
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
                    value="{{$estado->populacao}}"
                    readonly
                />
            </div>
    </div>
</div>
</x-layout>
