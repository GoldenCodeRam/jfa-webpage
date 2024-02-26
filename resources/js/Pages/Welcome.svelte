<script lang="ts">
    import MainLayout from "../Layouts/MainLayout.svelte";
</script>

<MainLayout>
    <div
        class="py-32 px-12 bg-no-repeat bg-cover bg-center"
        style="background-image: url('assets/img/background1-haikei.svg');"
    >
        <div
            class="flex mx-auto items-center justify-center bg-center bg-no-repeat"
        >
            <h1 class="text-6xl font-bold text-white">
                Consultoría Experta,<br />Resultados
                <span class="underline decoration-dotted">Tangibles</span>
            </h1>
            <img class="w-80 ms-16 hidden xl:block" src="/img/assets/2.svg" />
        </div>
    </div>

    <div class="bg-jfa-primary-gray py-32 text-center px-12">
        <h2 class="font-semibold">Llevamos tu negocio al siguiente nivel</h2>
        <h1 class="text-5xl font-bold">
            En JFA tenemos diferentes servicios para ti
        </h1>

        <div class="container mx-auto mt-12 gap-4">
            <div class="flex items-center justify-center">
                <img src="/assets/img/3.svg" class="h-60 w-auto" />
                <div class="ms-8">
                    <h2 class="text-xl font-bold">
                        Servicios de consultoría gerencial
                    </h2>
                    <p>
                        Ofrecemos servicios de consultoría gerencial, empresas
                        de familia y más.
                    </p>
                    <button
                        class="border border-jfa-primary-blue text-jfa-primary-blue rounded py-1 px-3 hover:bg-jfa-primary-blue/10 active:bg-jfa-primary-blue/20"
                        >Ver más</button
                    >
                </div>
            </div>
            <div class="flex items-center justify-center mt-8">
                <p class="ms-8">
                    Servicios de consultoría en el área ambiental
                </p>
                <img src="/assets/img/4.svg" class="h-60 w-auto ms-8" />
            </div>
            <div class="flex items-center justify-center mt-8">
                <img src="/assets/img/5.svg" class="h-60 w-auto" />
                <p class="ms-8">Servicios de consultoría gerencial</p>
            </div>
            <div class="flex items-center justify-center mt-8">
                <p class="ms-8">Servicios de consultoría gerencial</p>
                <img src="/assets/img/6.svg" class="h-60 w-auto" />
            </div>
        </div>
    </div>
</MainLayout>
