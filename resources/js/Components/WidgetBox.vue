<template>
    <div class="rounded bg-indigo-50 shadow-lg w-full p-2">
        <h2 class="text-xl">{{title}}</h2>
        <slot />
    </div>
</template>

<script>
export default {
    name: "WidgetBox",
    props: [
        'title',
    ],
}
</script>

<style scoped>

</style>
