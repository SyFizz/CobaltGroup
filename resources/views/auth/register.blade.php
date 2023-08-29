<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="text-center text-lg font-bold">
            {{__("La création de compte est désactivée pour le moment.")}} <br>
            {{__("Contactez un administrateur afin d'obtenir un compte.")}}
        </div>
    </form>
</x-guest-layout>
