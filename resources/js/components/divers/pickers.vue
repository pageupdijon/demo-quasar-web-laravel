<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">date / time pickers</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">

                        <div class="col-12">Date et Time <strong> pickers </strong></div>

                        <div class="row q-col-gutter-x-md" style="padding-top: 25px">
                            <q-input
                                v-model="form.starting_date"
                                label="Date"
                                @click="showDatePicker"
                                class="col-4"
                                color="brown-14"
                            >
                                <template v-slot:prepend>
                                    <q-icon name="fa-regular fa-calendar" size="15px" class="cursor-pointer">
                                        <q-popup-proxy ref="qDateProxy">
                                            <q-date v-model="form.starting_date"
                                                    color="primary"
                                                    today-btn
                                                    mask="DD/MM/YYYY">
                                            </q-date>
                                        </q-popup-proxy>
                                    </q-icon>
                                </template>
                            </q-input>

                            <q-input
                                v-model="form.starting_time"
                                label="Heure"
                                @click="showTimePicker"
                                class="col-4"
                                color="brown-14">
                                <template v-slot:prepend>
                                    <q-icon name="fa-regular fa-clock" size="15px" class="cursor-pointer">
                                        <q-popup-proxy ref="qTimeProxy">
                                            <q-time v-model="form.starting_time" mask="HH:mm" />
                                        </q-popup-proxy>
                                    </q-icon>
                                </template>
                            </q-input>
                        </div>

                    </div>

                    <div class="q-pa-md q-gutter-sm col-12 row">

                    <div class="col-12">Date <strong> range </strong></div>

                    <div class="col-4">
                            <q-input
                                label="Date"
                                @click="showRangePicker"
                                class="col-12  col-lg-6 col-md-5"
                                color="brown-14"
                            >
                                <template v-slot:prepend>
                                    <q-icon name="fa-regular fa-calendar" size="15px" class="cursor-pointer">
                                        <q-popup-proxy ref="qRangeProxy">
                                            <q-date v-model="form.range"
                                                    color="primary" range>
                                            </q-date>
                                        </q-popup-proxy>
                                    </q-icon>
                                </template>
                            </q-input>
                        </div>
                    </div>

                </div>


            </q-card-section>
        </q-card>
    </q-expansion-item>
</template>

<script setup>

import {reactive, ref} from "vue";

let form = reactive({
    starting_date: null,
    starting_time: null,
})

let qDateProxy = ref(null)
function showDatePicker(){
    qDateProxy.value.show()
}


let qTimeProxy = ref(null)
function showTimePicker(){
    qTimeProxy.value.show()
}

let qRangeProxy = ref(null)

function showRangePicker(){
    qRangeProxy.value.show()
    console.log(form)
}

let model = ref(null)


</script>
