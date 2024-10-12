<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="bg-gradient-to-r from-blue-100 to-green-100 p-8 rounded-lg shadow-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-green-500 mb-8 p-4 shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
                WorkerSafe Pro
            </h1>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <x-label for="email" value="Correo electrónico" class="text-gray-700 font-semibold" />
                    <x-input id="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div>
                    <x-label for="password" value="Contraseña" class="text-gray-700 font-semibold" />
                    <x-input id="password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">Recordarme</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:text-blue-700 underline" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <div class="flex items-center justify-end mt-6">
                    <x-button class="bg-gradient-to-r from-blue-500 to-green-500 text-white font-bold py-2 px-4 rounded-full hover:from-blue-600 hover:to-green-600 transition duration-300">
                        Iniciar sesión
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>