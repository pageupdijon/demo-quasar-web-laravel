<template>
    <q-layout view="lHh lpR lFf" class="bg-grey-2">

        <header-layout
            :left-drawer-is-open="leftDrawerOpen"
            @toggle-left-drawer="toggleLeftDrawer"
            @reset-drawers="resetDrawers"
        />

        <left-drawer-layout
            :reset-navigation="leftDrawerSelectedMenu"
            :is-open="leftDrawerOpen"
            :navigation="navigation"
            @route-updated="updateRoute"
            @toggle-left-drawer="toggleLeftDrawer"
        />

        <q-page-container>
            <q-page>
                <slot/>
            </q-page>
        </q-page-container>

    </q-layout>
</template>

<script setup>

import {ref} from "vue";
import HeaderLayout from "@/components/app/HeaderLayout.vue";
import LeftDrawerLayout from "@/components/app/LeftDrawerLayout.vue";

defineProps({
    navigation: {
        type: Array,
        required: true,
        default: []
    }
})

let leftDrawerOpen = ref(false)
let leftDrawerSelectedMenu = ref('')

function resetLeftDrawer(){
    leftDrawerSelectedMenu.value = '/'
}

function resetDrawers(){
    resetLeftDrawer()
}

function toggleLeftDrawer () {
    leftDrawerOpen.value = !leftDrawerOpen.value
}

function closeDrawers() {
    leftDrawerOpen.value = false;
}

function updateRoute(route){
    leftDrawerSelectedMenu.value = route
    closeDrawers();
}

</script>


<style scoped>

</style>
