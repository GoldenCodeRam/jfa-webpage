<script>
    import { createTooltip, melt } from "@melt-ui/svelte";
    import { fade } from "svelte/transition";
    import MainLayout from "../Layouts/MainLayout.svelte";

    const {
        elements: { trigger, content, arrow },
        states: { open },
    } = createTooltip({
        positioning: {
            placement: "bottom",
        },
        openDelay: 0,
        closeDelay: 0,
        closeOnPointerDown: false,
        forceVisible: true,
    });

    function clipboard() {
        navigator.clipboard.writeText("(+57) 311 513 9896");
    }
</script>

<MainLayout>
    <div class="flex flex-1 items-center py-24 px-12">
        <div class="container mx-auto">
            <h1 class="text-4xl sm:text-6xl font-bold text-center">
                Contáctanos
            </h1>
            <p class="text-lg text-center">
                Estamos dispuestos a ayudarte con lo que necesites.
            </p>

            <div class="flex items-center gap-3 justify-center mt-3">
                <i class="fa-brands fa-whatsapp text-3xl"></i>
                (+57) 311 513 9896
                <button
                    class="border rounded text-neutral-300 px-2"
                    use:melt={$trigger}
                    on:click={clipboard}
                >
                    <i class="fa-regular fa-copy"></i>
                </button>

                {#if $open}
                    <div
                        use:melt={$content}
                        transition:fade={{ duration: 100 }}
                        class=" z-10 rounded-lg bg-white shadow"
                    >
                        <div use:melt={$arrow} />
                        <p class="px-4 py-1 text-magnum-700">
                            Copiar al portapapeles
                        </p>
                    </div>
                {/if}
            </div>
        </div>
    </div>
</MainLayout>
