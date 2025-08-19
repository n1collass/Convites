<x-auth-layout>
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">

            <!-- Container Apresentação Desktop -->
            <section class="relative flex h-32 items-end bg-lime-900 lg:col-span-5 lg:h-full xl:col-span-6">
                <div class="hidden lg:relative lg:block lg:p-12">
                    <img class="h-32" src="{{ asset('images/icone-convites.png') }}"/>
                    <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl"> Confirme os convidados em seu evento </h2>
                    <p class="mt-4 leading-relaxed text-white/90"> Faça seu login para poder ter acesso ao criador de convites </p>
                </div>
            </section>

            <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl">

                    <!-- Container Apresentação Mobile -->
                    <div class="relative -mt-16 block lg:hidden">
                        <a class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20" href="#">
                            <span class="sr-only">Home</span>
                            <img class="h-10" src="{{ asset('images/icone-convites.png') }}"/>
                        </a>
                        <h1 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl"> Confirme os convidados em seu evento </h1>
                        <p class="mt-4 leading-relaxed text-gray-500"> Faça seu login para poder ter acesso ao criador de convites </p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="mt-8 grid gap-6">
                        @csrf
                        <div class="">
                            <x-form.label for="Email"> Email </x-form.label>
                            <x-form.input id="Email" name="email" type="email" placeholder="Insira aqui seu email"/>
                            <x-form.error :messages="$errors->get('email')"/>
                        </div>
                        <div class="">
                            <x-form.label for="Password"> Senha </x-form.label>
                            <x-form.input id="Password" name="password" type="password" placeholder="Insira aqui sua senha"/>
                            <x-form.error :messages="$errors->get('password')"/>
                        </div>
                        <div class="sm:flex sm:items-center sm:gap-4">
                            <x-form.button>Login</x-form.button>
                            <p class="mt-4 text-sm text-gray-500 sm:mt-0"> Ainda não tem uma conta? <a href="{{route('register')}}" wire:navigate class="text-gray-700 underline">Registre-se</a>, é de graça. </p>
                        </div>
                    </form>
            </div>
        </main>
    </div>
</x-auth-layout>
