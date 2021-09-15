<template>
    <Head title="Resume" />

    <BreezeAuthenticatedLayout>
        <div class="py-0 sm:py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-1 sm:grid-cols-2">
                        <div>
                            <h1 class="text-3xl sm:text-7xl">{{$page.props.resume.name}}</h1>
                        </div>
                        <div class="sm:flex sm:flex-row-reverse">
                            <div>
                                <p>Email: <a :href="'mailto:'+$page.props.resume.email" class="text-blue-400 underline">{{$page.props.resume.email}}</a></p>
                                <p>Phone: <a :href="'tel:'+$page.props.resume.phone" class="text-blue-400 underline">{{$page.props.resume.phone}}</a></p>
                                <p>Location: {{$page.props.resume.location}}</p>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="p-6 bg-white border-b border-gray-200 flex justify-between">
                        <div>
                            <h2 class="text-3xl">Objective</h2>
                            <p>{{$page.props.resume.objective}}</p>
                        </div>
                    </div>

                    <hr>

                    <ResumeSection section-header="Education">
                        <div v-for="education in $page.props.resume.education" class="w-full p-3 my-4 rounded border-2 border-gray-300">
                            <div class="flex-col">
                                <div class="flex">
                                    <div class="flex-none">
                                        <h3 class="text-2xl">{{education.school}}</h3>
                                        <p class="italic">{{education.degree}} - {{education.major}}</p>
                                    </div>
                                    <div class="flex-grow text-right">
                                        <p>Graduated: {{dateStrToMonthYear(education.finish)}}</p>
                                        <p>GPA: {{education.gpa}}</p>
                                        <p>Distinctions: {{education.distinctions}}</p>
                                    </div>
                                </div>
                                <div class="flex-row">
                                    <div class="flex-grow">
                                        <p class="mt-3">{{education.description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ResumeSection>

                    <hr>

                    <ResumeSection section-header="Work Experience">
                        <div v-for="job in $page.props.resume.experience" class="w-full p-3 my-4 rounded border-2 border-gray-300">
                            <div class="flex-col">
                                <div class="flex">
                                    <div class="flex-none">
                                        <h3 class="text-2xl">{{job.company_name}}</h3>
                                        <p class="italic">{{job.title}}</p>
                                    </div>
                                    <div class="flex-grow text-right">
                                        <p>{{dateStrToMonthYear(job.start)}} - {{dateStrToMonthYear(job.finish)}}</p>
                                    </div>
                                </div>
                                <div class="flex-row mt-3">
                                    <div class="flex-grow" v-html="job.description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ResumeSection>

                    <hr>

                    <ResumeSection section-header="Skills">
                        <skills-list :skills="$page.props.resume.skills"></skills-list>
                    </ResumeSection>

                    <hr>

                    <ResumeSection section-header="Projects">
                        <div v-for="project in $page.props.resume.projects" class="w-full p-3 my-4 rounded border-2 border-gray-300">
                            <div class="flex-col">
                                <div class="flex">
                                    <div class="flex-none">
                                        <h3 class="text-2xl">{{project.name}}</h3>
                                    </div>
                                    <div class="flex-grow text-right">
                                        <p><a :href="project.link">{{project.link}}</a></p>
                                    </div>
                                </div>
                                <div class="flex-row mt-3">
                                    <div class="flex-grow" v-html="project.description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ResumeSection>

                    <hr>

                    <ResumeSection section-header="Certificates &amp; Awards">
                        <div v-for="cert in $page.props.resume.awards" class="w-full p-3 my-4 rounded border-2 border-gray-300">
                            <div class="flex-col">
                                <div class="flex">
                                    <div class="flex-none">
                                        <h3 class="text-2xl">{{cert.name}}</h3>
                                        <p class="italic">cert.from</p>
                                    </div>
                                    <div class="flex-grow text-right">
                                        <p>{{dateStrToMonthYear(cert.award_date)}}</p>
                                    </div>
                                </div>
                                <div class="flex-row mt-3">
                                    <div class="flex-grow">
                                        <p>cert.description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ResumeSection>
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
