<template>
  <div id="app">
    <v-container>
      <v-row>
        <v-col :cols="2">
          <v-card elevation="2"> {{ text }} </v-card>
        </v-col>
        <v-col :cols="7">
          <v-card elevation="2"> {{ text }} </v-card>
        </v-col>
        <v-col :cols="3">
          <v-card elevation="2"> {{ text }} </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>
<script>
export default {
  data() {
    return {
      text: "Hello world!",
    };
  },
};
</script>
