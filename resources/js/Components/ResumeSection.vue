<template>
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-3xl font-extrabold">{{sectionHeader}}</h2>
        <div class="">
            <slot />
        </div>
    </div>
</template>

<script>
export default {
    name: "ResumeSection",
    props: ['sectionHeader'],
}
</script>

<style scoped>

</style>
