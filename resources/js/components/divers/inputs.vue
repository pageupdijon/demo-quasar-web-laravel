<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">inputs</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input <strong> standard </strong></div>
                        <q-input label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input avec la propriété <strong> outlined </strong></div>
                        <q-input outlined label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input avec la propriété <strong> rounded </strong> et <strong> outlined</strong></div>
                        <q-input outlined rounded label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Un input avec la propriété <strong> square </strong> et <strong> outlined</strong></div>
                        <q-input outlined square label="Texte"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" style="margin-left: 15px">La propriété <strong> dense </strong></div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-input dense label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-input dense outlined label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-input dense outlined rounded label="Texte"/>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <q-input dense outlined square label="Texte"/>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La propriété <strong> disable </strong></div>
                        <div class="col-3">
                            <q-input label="Disable" disable/>
                        </div>
                    </div>
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La propriété <strong> readonly </strong></div>
                        <div class="col-3">
                            <q-input label="Readonly" readonly/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div>Ajout <strong> d'icons </strong></div>
                        <q-input label="Texte">
                            <template v-slot:append>
                                <q-icon name="emoji_emotions"/>
                            </template>
                        </q-input>
                        <q-input label="Texte">
                            <template v-slot:prepend>
                                <q-icon name="emoji_emotions"/>
                            </template>
                        </q-input>
                        <q-input label="Texte">
                            <template v-slot:append>
                                <q-icon name="emoji_emotions"/>
                            </template>
                            <template v-slot:prepend>
                                <q-icon name="emoji_emotions"/>
                            </template>
                        </q-input>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La propriété <strong> clearable </strong></div>
                        <div class="col-3">
                            <q-input dense v-model="text" label="Clearable" clearable/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-3">
                        <div class="col-12">La gestion des <strong> erreurs </strong></div>
                        <div class="col-3">
                            <q-input error-message="Votre message d'erreur personnalisé"
                                     :error="true"
                                     label="Texte"
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

</script>
