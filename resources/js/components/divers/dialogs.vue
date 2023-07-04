<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">dialogs</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">
                        <div>Usage <strong> basique </strong></div>
                        <div class="q-pa-md q-gutter-sm">
                            <q-btn label="Action" icon="emoji_emotions" color="primary" @click="openBasic"/>
                        </div>

                        <q-dialog v-model="basic">

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

                        </q-dialog>

                        <div>La position de la <strong> dialog </strong></div>

                        <div class="q-pa-md q-gutter-sm">
                            <q-btn label="Haut" icon="keyboard_arrow_up" color="primary" @click="open('top')"/>
                            <q-btn label="Droite" icon="keyboard_arrow_right" color="positive" @click="open('right')"/>
                            <q-btn label="Bas" icon="keyboard_arrow_down" color="negative" @click="open('bottom')"/>
                            <q-btn label="Gauche" icon="keyboard_arrow_left" color="deep-purple-4"
                                   @click="open('left')"/>

                            <q-dialog v-model="dialog" :position="position">
                                <q-card style="width: 350px">
                                    <q-linear-progress :value="0.6" color="pink"/>

                                    <q-card-section class="row items-center no-wrap">
                                        <div>
                                            <div class="text-weight-bold">The Walker</div>
                                            <div class="text-grey">Fitz & The Tantrums</div>
                                        </div>

                                        <q-space/>

                                        <q-btn flat round icon="fast_rewind"/>
                                        <q-btn flat round icon="pause"/>
                                        <q-btn flat round icon="fast_forward"/>
                                    </q-card-section>
                                </q-card>
                            </q-dialog>
                        </div>
                    </div>
                </div>


            </q-card-section>
        </q-card>
    </q-expansion-item>
</template>

<script setup>

import {ref} from "vue";

const dialog = ref(false)
const basic = ref(false)
const position = ref('top')

function open(pos) {
    position.value = pos
    dialog.value = true
}

function openBasic() {
    basic.value = true
}


</script>
