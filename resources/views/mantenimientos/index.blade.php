<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Módulo de Mantenimiento') }}

            <h1>Aquí encontrarás los materiales que se usan en esta área y los riesgos que estos tienen para los trabajadores</h1>
        </h2>
    </x-slot>
    <x-sider />

    <div class="flex flex-col items-center">
        <div class="flex justify-center w-full mb-4">
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-pintura class="mx-2" />
            </div>
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-mantenimiento-aires class="mx-2" />
            </div>
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-mantenimiento-electrico class="mx-2" />
            </div>
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-orden-aseo class="mx-2" />
            </div>
        </div>
        <div class="flex justify-center w-full">
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-limpieza-de-banos class="mx-2" />
            </div>
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-limpieza-areas-comunes class="mx-2" />
            </div>
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-recepcion class="mx-2" />
            </div>
            <div class="transform transition-transform duration-300 hover:scale-110">
                <x-administracion class="mx-2" />
            </div>
        </div>
    </div>

    <x-footer />
</x-app-layout>
