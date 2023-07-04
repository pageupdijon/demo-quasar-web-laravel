<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">cards</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">
                        <div class="col-12"> Des cards <strong> simple </strong></div>
                            <div class="q-pa-md row items-start q-gutter-md">
                                <q-card class="my-card">
                                    <q-card-section class="bg-primary text-white">
                                        <div class="text-h6">Our Changing Planet</div>
                                        <div class="text-subtitle2">by John Doe</div>
                                    </q-card-section>


                                    <q-separator />
                                    <q-card-section class="bg-white">
                                        <div class="text-subtitle2">by John Doe</div>
                                    </q-card-section>

                                    <q-separator />


                                    <q-card-actions align="right">
                                        <q-btn flat>Action 1</q-btn>
                                        <q-btn flat>Action 2</q-btn>
                                    </q-card-actions>
                                </q-card>

                                <q-card class="my-card">
                                    <q-card-section class="bg-positive text-white">
                                        <div class="text-h6">Our Changing Planet</div>
                                        <div class="text-subtitle2">by John Doe</div>
                                    </q-card-section>

                                    <q-card-actions align="around">
                                        <q-btn flat>Action 1</q-btn>
                                        <q-btn flat>Action 2</q-btn>
                                    </q-card-actions>
                                </q-card>

                                <q-card class="my-card">
                                    <q-card-section class="bg-negative text-white">
                                        <div class="text-h6">Our Changing Planet</div>
                                        <div class="text-subtitle2">by John Doe</div>
                                    </q-card-section>

                                    <q-card-actions vertical align="right">
                                        <q-btn flat>Action 1</q-btn>
                                        <q-btn flat>Action 2</q-btn>
                                    </q-card-actions>
                                </q-card>

                                <q-card class="my-card">
                                    <q-card-section class="bg-deep-purple-4 text-white">
                                        <div class="text-h6">Our Changing Planet</div>
                                        <div class="text-subtitle2">by John Doe</div>
                                    </q-card-section>

                                    <q-card-actions vertical align="center">
                                        <q-btn flat>Action 1</q-btn>
                                        <q-btn flat>Action 2</q-btn>
                                    </q-card-actions>
                                </q-card>
                            </div>
                    </div>

                    <div class="col-6">
                        <q-card class="my-card" flat bordered>
                            <q-card-section horizontal>
                                <q-card-section class="q-pt-xs">
                                    <div class="text-overline">Overline</div>
                                    <div class="text-h5 q-mt-sm q-mb-xs">Title</div>
                                    <div class="text-caption text-grey">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </q-card-section>

                                <q-card-section class="col-5 flex flex-center">
                                    <q-img
                                        class="rounded-borders"
                                        src="https://cdn.quasar.dev/img/chicken-salad.jpg"
                                    />
                                </q-card-section>
                            </q-card-section>

                            <q-separator />

                            <q-card-actions>
                                <q-btn flat round icon="event" />
                                <q-btn flat>
                                    7:30PM
                                </q-btn>
                                <q-btn flat color="primary">
                                    Reserve
                                </q-btn>
                            </q-card-actions>
                        </q-card>
                    </div>
                </div>


            </q-card-section>
        </q-card>
    </q-expansion-item>
</template>

<script setup>

import {ref} from "vue";
let text = ref('')

let selectItem = ref(null)
let selectedFilteredItem = ref('')
let selectedFilteredItems = ref(null)

const colorsOptions = [
    {
        'value': "red",
        'label': "Rouge"
    },
    {
        'value': "green",
        'label': "Vert"
    },
    {
        'value': "blue",
        'label': "Bleu"
    },
]

let colors = ref(colorsOptions)

function filterFn (val, update) {
    update(() => {
        const needle = val.toLowerCase()
        colors.value = colorsOptions.filter(item => (item.label).toLowerCase().includes(needle))
    })
}

function setModel (val) {
    selectedFilteredItem.value = val
}




</script>
