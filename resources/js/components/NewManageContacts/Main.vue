<template>

    <div>
        <router-view></router-view>
    </div>

</template>

<script>

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

const my_routes = [
    {
        path: "/",
        component: require("./List").default,
        name: "contacts-home",
    },
    {
        path: "/new-contact",
        component: require("./New").default,
        name: "contacts-new",
    },
    {
        path: "/edit-contact",
        component: require("./Edit").default,
        name: "contacts-edit",
        props:true
    }
];

const router = new VueRouter({
    routes: my_routes
})

export default {
    router,
    data(){
        return {
            test: ""
        }
    },
    mounted() {
        //console.log("This is vue rouer form main /root", this.$router);
    },
    methods:{},
}
</script>

<style scoped>

</style>
