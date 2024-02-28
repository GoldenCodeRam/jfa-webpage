<script>
    import OurTeamDropdown from "./Dropdowns/OurTeamDropdown.svelte";
    import Sidebar from "./Sidebar.svelte";
</script>

<header class="relative bg-white shadow-md">
    <nav
        class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
        aria-label="Global"
    >
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">JFA Consultorias SAS</span>
                <img class="h-16 sm:h-20 w-auto" src="/img/logo.svg" alt="" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <Sidebar />
        </div>
        <div class="hidden justify-center items-center lg:flex lg:gap-x-12">
            <a href="/about-us" class="text-sm font-semibold leading-6 text-gray-900 hover:text-jfa-primary-blue">
                ¿Quiénes somos?
            </a>
            <OurTeamDropdown />
            <a
                href="/contact-us"
                class="text-sm font-semibold leading-6 text-gray-900 hover:text-jfa-primary-blue"
            >
                Contáctanos
            </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end"></div>
    </nav>
</header>
