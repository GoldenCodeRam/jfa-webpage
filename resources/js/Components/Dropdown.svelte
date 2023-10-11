<script>
    import { computePosition } from "@floating-ui/dom";
    import { fade } from "svelte/transition";

    let button;

    let isDropdownOpen = false;

    function toggleDropdown() {
        isDropdownOpen = !isDropdownOpen;
    }

    function setPosition(node) {
        computePosition(button, node, {
            placement: "bottom",
        }).then(({x, y}) => {
                Object.assign(node.style, {
                    top: `${y}px`,
                    left: `${x}px`,
                });
            });
    }

    function hideDropdown() {
        isDropdownOpen = false;
    }

    function dropdownFocusLost({relatedTarget, currentTarget}) {
        if (relatedTarget instanceof HTMLElement && currentTarget.contains(relatedTarget)) {
            return;
        }
        hideDropdown();
    }
</script>

<div on:focusout={dropdownFocusLost}>
    <button
        bind:this={button}
        on:click|stopPropagation={toggleDropdown}
        type="button"
    >
        <slot name="button" />
    </button>

    {#if isDropdownOpen}
        <div use:setPosition class="absolute z-10 mt-3" transition:fade={{ duration: 100 }}>
            <slot name="dropdown" />
        </div>
    {/if}
</div>
