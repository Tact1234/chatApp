<template>
    <v-app>
        <v-container>
            <v-row>
                <v-col cols="3"><sideMenu></sideMenu></v-col>
                <v-col cols="9">
                    <v-card max-width="800" max-height="800">
                        <router-view />
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-app>
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
