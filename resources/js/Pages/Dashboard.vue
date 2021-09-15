<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <div class="py-0 sm:py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Dashboard Content -->
                    <div class="p-5">
                        <h1 class="text-5xl border-b-2 mb-4">Dashboard</h1>
                        <div class="flex flex-row gap-4">
                            <div class="w-2/3">
                                <ResumeList></ResumeList>
                            </div>
                            <div class="w-1/3">
                                <WidgetBox title="Recent Visitors"></WidgetBox>
                            </div>
                        </div>
                    </div>
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
import ResumeList from "@/Components/ResumeList";
import WidgetBox from "@/Components/WidgetBox";

export default {
    components: {
        SkillsList,
        BreezeAuthenticatedLayout,
        ResumeSection,
        ResumeList,
        WidgetBox,
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
