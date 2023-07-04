<template>
    <main class="view-layout">
        <div>
            <slot name="header"/>
        </div>
        <div>
            <slot name="section"/>
        </div>
        <div>
            <slot name="footer"/>
        </div>
    </main>
</template>

<style lang="scss">

.view-layout {
    height: 100%;
    min-height: 100%;
    max-height: 100%;
    display: flex;
    flex-direction: column;

    > *:empty {
        display: none;
    }

    > .container {
        padding: 8px 24px;
    }

    > footer.container {
        padding-top: 6px;
        padding-bottom: 6px;
        position: sticky;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: var(--background-color);
        z-index: 1;
    }
}
</style>
