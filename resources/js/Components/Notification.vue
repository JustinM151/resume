<template>
    <div :id="id" class="max-w-7xl mx-auto sm:px-6 lg:px-8 border-l-8 p-4 my-2" :class="getNotificationColorClasses" role="alert">
        <div class="flex flex-row gap-4">
            <div>
                <p class="font-bold">Attention:</p>
            </div>
            <div class="flex-grow text-right">
                <p class="text-sm cursor-pointer" v-on:click="closeNotifications(id)">close</p>
            </div>
        </div>
        <ul>
            <li class="list-inside list-disc" v-for="notification in notifications">{{notification}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Notification",
    props: {
        id: String,
        type: String,
        notifications: Object,
    },
    methods: {
        closeNotifications(id) {
            let el = document.getElementById(id);
            el.remove();
        }
    },
    computed: {
        getNotificationColorClasses() {
            let color = "";
            switch (this.type) {
                case "error":
                    color = "red";
                    break;
                default:
                case "info":
                    color = "blue";
                    break;
            }
            return "bg-"+color+"-200 border-"+color+"-400 text-"+color+"-700 ";
        }
    }
}
</script>

<style scoped>

</style>
