<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="flex flex-col items-center bg-gradient-to-r from-blue-100 to-green-100 p-8 rounded-lg shadow-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-green-500 mb-8 p-4 shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                WorkerSafe Pro
            </h1>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}" class="w-full max-w-md space-y-6">
                @csrf

                <div>
                    <x-label for="name" value="Nombre" class="text-gray-700 font-semibold" />
                    <x-input id="name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-label for="email" value="Correo Electrónico" class="text-gray-700 font-semibold" />
                    <x-input id="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div>
                    <x-label for="password" value="Contraseña" class="text-gray-700 font-semibold" />
                    <x-input id="password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div>
                    <x-label for="password_confirmation" value="Confirmar Contraseña" class="text-gray-700 font-semibold" />
                    <x-input id="password_confirmation" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />
                        <label for="terms" class="ms-2 text-sm text-gray-600">
                            Acepto los <a href="{{ route('terms.show') }}" class="underline text-blue-500 hover:text-blue-700">Términos de Servicio</a> y la <a href="{{ route('policy.show') }}" class="underline text-blue-500 hover:text-blue-700">Política de Privacidad</a>
                        </label>
                    </div>
                @endif

                <div class="flex items-center justify-between">
                    <a class="text-sm text-blue-500 hover:text-blue-700 underline" href="{{ route('login') }}">
                        ¿Ya estás registrado?
                    </a>

                    <x-button class="bg-gradient-to-r from-blue-500 to-green-500 text-white font-bold py-2 px-4 rounded-full hover:from-blue-600 hover:to-green-600 transition duration-300">
                        Registrarse
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>