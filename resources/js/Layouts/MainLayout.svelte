<script>
    import Footer from "../Components/Footer.svelte";
import Navbar from "../Components/Navbar.svelte";
</script>

<main>
    <Navbar />

    <slot />

    <Footer />
</main>
