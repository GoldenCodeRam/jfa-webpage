<script>
    import MainLayout from "../../Layouts/MainLayout.svelte";
</script>

<MainLayout>
    <div class="container mx-auto grid grid-cols-5 px-6 py-16">
        <div class="col-span-2">
            <img src="/img/assets/1.svg" class="ms-auto w-56 h-auto" />
        </div>
        <div class="ms-sm-12 ms-8 col-span-3 flex flex-col justify-center">
            <h1 class="text-4xl text-sky-950 font-bold max-w-sm">
                Asesorías en el Sector Privado
            </h1>
            <p>El mejor servicio de asesorías del mundo mundial.</p>
        </div>
    </div>
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h1 class="text-center text-3xl text-sky-950 font-bold">
                Nuestro proceso probado produce <u>resultados</u>
            </h1>
            <div class="mx-auto flex gap-x-20 gap-y-12 justify-center py-12 max-w-sm sm:max-w-3xl flex-wrap">
                <div class="text-center">
                    <i class="fa-solid fa-scale-balanced text-5xl text-sky-900 pb-3"></i>
                    <h2 class="text-sky-900 text-2xl font-bold">Diagnóstico</h2>
                    <p class="text-slate-700">Evaluaciones de impacto</p>
                </div>
                <div class="text-center max-w-[12em]">
                    <i class="fa-solid fa-exclamation text-5xl text-sky-900 pb-3"></i>
                    <h2 class="text-sky-900 text-2xl font-bold">Determinación de Necesidades</h2>
                    <p class="text-slate-700">Aspectos claves a tener en cuenta</p>
                </div>
                <div class="text-center max-w-[14em]">
                    <i class="fa-solid fa-newspaper text-5xl text-sky-900 pb-3"></i>
                    <h2 class="text-sky-900 text-2xl font-bold">Implementaciones</h2>
                    <p class="text-slate-700">Definición de tiempo, costos, características de diseño y entregables</p>
                </div>
                <div class="text-center">
                    <i class="fa-solid fa-check-double text-5xl text-sky-900 pb-3"></i>
                    <h2 class="text-sky-900 text-2xl font-bold">Pruebas de Verificación</h2>
                    <p class="text-slate-700">Simulaciones y ajustes de satisfacción</p>
                </div>
                <div class="text-center">
                    <i class="fa-solid fa-handshake-angle text-5xl text-sky-900 pb-3"></i>
                    <h2 class="text-sky-900 text-2xl font-bold">Acompañamiento y Soporte</h2>
                    <p class="text-slate-700">Monitoreo y seguimiento</p>
                </div>
            </div>
        </div>
    </div>
</MainLayout>
