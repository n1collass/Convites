@props(['code', 'invite'])

<x-auth-layout>
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">

        <!-- Container Apresentação Desktop -->
        <section class="relative flex h-32 items-end bg-lime-900 lg:col-span-5 lg:h-full xl:col-span-6">
            <div class="hidden lg:relative lg:block lg:p-12">
                <img class="h-32" src="{{ asset('images/icone-convites.png') }}" />
                <h2 class="mt-6 text-xl font-medium text-white sm:text-3xl md:text-2xl"> Área Restrita para Anfitriões </h2>
                <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-4xl">{{ $invite->name }}</h2>
                <p class="mt-4 leading-relaxed text-white/90">Acesso as confirmações do evento</p>
            </div>
        </section>

        <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
            <div class="max-w-xl lg:max-w-3xl">

                <!-- Container Apresentação Mobile -->
                <div class="relative -mt-16 block lg:hidden">
                    <h2 class="mt-2 text-xl font-bold text-gray-900 sm:text-2xl md:text-3xl"> Área Restrita para Anfitriões </h2>
                    <h1 class="text-3xl font-bold text-gray-900 md:text-4xl"> {{ $invite->name }} </h1>
                    <p class="mt-2 leading-relaxed text-gray-500"> Acesso as confirmações do evento </p>
                </div>

                <form method="POST" action="{{ route('invites.manage', ['code' => $code]) }}" class="mt-8 grid gap-6">
                    @csrf
                    <div class="">
                        <x-form.label for="Nome"> Senha </x-form.label>
                        <x-form.input id="Nome" name="password" type="password"
                            placeholder="Insira aqui sua senha" />
                        <x-form.error :messages="$errors->get('password')" />
                    </div>
                    <div class="sm:flex sm:items-center sm:gap-4">
                            <x-form.button>Enviar</x-form.button>
                    </div>
                </form>
                <div class="mt-12 text-center">
                    <p class="text-sm text-gray-500 sm:mt-0"> Crie confirmações de convites como essa, <a href="{{route('home')}}" wire:navigate class="text-gray-700 underline">clique aqui e saiba mais</a></p>
                    <p class="text-sm text-gray-500 mt-2"> Desenvolvido com 💗 por Nicolas Fernandes</p>
                </div>
            </div>
        </main>
    </div>
</x-auth-layout>
