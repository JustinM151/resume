<template>
    <ul class="grid grid-cols-3 gap-4 my-4">
        <li class="rounded bg-green-900 text-white font-bold p-2 text-center">Proficient</li>
        <li class="rounded bg-green-700 text-white font-bold p-2 text-center">Working Knowledge</li>
        <li class="rounded bg-green-500 text-white font-bold p-2 text-center">Basic or Academic Understanding</li>
    </ul>

    <div class="grid grid-cols-3 gap-4 items-start">
        <ul class="grid grid-cols-2 gap-4">
            <skills-list-item v-for="skill in proficientSkills" :key="skill.id" :skill="skill"></skills-list-item>
        </ul>
        <ul class="grid grid-cols-2 gap-4 items-start">
            <skills-list-item v-for="skill in workingSkills" :skill="skill"></skills-list-item>
        </ul>
        <ul class="grid grid-cols-2 gap-4 items-start">
            <skills-list-item v-for="skill in basicSkills" :skill="skill"></skills-list-item>
        </ul>
    </div>
</template>

<script>
import SkillsListItem from "@/Components/SkillsListItem";
export default {
    name: "SkillsList",
    components: {SkillsListItem},
    props: ['skills'],
    computed: {
        proficientSkills() {
            return this.skills.filter(skill => {
                if (skill.proficiency >= 4){
                    return skill;
                }
            });
        },
        workingSkills() {
            return this.skills.filter(skill => {
                if (skill.proficiency === 3){
                    return skill;
                }
            });
        },
        basicSkills() {
            return this.skills.filter(skill => {
                if (skill.proficiency <= 2){
                    return skill;
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
