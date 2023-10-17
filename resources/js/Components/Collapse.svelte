<script>
    import {slide} from "svelte/transition";

    let showCollapse = false;

    function toggleCollapse() {
        showCollapse = !showCollapse;
    }
</script>

<button type="button" on:click={toggleCollapse} class="w-full">
    <slot name="button" />
</button>
{#if showCollapse}
<div transition:slide>
    <slot name="content"/>
</div>
{/if}
