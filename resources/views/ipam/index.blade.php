<x-ipam-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des adresses IP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900 flex space-x-10 h-full items-stretch">
                    <div class="w-1/3 h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Blocs IPv4</h5>
                        </a>
                        <div class="mx-auto w-2/3 overflow-hidden">
                            <canvas
                                id="usedAddressesChart"
                                data-te-chart="pie"
                                data-te-dataset-label="Blocs"
                                data-te-labels="['Privés', 'Publics']"
                                data-te-dataset-data="[
                                {{\App\Models\AddressBlock::all()->where("type", "private")->count()}},
                                {{\App\Models\AddressBlock::all()->where("type", "public")->count()}}
                                ]"
                                data-te-dataset-background-color="['rgba(233, 128, 99, 0.5)', 'rgba(73, 244, 66, 0.4)']">
                            </canvas>
                        </div>
                    </div>

                    <div class="w-1/3 h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Adresses IPv4</h5>
                        </a>
                        <div class="mx-auto w-2/3 overflow-hidden">
                            <canvas
                                id="usedAddressesChart"
                                data-te-chart="pie"
                                data-te-dataset-label="Adresses"
                                data-te-labels="['Libre', 'VPS', 'VDS', 'Dédié', 'Tunnel', 'Infrastructure']"
                                data-te-dataset-data="[
                                {{\App\Models\Address::all()->where("tag", "Libre")->count()}},
                                {{\App\Models\Address::all()->where("tag", "Client VPS")->count()}},
                                {{\App\Models\Address::all()->where("tag", "Client VDS")->count()}},
                                {{\App\Models\Address::all()->where("tag", "Client Dédié")->count()}},
                                {{\App\Models\Address::all()->where("tag", "Client Tunnel")->count()}},
                                {{\App\Models\Address::all()->where("tag", "Infrastructure")->count() + \App\Models\Address::all()->where("tag", "VM interne")->count()}}
                                ]"
                                data-te-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)', 'rgba(66, 133, 244, 0.5)', 'rgba(156, 39, 176, 0.5)', 'rgba(233, 30, 99, 0.5)', 'rgba(66, 73, 244, 0.4)']">
                            </canvas>
                        </div>
                    </div>
                    <div class="w-1/3 h-full flex flex-col space-y-4">
                        <div class="flex-grow p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <!-- Contenu de la première petite carte -->
                        </div>
                        <div class="flex-grow p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <!-- Contenu de la deuxième petite carte -->
                        </div>
                        <div class="flex-grow p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <!-- Contenu de la troisième petite carte -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-ipam-layout>
