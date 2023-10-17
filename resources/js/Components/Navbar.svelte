<script>
    import Dropdown from "./Dropdown.svelte";
    import Sidebar from "./Sidebar.svelte";
</script>

<header class="bg-white shadow-md z-20">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">JFA Consultorias SAS</span>
                <img class="h-20 w-auto" src="/img/logo.svg" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <Sidebar />
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">¿Quiénes somos?</a>
            <Dropdown>
                <span slot="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900">
                    Nuestro equipo
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span slot="dropdown">
                    <div
                        class="w-screen max-w-md overflow-hidden rounded bg-white shadow-lg ring-1 ring-gray-900/5"
                    >
                        <div class="p-4">
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <img class="h-10 w-auto" src="/img/logo.svg" alt="Logo JFA Consultorías" />
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        JFA Consultorías
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Consultorías para todos xd</p>
                                </div>
                            </div>
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <img class="h-10 w-auto" src="/img/logo_ambiental.svg" alt="Logo JFA Ambiental" />
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        JFA Ambiental
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Gestión de procesos enfocados al mejoramiento ambiental</p>
                                </div>
                            </div>
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <img class="h-10 w-auto" src="/img/logo_sys.svg" alt="Logo JFA Seguridad y Salud" />
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        JFA Seguridad y Salud
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Optimización de procesos en Seguridad y Salud en el Trabajo (SST)</p>
                                </div>
                            </div>
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <img class="h-10 w-auto" src="/img/logo_legal.svg" alt="Logo JFA Legal" />
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        JFA Legal
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Soluciones legales en el área laboral</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </Dropdown>

            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Contáctanos</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        </div>
    </nav>
</header>

