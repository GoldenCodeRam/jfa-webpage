<script>
    import MainLayout from "../../Layouts/MainLayout.svelte";
    import Carousel from "svelte-carousel";
</script>

<MainLayout>
    <div class="py-32 px-12 flex justify-center items-center">
        <img src="/img/assets/1.svg" class="w-56 h-auto me-8 hidden md:block" alt="Asset" />
        <div>
            <h1 class="text-6xl text-sky-950 font-bold max-w-sm">
                Asesorías en el Sector Privado
            </h1>
            <p class="text-xl font-semibold">Tu guía para una gestión eficiente</p>
        </div>
    </div>
    <div class="bg-jfa-primary-gray py-16 px-6">
        <div class="container mx-auto">
            <h1 class="text-center text-3xl text-sky-950 font-bold">
                Nuestro proceso probado produce <u>resultados</u>
            </h1>
            <div
                class="mx-auto flex gap-x-20 gap-y-12 justify-center py-12 max-w-sm sm:max-w-3xl flex-wrap"
            >
                <div class="text-center">
                    <i
                        class="fa-solid fa-scale-balanced text-5xl text-sky-900 pb-3"
                    />
                    <h2 class="text-sky-900 text-2xl font-bold">Diagnóstico</h2>
                    <p class="text-slate-700">Evaluaciones de impacto</p>
                </div>
                <div class="text-center max-w-[12em]">
                    <i
                        class="fa-solid fa-exclamation text-5xl text-sky-900 pb-3"
                    />
                    <h2 class="text-sky-900 text-2xl font-bold">
                        Determinación de Necesidades
                    </h2>
                    <p class="text-slate-700">
                        Aspectos claves a tener en cuenta
                    </p>
                </div>
                <div class="text-center max-w-[14em]">
                    <i
                        class="fa-solid fa-newspaper text-5xl text-sky-900 pb-3"
                    />
                    <h2 class="text-sky-900 text-2xl font-bold">
                        Implementaciones
                    </h2>
                    <p class="text-slate-700">
                        Definición de tiempo, costos, características de diseño
                        y entregables
                    </p>
                </div>
                <div class="text-center">
                    <i
                        class="fa-solid fa-check-double text-5xl text-sky-900 pb-3"
                    />
                    <h2 class="text-sky-900 text-2xl font-bold">
                        Pruebas de Verificación
                    </h2>
                    <p class="text-slate-700">
                        Simulaciones y ajustes de satisfacción
                    </p>
                </div>
                <div class="text-center">
                    <i
                        class="fa-solid fa-handshake-angle text-5xl text-sky-900 pb-3"
                    />
                    <h2 class="text-sky-900 text-2xl font-bold">
                        Acompañamiento y Soporte
                    </h2>
                    <p class="text-slate-700">Monitoreo y seguimiento</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto container py-16 px-6">
        <h1 class="text-3xl font-bold text-blue-950 text-center">
            Nuestros Clientes
        </h1>
        <div class="mx-auto max-w-3xl pt-6">
            <Carousel autoplay autoplayDuration={3000} particlesToShow={2}>
                <div class="flex items-center justify-center">
                    <img
                        class="mx-auto"
                        src="/img/clients/cootransariari.png"
                    />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/asopreguejar.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/cootransmedio.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/cootranscol.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img
                        class="mx-auto"
                        src="/img/clients/coopetransfluvial.png"
                    />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/coimpresores.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/coomdexgan.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/coopseoriente.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/confecoop.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/cooprometa.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img
                        class="mx-auto"
                        src="/img/clients/cootrapensimeta.jpg"
                    />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/coopteboy.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img
                        class="mx-auto"
                        src="/img/clients/cardenas-vision.webp"
                    />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/hornasa.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/colvinsa.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/ingtromol.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/ueta.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/gws.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/diesel.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/palmiagro.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/gsr.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/sidenal.jpg" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/proclin.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/rodamiento.png" />
                </div>
                <div class="flex items-center justify-center">
                    <img class="mx-auto" src="/img/clients/babupalm.jpg" />
                </div>
            </Carousel>
        </div>
    </div>
</MainLayout>
