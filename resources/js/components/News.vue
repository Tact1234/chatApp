<template>
    <v-list>
        <v-subheader>GOOGLE NEWS</v-subheader>
        <v-tabs background-color="deep-purple accent-4" dark grow>
            <v-tab
                v-for="(topic, i) in topics"
                :key="i"
                @click="setItemKey(topic)"
                v-text="topic"
            />
        </v-tabs>
        <v-list-item-group>
            <v-list-item
                v-for="(item, i) in items[keyTopics]"
                :key="i"
                :href="item.link"
            >
                <v-list-item-content>
                    <v-list-item-subtitle
                        v-text="item.pubDate"
                    ></v-list-item-subtitle>
                    <v-list-item-title v-text="item.title"></v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list-item-group>
    </v-list>
</template>
<script>
export default {
    data: () => ({
        items: [],
        topics: [],
        keyTopics: ""
    }),
    created: async function() {
        await axios.get("/getNews").then(res => {
            Object.keys(res.data).forEach(key => {
                this.items[key] = res.data[key].channel.item;
                this.items[key].forEach(item => {
                    var date = new Date(item.pubDate);
                    item.pubDate = this.getFormatDate(date);
                });
            });
        });
        console.log(this.items["国際"]);
        this.topics = Object.keys(this.items);
        this.keyTopics = this.topics[0];
    },
    methods: {
        setItemKey(value) {
            this.keyTopics = value;
        },
        getFormatDate(date) {
            return (
                date.getFullYear() +
                "/" +
                date.getMonth() +
                "/" +
                date.getDate() +
                " " +
                date.getHours() +
                ":" +
                date.getMinutes() +
                ":" +
                date.getSeconds()
            );
        }
    }
};
</script>
