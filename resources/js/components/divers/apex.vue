<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">Libraire externe</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">

                        <div class="col-12">  <strong> ApexCharts </strong></div>
                        <br/>
                        <div class="q-gutter-md row">
                            <apexchart width="380" type="donut" :options="options" :series="series"></apexchart>
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


let options = ref({})

let series = ref([44, 55, 41, 17, 15])


</script>
