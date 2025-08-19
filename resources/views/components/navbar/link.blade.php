@props(['href'])

<li>
    <a href="{{ $href }}" wire:navigate class="block py-2 px-3 transition-colors text-white rounded hover:bg-lime-900 lg:hover:bg-transparent lg:hover:text-lime-600 lg:p-0">{{ $slot }}</a>
</li>