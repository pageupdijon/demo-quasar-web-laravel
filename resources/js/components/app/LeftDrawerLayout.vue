<template>
    <q-drawer
        class="bg-white"
        v-model="drawerOpen"
        side="left"
        bordered
    >
        <template v-for="(menuItem, index) in navigation" :key="index">
            <q-expansion-item
                expand-separator
                :caption="menuItem.text"
                icon="forum"
                expand-icon="none"
                default-opened
            >
                <template v-slot:header>
                    <q-item-section class="text-grey-7 text-overline text-uppercase">
                        <div v-if="menuItem.text">{{ menuItem.text }}</div>
                    </q-item-section>
                </template>

                <template v-for="(subMenuItem, index) in menuItem.items" :key="index">
                    <q-item clickable active-class="bg-primary text-white"
                            :active="subMenuItem.route === selectedLeftDrawerTitle"
                            :class="{
                                    'text-grey-7': subMenuItem.route !== selectedLeftDrawerTitle
                                }"
                            v-ripple @click="goToRoute(subMenuItem.route)"
                    >
                        <q-item-section avatar>
                            <q-icon :name="subMenuItem.icon" size="20px"/>
                        </q-item-section>
                        <q-item-section class="text-overline text-uppercase">
                            {{ subMenuItem.title }}
                        </q-item-section>
                    </q-item>
                </template>
            </q-expansion-item>
            <q-separator :key="'sep' + index" v-if="menuItem.separator" />
        </template>
    </q-drawer>
</template>

<script setup>
import {computed, ref, watch} from 'vue'
import { router } from '@inertiajs/vue3'

const emit = defineEmits(['routeUpdated', 'toggleLeftDrawer'])

let props = defineProps({
    isOpen: {
        type: Boolean,
        required: true,
        default: false
    },
    navigation: {
        type: Array,
        required: true,
        default: []
    },
    resetNavigation: {
        type: String,
        required: true,
        default: '/'
    }
})

let drawerOpen = computed({
    get() {
        return props.isOpen
    },
    set() {
        emit('toggleLeftDrawer')
    }
})

let selectedLeftDrawerTitle = ref('home');

watch(() => props.resetNavigation, (route) => {
    selectedLeftDrawerTitle.value = route
});

function goToRoute(route){
    selectedLeftDrawerTitle.value = route
    emit('routeUpdated', route)
    router.get(route);
}

function toggleLeftDrawer(){
    emit('toggleLeftDrawer')
}

</script>
