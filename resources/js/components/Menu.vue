<template>
    <v-card max-width="200" tile>
        <v-list>
            <v-list-item to="/content1">
                <v-list-item-avatar>
                    <img src="https://cdn.vuetifyjs.com/images/john.jpg" />
                </v-list-item-avatar>
                <v-list-item-content
                    ><v-list-item-title
                        class="title"
                        v-text="username"
                    ></v-list-item-title
                ></v-list-item-content>
            </v-list-item>
        </v-list>
        <v-list dense>
            <v-list-item-group v-model="selectedItem" color="primary">
                <v-list-item
                    v-for="(item, i) in items"
                    :key="i"
                    :to="item.link"
                >
                    <v-list-item-icon>
                        <v-icon v-text="item.icon"></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title
                            v-text="item.name"
                        ></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list-item-group>
        </v-list>
    </v-card>
</template>
<script>
export default {
    name: "Menu",
    data: () => ({
        username: "ユーザー１",
        selectedItem: 1,
        items: [
            { name: "Talk", icon: "mdi-forum-outline", link: "/content2" },
            { name: "TimeLine", icon: "mdi-av-timer", link: "/content3" },
            {
                name: "News",
                icon: "mdi-newspaper-variant-outline",
                link: "/news"
            },
            { name: "Files", icon: "mdi-folder-outline", link: "/content5" }
        ]
    })
};
</script>
