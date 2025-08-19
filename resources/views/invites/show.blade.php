@props(['code', 'invite', 'success' => false])

<x-auth-layout>
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">

        <!-- Container Apresentação Desktop -->
        <section class="relative flex h-32 items-end bg-lime-900 lg:col-span-5 lg:h-full xl:col-span-6">
            <div class="hidden lg:relative lg:block lg:p-12">
                <img class="h-32" src="{{ asset('images/icone-convites.png') }}" />
                <h2 class="mt-6 text-xl font-medium text-white sm:text-3xl md:text-2xl"> Confirme sua presença em </h2>
                <h1 class="text-2xl font-bold text-white sm:text-3xl md:text-4xl"> {{ $invite->name }} </h1>
                <p class="mt-4 leading-relaxed text-white/90"> {{$invite->desc}} </p>
            </div>
        </section>

        <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
            <div class="max-w-xl lg:max-w-3xl">

                <!-- Container Apresentação Mobile -->
                <div class="relative -mt-16 block lg:hidden">
                    <a class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20"
                        href="#">
                        <span class="sr-only">Home</span>
                        <img class="h-10" src="{{ asset('images/icone-convites.png') }}" />
                    </a>
                    <h2 class="mt-2 text-xl font-bold text-gray-900 sm:text-2xl md:text-3xl"> Confirme sua presença em </h2>
                    <h1 class="text-3xl font-bold text-gray-900 md:text-4xl"> {{ $invite->name }} </h1>
                    <p class="mt-2 leading-relaxed text-gray-500"> {{$invite->desc}} </p>
                </div>

                @if($success)
                    <div class="mt-8 grid gap-6">
                        Confirmação realizada com sucesso!
                    </div>
                @else
                <form method="POST" action="{{ route('invites.confirm', ['code' => $code]) }}" class="mt-8 grid gap-6">
                    @csrf
                    <div class="">
                        <x-form.label for="Nome"> Nome completo </x-form.label>
                        <x-form.input id="Nome" name="name" type="text"
                            placeholder="Insira aqui seu nome e sobrenome" />
                        <x-form.error :messages="$errors->get('name')" />
                    </div>
                    <div class="">
                        <x-form.label> Marque sua presença </x-form.label>
                        <div class="flex items-center gap-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="confirm" value="1" {{ old('confirm') == '1' ? 'checked' : '' }} class="form-radio">
                                <span class="ml-2">Comparecerei</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="confirm" value="0" {{ old('confirm') === '0' ? 'checked' : '' }} class="form-radio">
                                <span class="ml-2">Não comparecerei</span>
                            </label>
                        </div>
                        <x-form.error :messages="$errors->get('confirm')" />
                    </div>
                    <div class="sm:flex sm:items-center sm:gap-4">
                            <x-form.button>Enviar Confirmação</x-form.button>
                    </div>
                </form>
                @endif
                <div class="mt-12 text-center">
                    <p class="text-sm text-gray-500 sm:mt-0"> Crie confirmações de convites como essa, <a href="{{route('home')}}" wire:navigate class="text-gray-700 underline">clique aqui e saiba mais</a></p>
                    <p class="text-sm text-gray-500 mt-2"> Desenvolvido com 💗 por Nicolas Fernandes</p>
                </div>
            </div>
        </main>
    </div>
</x-auth-layout>
