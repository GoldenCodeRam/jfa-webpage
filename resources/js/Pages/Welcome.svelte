<script>
    import { computePosition, flip, shift, offset } from "@floating-ui/dom";
    import MainLayout from "../Layouts/MainLayout.svelte";

    let tooltip;

    function hasTooltip(node) {
        const virtualEl = {
            getBoundingClientRect() {
                return {
                    width: 0,
                    height: 0,
                    x: node.clientX,
                    y: node.clientY,
                    left: node.clientX,
                    right: node.clientX,
                    top: node.clientY,
                    bottom: node.clientY,
                };
            },
        };

        computePosition(virtualEl, tooltip, {
            placement: "right-start",
            middleware: [offset(5), flip(), shift()],
        }).then(({ x, y }) => {
            Object.assign(tooltip.style, {
                top: `${y}px`,
                left: `${x}px`,
            });
        });
    }

    function showTooltip() {
        Object.assign(tooltip.style, {
            display: "block",
        });
    }

    function hideTooltip() {
        Object.assign(tooltip.style, {
            display: "none",
        });
    }
</script>

<MainLayout>
    <button
        on:mouseover={showTooltip}
        on:mousemove={hasTooltip}
        on:mouseleave={hideTooltip}
        on:focusout={hideTooltip}
        id="button"
        aria-describedby="tooltip"
    >
        My very big button
    </button>
    <div
        bind:this={tooltip}
        id="tooltip"
        role="tooltip"
        class="ring-2 ring-offset-2 bg-gray-700 text-white p-1 rounded-sm w-max absolute top-0 left-0 hidden pointer-events-none"
    >
        My Tooltip is very big and has a lot of content
    </div>
</MainLayout>
