<template>
    <Head title="Welcome" />

    <div class="relative flex items-top bg-scroll bg-cover justify-center min-h-screen bg-white items-center sm:pt-0" style="background-image: url('images/forest-fog.jpg')">
        <div v-if="canLogin" class="fixed top-0 right-0 px-6 py-4">
            <Link v-if="$page.props.auth.user" href="/resume" class="text-sm text-gray-400 underline">
                Resume
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="m-t-0">
                <h1 class="text-5xl sm:text-7xl text-yellow-50 text-opacity-70 shadowed sm:text-black sm:text-opacity-80 text-center">Justin Morris</h1>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <BreezeValidationErrors class="mb-4" />
                <form @submit.prevent="submit">
                    <div>
                        <BreezeLabel for="code" value="Access Code" />
                        <BreezeInput id="code" type="password" class="mt-1 block w-full" v-model="form.code" required autofocus autocomplete="disabled" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://localhost/login">Request Access</a>
                        <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Access Resume
                        </BreezeButton>
                </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
.shadowed {
    text-shadow: black 1px 2px 3px;
}

</style>

<script>
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import BreezeButton from '@/Components/Button.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeInput from '@/Components/Input.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
      Head,
      Link,
        BreezeValidationErrors,
        BreezeButton,
        BreezeLabel,
        BreezeInput
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    data() {
        return {
            form: this.$inertia.form({
                code: '',
            })
        }
    },
    methods: {
        submit() {
            this.form.post(this.route('access'), {
                onFinish: () => this.form.reset('code'),
            })
        }
    }
}
</script>
