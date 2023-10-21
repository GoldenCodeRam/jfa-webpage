<script>
    import { blur } from "svelte/transition";
    import Collapse from "./Collapse.svelte";

    let isSidebarOpen = false;

    function openSidebar() {
        isSidebarOpen = true;
    }

    function closeSidebar() {
        isSidebarOpen = false;
    }
</script>

<button
    on:click|stopPropagation={openSidebar}
    type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
    <span class="sr-only">Open main menu</span>
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
</button>

{#if isSidebarOpen}
    <div role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div
            class="fixed inset-0 z-10 bg-black/10 backdrop-blur-sm"
            transition:blur
        ></div>
        <div
            transition:blur
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5 font-extrabold text-sky-800">
                    JFA Consultorías SAS
                </a>
                <button on:click={closeSidebar} type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                            ¿Quiénes somos?
                        </a>
                        <div class="-mx-3">
                            <Collapse>
                                <span slot="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                    Nuestro equipo
                                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span slot="content">
                                    <div class="mt-2 space-y-2" id="disclosure-1">
                                        <a href="/administrative" class="flex gap-3 rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                            <img class="w-12 h-auto" src="/img/logo.svg" />
                                            JFA Administrativo
                                        </a>
                                        <a href="#" class="flex gap-3 rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                            <img class="w-12 h-auto" src="/img/logo_ambiental.svg" />
                                            JFA Ambiental
                                        </a>
                                        <a href="#" class="flex gap-3 rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                            <img class="w-12 h-auto" src="/img/logo_sys.svg" />
                                            JFA Seguridad y Salud
                                        </a>
                                        <a href="#" class="flex gap-3 rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                                            <img class="w-12 h-auto" src="/img/logo_legal.svg" />
                                            JFA Legal
                                        </a>
                                    </div>
                                </span>
                            </Collapse>
                        </div>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
                            Contáctanos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}
