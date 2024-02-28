<script lang="ts">
    import { createTabs, melt } from "@melt-ui/svelte";
    import MainLayout from "../Layouts/MainLayout.svelte";

    const {
        elements: { root, list, content, trigger },
        states: { value },
    } = createTabs({
        defaultValue: "tab-1",
    });

    const triggers = [
        { id: "tab-1", title: "Consultoría" },
        { id: null, title: "Ambiental" },
        { id: null, title: "Seguridad y Salud en el Trabajo" },
        { id: null, title: "Legal" },
    ];
</script>

<MainLayout>
    <div
        class="py-32 px-12 bg-no-repeat bg-cover bg-center"
        style="background-image: url('assets/img/background1-haikei.svg');"
    >
        <div
            class="flex mx-auto items-center justify-center bg-center bg-no-repeat"
        >
            <h1 class="text-4xl sm:text-6xl font-bold text-white">
                Consultoría Experta,<br />Resultados
                <span class="underline decoration-dotted">Tangibles</span>
            </h1>
            <img class="w-80 ms-16 hidden xl:block" src="/img/assets/2.svg" />
        </div>
    </div>

    <div class="bg-jfa-primary-gray py-32 text-center px-12">
        <div class="container mx-auto">
            <h2 class="font-semibold">
                Llevamos tu negocio al siguiente nivel
            </h2>
            <h1 class="text-5xl font-bold max-w-[48rem] mx-auto">
                En JFA tenemos diferentes servicios para ti
            </h1>

            <div use:melt={$root} class="py-8">
                <div
                    use:melt={$list}
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 justify-center mb-5"
                >
                    {#each triggers as triggerItem}
                        <button
                            use:melt={$trigger({
                                value: triggerItem.id,
                                disabled: triggerItem.id === null,
                            })}
                            class="py-4 rounded border transition text-lg font-bold"
                            class:active-card={$value === triggerItem.id}
                            class:text-gray-500={triggerItem.id === null}
                        >
                            {triggerItem.title}
                            {#if !triggerItem.id}
                                <p class="text-sm mt-[-5px] font-normal">Próximamente</p>
                            {/if}
                        </button>
                    {/each}
                </div>

                <div
                    class="mx-auto max-w-[48em] border rounded border-jfa-primary-blue shadow-md py-8 px-4"
                >
                    <div
                        use:melt={$content("tab-1")}
                        class="grid grid-cols-10 justify-center transition-all text-center"
                    >
                        <div class="col-span-full sm:col-span-3">
                            <img
                                src="/assets/img/3.svg"
                                class="h-full w-auto mx-auto"
                                alt="consulting"
                            />
                        </div>
                        <div class="col-span-full sm:col-span-7">
                            <h1 class="text-3xl sm:text-4xl font-bold">
                                Consultoría Gerencial
                            </h1>
                            <p class="mb-3">
                                Te ofrecemos servicios de consultoría en
                                Gobierno Corporativo, Profesionalización de
                                Juntas Directivas, Gerencias de Empresas de
                                Familia, Economía Solidaria, NIIF / IFRS y más.
                            </p>
                            <button class="px-4 py-2 rounded bg-jfa-primary-blue text-white hover:bg-jfa-primary-blue/90 active:bg-jfa-primary-blue/80"> Saber más </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</MainLayout>

<style>
    .active-card {
        @apply shadow border-jfa-primary-blue text-jfa-primary-blue bg-blue-50;
    }
</style>
