<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkerSafe Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-lg font-semibold">
                <a href="#" class="text-gray-800 hover:text-gray-600">Acerca de Nosotros</a>
            </div>
            <div class="space-x-4">
                <a href="#" class="text-gray-800 hover:text-gray-600">Servicios</a>
                <a href="#" class="text-gray-800 hover:text-gray-600">Contactos</a>
                <a href="#" class="text-gray-800 hover:text-gray-600">Blog</a>
                <a href="#" class="text-gray-800 hover:text-gray-600">FAQs</a>
            </div>
        </div>
    </nav>

    <div class="flex-grow container mx-auto px-4 py-8">
        <h1 class="text-5xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-green-500 mb-8 p-4 shadow-lg rounded-lg transform hover:scale-105 transition-transform duration-300">
            WorkerSafe Pro
        </h1>

        <div class="fixed top-4 right-4 flex space-x-4 z-50">
            <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded font-bold hover:bg-blue-600 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">Log in</a>
            <a href="{{ route('register') }}" class="bg-green-500 text-white px-4 py-2 rounded font-bold hover:bg-green-600 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">Register</a>
        </div>

        <div class="mt-8 relative overflow-hidden h-[500px]">
            <div id="imageCarousel" class="flex transition-transform duration-1000 ease-in-out h-full">
                <img src="{{ asset("carrusel/2.jpg")}}" alt="Image 2" class="w-full h-full object-cover flex-shrink-0">
                <img src="{{asset("carrusel/1.jpg")}}" alt="Image 1" class="w-full h-full object-cover flex-shrink-0">
                <img src="{{ asset("carrusel/3.jpg") }}" alt="Image 3" class="w-full h-full object-cover flex-shrink-0">
                <img src="{{ asset("carrusel/4.jpg") }}" alt="Image 4" class="w-full h-full object-cover flex-shrink-0">
                <img src="{{ asset("carrusel/5.jpg") }}" alt="Image 5" class="w-full h-full object-cover flex-shrink-0">
            </div>
        </div>
    </div>

    <footer class="bg-gray-200 text-gray-700 py-4 text-center">
        <p>&copy; <span id="currentYear"></span> WorkerSafe Pro. Todos los derechos reservados.</p>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('imageCarousel');
        const images = carousel.getElementsByTagName('img');
        let currentIndex = 0;

        function moveCarousel() {
            currentIndex = (currentIndex + 1) % images.length;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(moveCarousel, 2000);

        const firstImageClone = images[0].cloneNode(true);
        carousel.appendChild(firstImageClone);

        const yearSpan = document.getElementById('currentYear');
        const currentYear = new Date().getFullYear();
        yearSpan.textContent = currentYear;
    });
    </script>
</body>
</html>
