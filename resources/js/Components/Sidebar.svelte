<script lang="ts">
    import { createDialog, melt } from "@melt-ui/svelte";
    import { fade, fly } from "svelte/transition";
    import SidebarCollapsible from "./SidebarCollapsible.svelte";

    const {
        elements: {
            trigger,
            overlay,
            content,
            title,
            description,
            close,
            portalled,
        },
        states: { open },
    } = createDialog({
        forceVisible: true,
    });
</script>

<button
    use:melt={$trigger}
    class="inline-flex items-center justify-center rounded-md bg-white px-4 py-2 font-medium
    leading-none text-magnum-700 hover:opacity-75 focus:outline-none focus:ring
    focus:ring-magnum-400"
>
    <i class="fa-solid fa-bars"></i>
</button>

<div use:melt={$portalled}>
    {#if $open}
        <div
            use:melt={$overlay}
            class="fixed inset-0 z-50 bg-black/50"
            transition:fade={{ duration: 150 }}
        />
        <div
            use:melt={$content}
            class="fixed right-0 top-0 z-50 h-screen w-full max-w-[350px] bg-white p-6
            shadow-lg focus:outline-none"
            transition:fly={{
                x: 350,
                duration: 300,
                opacity: 1,
            }}
        >
            <button
                use:melt={$close}
                aria-label="Close"
                class="absolute right-[10px] top-[10px] inline-flex h-6 w-6
                appearance-none items-center justify-center rounded-full text-magnum-800
                hover:bg-magnum-100 focus:shadow-magnum-400 focus:outline-none focus:ring-2
                focus:ring-magnum-400"
            >
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h2 use:melt={$title} class="mb-0 text-lg font-medium text-black">
                JFA Consultorías SAS
            </h2>
            <p
                use:melt={$description}
                class="mb-5 text-sm leading-normal text-zinc-600"
            >
                Información sobre nuestros servicios
            </p>
            <section class="grid">
                <a href="/about-us" class="w-full py-3 font-semibold">
                    ¿Quiénes Somos?
                </a>
                <SidebarCollapsible />
                <a href="#" class="py-3 font-semibold">
                    Contáctanos
                </a>
            </section>
        </div>
    {/if}
</div>

