<script lang="ts">
    import { createCollapsible, melt } from '@melt-ui/svelte';
    import { slide } from 'svelte/transition';

    const {
        elements: { root, content, trigger },
        states: { open },
    } = createCollapsible({
        forceVisible: true,
    });
</script>

<div
    use:melt={$root}
>
    <button
        use:melt={$trigger}
        class="flex w-full py-3 relative justify-between place-items-center rounded-md bg-white
        font-semibold"
        aria-label="Toggle"
    >
        Nuestro Equipo
        {#if $open}
            <i class="fa-solid fa-xmark"></i>
        {:else}
            <i class="fa-solid fa-chevron-down"></i>
        {/if}
    </button>

    <div class="relative left-0 right-0">
        {#if $open}
            <div use:melt={$content} transition:slide>
                <div
                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                    <img
                        class="h-10 w-auto"
                        src="/img/logo.svg"
                        alt="Logo JFA Consultorías"
                    />
                    <div class="flex-auto">
                        <a href="/administrative" class="block text-gray-900">
                            JFA Administrativo
                            <span class="absolute inset-0"></span>
                        </a>
                    </div>
                </div>
                <div
                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                    <img
                        class="h-10 w-auto"
                        src="/img/logo_ambiental.svg"
                        alt="Logo JFA Ambiental"
                    />
                    <div class="flex-auto">
                        <a href="#" class="block text-gray-900">
                            JFA Ambiental
                            <span class="absolute inset-0"></span>
                        </a>
                    </div>
                </div>
                <div
                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                    <img
                        class="h-10 w-auto"
                        src="/img/logo_sys.svg"
                        alt="Logo JFA Seguridad y Salud"
                    />
                    <div class="flex-auto">
                        <a href="#" class="block text-gray-900">
                            JFA Seguridad y Salud
                            <span class="absolute inset-0"></span>
                        </a>
                    </div>
                </div>
                <div
                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                    <img
                        class="h-10 w-auto"
                        src="/img/logo_legal.svg"
                        alt="Logo JFA Legal"
                    />
                    <div class="flex-auto">
                        <a href="#" class="block text-gray-900">
                            JFA Legal
                            <span class="absolute inset-0"></span>
                        </a>
                    </div>
                </div>
            </div>
        {/if}
    </div>
</div>
