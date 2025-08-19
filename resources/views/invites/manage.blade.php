@props(['invite'])

<x-auth-layout>
    <div class="">

        <!-- Container Apresentação Desktop -->
        <section class="relative flex h-32 items-end bg-lime-900">
        </section>

        <main class="flex items-center justify-center px-8 py-8 sm:px-12">
            <div class="max-w-xl lg:max-w-3xl">

                <!-- Container Apresentação Mobile -->
                <div class="relative -mt-16 block print:hidden">
                    <a class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20"
                        href="#">
                        <span class="sr-only">Home</span>
                        <img class="h-10" src="{{ asset('images/icone-convites.png') }}" />
                    </a>
                    <h1 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl"> Confirmações em {{ $invite->name }} </h1>
                    <p class="mt-4 leading-relaxed text-gray-500"> Convidados que confirmaram sua presença </p>
                </div>

                <livewire:confirmations-table :invite="$invite" />

                <div class="mt-12 text-center">
                    <p class="text-sm text-gray-500 sm:mt-0 print:hidden"> Crie confirmações de convites como essa, <a href="{{route('home')}}" wire:navigate class="text-gray-700 underline">clique aqui e saiba mais</a></p>
                    <p class="text-sm text-gray-500 mt-2"> Desenvolvido com 💗 por Nicolas Fernandes</p>
                </div>
            </div>
        </main>
    </div>
</x-auth-layout>
