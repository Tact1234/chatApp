require("./bootstrap");
import Vue from "vue";
import Main from "./components/Main.vue";
import router from "./router";
import vuetify from "./plugins/vuetify";

Vue.config.productionTip = false;

new Vue({
    router,
    vuetify,
    render: h => h(Main)
}).$mount("#app");
