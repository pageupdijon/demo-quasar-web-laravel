<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">Loaders</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">

                        <div class="col-12"> Des <strong> loaders </strong></div>
                        <br/>
                        <div class="q-gutter-md row">
                            <q-btn class="col-3" color="primary" @click="showLoading" label="CHARGEMENT"/>
                            <q-btn class="col-3" color="positive" @click="showLoadingBis" label="CHARGEMENT"/>
                            <q-btn class="col-3" color="negative" @click="showLoadingCustom" label="CHARGEMENT"/>

                        </div>
                    </div>
                </div>

            </q-card-section>
        </q-card>
    </q-expansion-item>
</template>

<script setup>

import {onBeforeUnmount, reactive, ref} from "vue";
import {QSpinnerFacebook, useQuasar} from 'quasar'

const $q = useQuasar()


let timer = ref(null)

onBeforeUnmount(() => {
    if (timer !== void 0) {
        clearTimeout(timer)
        $q.loading.hide()
    }
})

function showLoading() {
    $q.loading.show()


    // hiding in 2s
    timer = setTimeout(() => {
        $q.loading.hide()
        timer = void 0
    }, 2000)
}

function showLoadingBis() {
    $q.loading.show({
        message: 'Some important process  is in progress. Hang on...'
    })

    // hiding in 3s
    timer = setTimeout(() => {
        $q.loading.hide()
        timer = void 0
    }, 3000)
}

function showLoadingCustom() {
    $q.loading.show({
        spinner: QSpinnerFacebook,
        spinnerColor: 'white',
        spinnerSize: 140,
        backgroundColor: 'deep-purple-8',
        message: 'Some important process is in progress. Hang on...',
        messageColor: 'black'
    })

    // hiding in 3s
    timer = setTimeout(() => {
        $q.loading.hide()
        timer = void 0
    }, 3000)
}


</script>
