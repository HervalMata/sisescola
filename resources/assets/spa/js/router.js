import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./router.map";
import AppComponent from "./components/App";

const router = new VueRouter({
    routes
})

new Vue({
    router,
    el: '#app',
    components: {
        'app' : AppComponent
    }
})

export default router;