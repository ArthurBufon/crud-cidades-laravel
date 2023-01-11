<x-layout>
<body>

    <div class="mx-4">
        <div
            class="mt-6 bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Estados brasileiros
                </h2>
            </header>

            <form action="/estados/novo/">
                <div class="flex mb-6 mt-6 justify-center">
                    <button
                        class="flex bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Cadastrar novo estado
                    </button>
                </div>
            </form>

            <form action="/estados/">
                <div class="flex mb-6 justify-center">
                    <button
                        class="flex bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Listar todos os estados
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="mx-4">
        <div
            class="mt-6 bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Cidades brasileiras
                </h2>
            </header>

            <form action="/cidades/novo/">
                <div class="flex mb-6 mt-6 justify-center">
                    <button
                        class="flex bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Cadastrar nova cidade
                    </button>
                </div>
            </form>

            <form action="/cidades/">
                <div class="flex mb-6 justify-center">
                    <button
                        class="flex bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Listar todas as cidades
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</x-layout>
