<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-sider />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex space-x-4">
                    <div class="transform transition-transform duration-300 hover:scale-110">
                        <x-targeta />
                    </div>
                    <div class="transform transition-transform duration-300 hover:scale-110">
                        <x-roles-targeta />
                    </div>
                    <div class="transform transition-transform duration-300 hover:scale-110">
                        <x-empleados-hotel />
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>
