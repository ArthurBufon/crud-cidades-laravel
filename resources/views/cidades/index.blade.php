<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Voltar
    </a>
    @unless(count($cidades) == 0)
    @foreach($cidades as $cidade)
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
                        name="populacao"
                        value="{{$cidade->estado_sigla}}"
                        readonly
                    />
                </div>

            <div class="mb-4">
                <form method="POST" action="/cidade/excluir/{{$cidade->id}}">
                    @csrf
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Deletar</button>
                </form>
            </div>

            <div class="mb-4">
            <form method="get" action="/cidade/editar/{{$cidade->id}}">
                @csrf
                <button class="text-500"><i class="fa-solid fa-pen"></i> Editar</button>
            </form>
            </div>

        </div>
    </div>
    @endforeach
    @else
        <div class="mx-4">
            <div
                class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
            >
                <p class="text-center">Nenhuma cidade cadastrada!</p>
            </div>
        </div>

    @endunless
</x-layout>
