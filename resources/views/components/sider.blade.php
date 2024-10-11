
<div id="sidebar-container" class="fixed inset-0 pointer-events-none z-[9999]">
    <div id="sidebar-overlay" class="absolute inset-0 hidden bg-black opacity-50 pointer-events-auto"></div>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 w-16 h-screen transition-all duration-300 ease-in-out pointer-events-auto sm:translate-x-0"
        aria-label="Sidebar">
        <div class="flex flex-col h-full px-3 py-4 bg-gradient-to-br from-[#0F293E]">
            <div class="mb-4 ml-16">
                <img id="sidebar-logo" src="{{ asset('/images/globo-terraqueo-con-mapas-de-continentes.png') }}"
                    alt="Camg" class="w-[70px] h-[70px] transition-all duration-300">
            </div>

            <ul id="sidebar-menu" class="flex-grow space-y-2 font-medium">
                <li>
                    <a href="#" onclick="dashboard()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#5989d1] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">ESTADISTICA</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="home()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#bbbaba] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">EVENTO</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="calendario()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#5989d1] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">CALENDARIO</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="reporte()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#bbbaba] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">REPORTE</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="asistencia()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#5989d1] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">ASISTENCIA</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="universidade()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#bbbaba] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">UNIVERSIDADES</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="convenios()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#5989d1] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">CONVENIOS</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="programas()"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#5989d1] group">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16.5c-4.14 0-7.5-3.36-7.5-7.5S7.86 3.75 12 3.75s7.5 3.36 7.5 7.5-3.36 7.5-7.5 7.5zm-1.5-10.5h3v1.5h-3v-1.5zm0 3h3v4.5h-3v-4.5z" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">PROGRAMAS</span>
                    </a>
                </li>
            </ul>
            <ul class="nav-links">
                <li>
                    <a href="#" onclick="soporte()">
                        <div class="flex-shrink-0 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">SOPORTE</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>

<div class="fixed z-[10000] top-4 left-4">
    <input id="toggle-sidebar" type="checkbox" class="hidden peer">
    <label for="toggle-sidebar" class="flex flex-col items-center justify-center space-y-1 cursor-pointer w-7 h-7">
        <div class="w-1/2 h-1 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:w-full peer-checked:rotate-[-30deg] peer-checked:translate-y-[-4px]"></div>
        <!-- Continuación del div del toggle button -->
        <div class="w-full h-1 transition-all duration-300 origin-center bg-blue-400 rounded-lg peer-checked:rotate-90 peer-checked:translate-x-2"></div>
        <div class="w-1/2 h-1 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:w-full peer-checked:rotate-[30deg] peer-checked:translate-y-[4px]"></div>
    </label>
</div>
 
<script>
const sidebar = document.getElementById('default-sidebar');
const sidebarMenu = document.getElementById('sidebar-menu');
const sidebarLogo = document.getElementById('sidebar-logo');
const toggleButton = document.getElementById('toggle-sidebar');
const toggleIcon = document.getElementById('toggle-icon');
const menuItems = document.querySelectorAll('#sidebar-menu span');
const bottomImageContainer = document.getElementById('bottom-image-container');

toggleButton.addEventListener('click', () => {
    sidebar.classList.toggle('w-64');
    sidebar.classList.toggle('w-16');

    if (sidebar.classList.contains('w-16')) {
        menuItems.forEach(item => {
            item.classList.add('opacity-0', '-translate-x-2.5');
        });
        sidebarLogo.classList.remove('w-[70px]', 'h-[70px]');
        sidebarLogo.classList.add('w-[50px]', 'h-[50px]');
        bottomImageContainer.style.transform = 'translateX(0)';
        toggleIcon.innerHTML =
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>';
    } else {
        menuItems.forEach(item => {
            item.classList.remove('opacity-0', '-translate-x-2.5');
        });
        sidebarLogo.classList.remove('w-[50px]', 'h-[50px]');
        sidebarLogo.classList.add('w-[70px]', 'h-[70px]');
        bottomImageContainer.style.transform = 'translateX(12rem)';
        toggleIcon.innerHTML =
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>';
    }
});
</script>
