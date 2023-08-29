<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="text-center text-lg font-bold">
            {{__("La création de compte est désactivée pour le moment.")}} <br>
            {{__("Contactez un administrateur afin d'obtenir un compte.")}}
        </div>
        <div class="text-center">
            <x-primary-button class="mt-4 w-full text-center align-middle justify-center " href="{{ route('login') }}">
                {{ __('Se connecter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
