<script>
    import Footer from "../Components/Footer.svelte";
import Navbar from "../Components/Navbar.svelte";
</script>

<main class="flex flex-col h-full">
    <Navbar />

    <slot />

    <Footer />
</main>
