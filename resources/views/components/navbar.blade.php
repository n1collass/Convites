<nav class="bg-zinc-800">
    <div x-data="{toggle: false}" class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        
        <!-- Título Navbar -->
        <x-navbar.title/>
        
        <!-- Dropdown Navbar Mobile -->
        <x-navbar.mobile/>

        <div x-show="toggle" id="navbarItems" class="items-center justify-between font-medium w-full lg:flex lg:w-auto lg:order-1">
            <ul class="flex flex-col p-6 lg:p-0 mt-4 rounded-lg bg-zinc-700 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-zinc-800">
                <!-- Link Página Principal -->
                <x-navbar.link href="/">Página Inicial</x-navbar.link>

                <x-navbar.link href="#precos">Preços</x-navbar.link>
            </ul>

            <!-- Menu Usuário Mobile -->
            <x-navbar.user-mobile/>
        </div>

        <!-- Menu Usuário Desktop -->
        <x-navbar.user/>

    </div>
</nav>
