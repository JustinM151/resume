<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <div class="py-0 sm:py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Dashboard Content -->
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import ResumeSection from "@/Components/ResumeSection.vue";
import { Head } from '@inertiajs/inertia-vue3';
import SkillsList from "@/Components/SkillsList";

export default {
    components: {
        SkillsList,
        BreezeAuthenticatedLayout,
        ResumeSection,
        Head,
    },
    props: {

    },
    methods: {
        dateStrToMonthYear(dateStr) {
            let dt = new Date(dateStr);
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            return months[dt.getMonth()+1]+" "+dt.getFullYear();
        }
    }
}
</script>
