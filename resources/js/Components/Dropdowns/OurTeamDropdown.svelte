<script lang="ts">
    import { createDropdownMenu, melt } from "@melt-ui/svelte";
    import { fly } from "svelte/transition";

    const {
        elements: { menu, trigger, item, separator },
        states: { open },
    } = createDropdownMenu({
        forceVisible: true,
    });
</script>

<button use:melt={$trigger}>
    <span
        class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
    >
        Nuestro equipo
        <svg
            class="h-5 w-5 flex-none text-gray-400"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
        >
            <path
                fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd"
            />
        </svg>
    </span>
</button>

{#if $open}
    <div
        class="bg-white rounded border shadow-md"
        use:melt={$menu}
        transition:fly={{ duration: 150, y: -10 }}
    >
        <div
            use:melt={$item}
            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
        >
            <img
                class="h-10 w-auto"
                src="/img/logo.svg"
                alt="Logo JFA Consultorías"
            />
            <div class="flex-auto">
                <a
                    href="/administrative"
                    class="block font-semibold text-gray-900"
                >
                    JFA Administrativo
                    <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Tu guía para una gestión eficiente</p>
            </div>
        </div>
        <div
            use:melt={$item}
            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
        >
            <img
                class="h-10 w-auto"
                src="/img/logo_ambiental.svg"
                alt="Logo JFA Ambiental"
            />
            <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                    JFA Ambiental
                    <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">
                    Protegiendo el planeta, impulsando tu negocio
                </p>
            </div>
        </div>
        <div
            use:melt={$item}
            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
        >
            <img
                class="h-10 w-auto"
                src="/img/logo_sys.svg"
                alt="Logo JFA Seguridad y Salud"
            />
            <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                    JFA Seguridad y Salud
                    <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">
                    Prevención y bienestar para tu empresa
                </p>
            </div>
        </div>
        <div
            use:melt={$item}
            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
        >
            <img
                class="h-10 w-auto"
                src="/img/logo_legal.svg"
                alt="Logo JFA Legal"
            />
            <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                    JFA Legal
                    <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">
                    Te asesoramos, te protegemos, te guiamos
                </p>
            </div>
        </div>
    </div>
{/if}
