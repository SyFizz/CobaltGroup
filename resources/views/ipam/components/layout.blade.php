<x-app-layout>.
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <x-slot name="navlinks">
        <x-nav-link :href="route('dashboard')" :active="str_contains(request()->route()->getName(), 'ipam.index')">
            {{ __('Résumé') }}
        </x-nav-link>
        <x-nav-link :href="route('ipam.index')" :active="str_contains(request()->route()->getName(), 'ipam.public')">
            {{ __('IP Publiques') }}
        </x-nav-link>
        <x-nav-link :href="route('ipam.index')" :active="str_contains(request()->route()->getName(), 'ipam.private')">
            {{ __('IP Privées') }}
        </x-nav-link>
    </x-slot>
    {{ $slot }}
</x-app-layout>
