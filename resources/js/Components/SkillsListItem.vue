<template>
    <li :class="'rounded '+getProficiencyColor(skill.proficiency)+' font-bold p-2 text-center'">{{skill.name}}</li>
</template>

<script>
export default {
    name: "SkillsListItem",
    props: ['skill'],
    methods: {
        getProficiencyColor(prof) {
            switch (prof) {
                case 4:
                    return "bg-green-900 text-white ";
                case 3:
                    return "bg-green-700 text-white ";
                default:
                case 2:
                    return "bg-green-500 text-white ";
            }
        }
    }
}
</script>

<style scoped>

</style>
