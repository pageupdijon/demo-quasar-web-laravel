<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">checkbox & radio button</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12"> Simple <strong>checkbox</strong></div>
                        <div class="col-3">
                            <q-checkbox color="primary" v-model="qc1"/>
                            <q-checkbox color="positive" v-model="qc2"/>
                            <q-checkbox color="negative" v-model="qc3"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12"> Checkbox avec <strong> icônes </strong></div>
                        <div class="col-3">
                            <q-checkbox
                                v-model="qc1"
                                color="primary"
                                checked-icon="star"
                                unchecked-icon="star_border"
                                indeterminate-icon="help"
                            />
                            <q-checkbox
                                v-model="qc2"
                                color="positive"
                                checked-icon="star"
                                unchecked-icon="star_border"
                                indeterminate-icon="help"
                            />
                            <q-checkbox
                                v-model="qc3"
                                color="negative"
                                checked-icon="star"
                                unchecked-icon="star_border"
                                indeterminate-icon="help"
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">
                        <div class="col-12"> Checkbox avec du <strong> texte </strong></div>
                        <div class="row col-12">
                            <div class="col-3">
                                <q-checkbox color="primary" v-model="qc1" label="texte sur la droite"/>
                            </div>
                            <div class="col-3">
                                <q-checkbox color="positive" v-model="qc1" left-label label="texte sur la gauche"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">
                        <div class="col-12"> Checkbox avec l'état <strong> indéterminé </strong></div>
                        <div class="row col-12">
                            <div class="col-3">
                                <q-checkbox color="negative" v-model="qc4" label="texte sur la droite"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">
                        <div class="col-12"> Les <strong> radio buttons </strong></div>
                        <div class="row col-12">
                            <div class="col-6">
                                <q-radio v-model="color" color="primary" val="Bleu" label="Bleu"/>
                                <q-radio v-model="color" color="positive" val="Vert" label="Vert"/>
                                <q-radio v-model="color" color="negative" val="Rouge" label="Rouge"/>
                                <q-radio v-model="color" color="deep-purple-4" val="Violet" label="Violet"/>
                            </div>
                        </div>
                        <div class="col-6" style="margin-left: 20px"> Vous avez choisi la couleur :
                            <span :class="{
                                'text-primary': color === 'Bleu',
                                'text-positive': color === 'Vert',
                                'text-negative': color === 'Rouge',
                                'text-deep-purple-4': color === 'Violet'}"
                                class="text-bold">
                                {{ color }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">
                        <div class="col-12"> Radio buttons avec <strong> icônes </strong></div>
                        <div class="row col-12">
                            <div class="col-6">
                                <q-radio v-model="color" checked-icon="task_alt" unchecked-icon="panorama_fish_eye" color="primary" val="Bleu" label="Bleu"/>
                                <q-radio v-model="color" checked-icon="task_alt" unchecked-icon="panorama_fish_eye" color="positive" val="Vert" label="Vert"/>
                                <q-radio v-model="color" checked-icon="task_alt" unchecked-icon="panorama_fish_eye" color="negative" val="Rouge" label="Rouge"/>
                                <q-radio v-model="color" checked-icon="task_alt" unchecked-icon="panorama_fish_eye" color="deep-purple-4" val="Violet" label="Violet"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">
                        <div class="col-12"> La propriété <strong> disable </strong></div>
                        <div class="row col-12">
                            <div class="col-6">
                                <q-radio v-model="color" color="primary" disable val="Bleu" label="Bleu"/>
                                <q-radio v-model="color" color="positive" disable val="Vert" label="Vert"/>
                                <q-radio v-model="color" color="negative" disable val="Rouge" label="Rouge"/>
                                <q-radio v-model="color" color="deep-purple-4" disable val="Violet" label="Violet"/>
                            </div>
                        </div>
                    </div>
                </div>

            </q-card-section>
        </q-card>
    </q-expansion-item>
</template>

<script setup>

import {ref} from "vue";

let qc1 = ref(true)
let qc2 = ref(true)
let qc3 = ref(true)
let qc4 = ref(null)
let color = ref(null)

</script>
