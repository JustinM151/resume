<template>
    <div v-if="hasErrors" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-red-200 overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="font-medium text-red-900">
                <p>Whoops! Something went wrong.</p>
                <ul class="mt-3 list-disc list-inside text-sm text-red-900">
                    <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        errors() {
            return this.$page.props.errors
        },

        hasErrors() {
            return Object.keys(this.errors).length > 0
        },
    }
}
</script>
