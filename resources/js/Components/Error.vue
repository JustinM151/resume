<template>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-red-200 border-l-8 border-red-400 text-red-700 p-4 my-2" role="alert">
        <p class="font-bold">ERROR!</p>
        <ul>
            <li class="list-inside list-disc" v-for="error in errors">{{error}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Error",
    props: {
        errors: Object,
    }
}
</script>

<style scoped>

</style>
