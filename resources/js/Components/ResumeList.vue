<template>
<WidgetBox title="Your Resumes">
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="text-left font-extrabold bg-gray-300 p-2 w-1/2">Resume Title</th>
            <th class="text-left font-extrabold bg-gray-300 p-2">Unique Views</th>
            <th class="text-left font-extrabold bg-gray-300 p-2">Active</th>
            <th class="text-left font-extrabold bg-gray-300 p-2">Created At</th>
        </tr>
        </thead>

        <tbody>
        <tr v-for="resume in $page.props.resumes.data" class="odd:bg-gray-200">
            <td class="p-2"><Link :href="route('edit.resume', resume.id)">{{resume.title}}</Link></td>
            <td class="p-2">TODO</td>
            <td class="p-2">{{resume.active}}</td>
            <td class="p-2">{{resume.created_at}}</td>
        </tr>
        </tbody>
    </table>
</WidgetBox>
</template>

<script>
import WidgetBox from "@/Components/WidgetBox";
import {Link} from "@inertiajs/inertia-vue3";
export default {
    name: "ResumeList",
    components: {
        WidgetBox,
        Link,
    },
}
</script>

<style scoped>

</style>
