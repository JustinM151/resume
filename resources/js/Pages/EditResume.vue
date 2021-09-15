<template>
    <Head title="Manage Resume" />
    <BreezeAuthenticatedLayout>
        <main-content-box title="Manage Resume">
            <div class="p-5">
                <h1 class="text-5xl border-b-2 mb-4">Manage Resume</h1>

                <div class="flex flex-row gap-4 my-4">
                    <div class="w-1/4">
                        <widget-box title="Contact Info">
                            <form @submit.prevent="updateResume">
                                <div class="my-4">
                                    <Label>Name:</Label>
                                    <Input :model-value="resume.name" v-model="contactForm.name" id="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name"/>
                                </div>
                                <div class="my-4">
                                    <Label>Email:</Label>
                                    <Input :model-value="resume.email" v-model="contactForm.email" id="email" type="email" class="mt-1 block w-full" required autofocus autocomplete="email" />
                                </div>
                                <div class="my-4">
                                    <Label>Phone:</Label>
                                    <Input :model-value="resume.phone" v-model="contactForm.phone" id="phone" type="tel" class="mt-1 block w-full" required autofocus autocomplete="phone" />
                                </div>
                                <div class="my-4">
                                    <Label>Location:</Label>
                                    <Input :model-value="resume.location" v-model="contactForm.location" id="location" type="text" class="mt-1 block w-full" required autofocus autocomplete="disabled" />
                                </div>
                                <div class="my-4">
                                    <Label>Objective:</Label>
                                    <textarea rows="6" v-model="contactForm.objective" id="objective" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full mt-1 block">{{resume.objective}}</textarea>
                                </div>
                                <div class="my-4 text-center">
                                    <Button :class="{ 'opacity-25': contactForm.processing }" :disabled="contactForm.processing">UPDATE</Button>
                                </div>
                            </form>
                        </widget-box>

                        <widget-box title="Skills" class="mt-4"></widget-box>
                    </div>

                    <div class="w-3/4">
                        <widget-box title="Education">

                        </widget-box>

                        <widget-box title="Work Experience" class="mt-4">

                        </widget-box>

                        <widget-box title="Projects" class="mt-4">

                        </widget-box>

                        <widget-box title="Certificates &amp; Awards" class="mt-4">

                        </widget-box>

                        <widget-box title="Cover Letter(s)" class="mt-4">
                            <table class="table-auto w-full">
                                <thead>
                                <tr>
                                    <th class="text-left font-extrabold bg-gray-300 p-2 w-2/3">Title</th>
                                    <th class="text-left font-extrabold bg-gray-300 p-2">Action</th>
                                    <th class="text-left font-extrabold bg-gray-300 p-2">Last Updated</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="letter in resume.cover_letters" class="odd:bg-gray-200">
                                    <td class="p-2"><Link :href="route('edit.resume', letter.id)">{{letter.title}}</Link></td>
                                    <td class="p-2"><Link :href="route('edit.resume', resume.id)">D</Link></td>
                                    <td class="p-2">{{letter.updated_at}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </widget-box>
                    </div>
                </div>
            </div>
        </main-content-box>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import MainContentBox from "@/Components/MainContentBox";
import WidgetBox from "@/Components/WidgetBox";
import Dashboard from "@/Pages/Dashboard";
import Label from "@/Components/Label";
import Input from "@/Components/Input";
import Button from "@/Components/Button";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "EditResume",
    components: {
        Button,
        Input,
        Label,
        Dashboard,
        WidgetBox,
        MainContentBox,
        BreezeAuthenticatedLayout,
        Link,
    },
    props: {
        resume: Object,
    },
    data() {
        return {
            contactForm: this.$inertia.form({
                name: this.resume.name,
                email: this.resume.email,
                phone: this.resume.phone,
                location: this.resume.location,
                objective: this.resume.objective,
            })
        }
    },

    methods: {
        updateResume() {
            this.contactForm.patch(this.route('update.resume', this.resume.id), {
                //onFinish: () => this.form.reset('password'),
            })
        }
    }
}
</script>

<style scoped>

</style>
