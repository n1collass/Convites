<x-page-layout>
    <section class="bg-fixed bg-cover bg-center" style="background-image: url({{ asset('images/fundo.webp') }});">
        <div class="mx-auto max-w-screen-xl px-6 py-32">
            <div class="text-center">
                <x-text.title class="text-white">Convites</x-text.title>
                <x-text.subtitle class="text-lime-600">Confirmações sem estresse</x-text.subtitle>
                <x-text.desc class="text-white">As confirmações de seu evento de forma rápida e fácil na palma da sua mão, planeje seus eventos sem dor de cabeça</x-text.desc>
                <div class="mt-8 gap-4">
                    <x-button.link class="shadow-lg" href="">Eu quero!</x-button.link>
                </div>
            </div>
        </div>
    </section>

    <x-container.primary class="text-center" id="about">
        <x-text.heading>Preços</x-text.heading>
        <x-text.desc>Escolha o melhor plano para você!</x-text.desc>
        
        
    </x-container.primary>
</x-page-layout>