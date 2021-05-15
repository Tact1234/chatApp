<template>
    <v-container>
        <v-row>
            <v-col><sideMenu></sideMenu></v-col>
            <v-col><router-view /></v-col>
        </v-row>
    </v-container>
</template>
<script>
import SideMenu from "./Menu.vue";
export default {
    name: "Main",
    components: {
        sideMenu: SideMenu
    },
    data: () => ({
        username: "ユーザー１"
    })
};
</script>
