<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">selects</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input <strong> standard </strong></div>
                        <q-select label="Texte" :options="colors" v-model="selectItem"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input avec la propriété <strong> outlined </strong></div>
                        <q-select outlined label="Texte"  :options="colors" v-model="selectItem"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input avec la propriété <strong> rounded </strong> et <strong> outlined</strong></div>
                        <q-select :options="colors" v-model="selectItem" outlined rounded label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input avec la propriété <strong> square </strong> et <strong> outlined</strong></div>
                        <q-select :options="colors" v-model="selectItem" outlined square label="Texte"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" style="margin-left: 15px">La propriété <strong> dense </strong></div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-select :options="colors" v-model="selectItem" dense label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-select :options="colors" v-model="selectItem" dense outlined label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-select :options="colors" v-model="selectItem" dense outlined rounded label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-select :options="colors" v-model="selectItem" dense outlined square label="Texte"/>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La propriété <strong> disable </strong></div>
                        <div class="col-3">
                            <q-select :options="colors" v-model="selectItem" label="Disable" disable/>
                        </div>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La propriété <strong> readonly </strong></div>
                        <div class="col-3">
                            <q-select :options="colors" v-model="selectItem" label="Readonly" readonly/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Ajout <strong> d'icons </strong></div>
                        <q-select :options="colors" v-model="selectItem" label="Texte">
                            <template v-slot:append>
                                <q-icon name="emoji_emotions"/>
                            </template>
                        </q-select>
                        <q-select :options="colors" v-model="selectItem" label="Texte">
                            <template v-slot:prepend>
                                <q-icon name="emoji_emotions"/>
                            </template>
                        </q-select>
                        <q-select :options="colors" v-model="selectItem" label="Texte">
                            <template v-slot:append>
                                <q-icon name="emoji_emotions"/>
                            </template>
                            <template v-slot:prepend>
                                <q-icon name="emoji_emotions"/>
                            </template>
                        </q-select>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La propriété <strong> clearable </strong></div>
                        <div class="col-3">
                            <q-select :options="colors" v-model="selectItem" dense label="Clearable" clearable/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La gestion des <strong> erreurs </strong></div>
                        <div class="col-3">
                            <q-select :options="colors" v-model="selectItem"
                                     error-message="Votre message d'erreur personnalisé"
                                     :error="true"
                                     label="Texte"
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12"><strong> Filtres </strong> et <strong>Autocomplete</strong></div>
                        <div class="col-3">
                            <q-select :options="colors"
                                      label="Recherche"
                                      :model-value="selectedFilteredItem"
                                      @filter="filterFn"
                                      @input-value="setModel"
                                      fill-input
                                      hide-selected
                                      use-input
                                      input-debounce="0"
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12"> la propriété <strong>multiple</strong></div>
                            <div class="col-3">
                                <q-select
                                    v-model="selectedFilteredItems"
                                    multiple
                                    :options="colors"
                                    clearable
                                    label="Multiple"
                                />
                            </div>
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
