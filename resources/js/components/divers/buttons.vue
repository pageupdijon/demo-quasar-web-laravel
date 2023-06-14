
<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">boutons</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="q-pa-md q-gutter-sm">
                    <div>
                        La propriété <strong> color</strong>
                    </div>
                    <q-btn color="primary" label="primary" />
                    <q-btn color="positive" label="positive" />
                    <q-btn color="negative" label="negative" />
                    <q-btn color="dark" label="dark" />
                </div>

                <div class="q-pa-md q-gutter-sm">
                    <div>
                        La propriété <strong> icon</strong> et <strong> icon-right </strong>
                    </div>
                    <q-btn color="primary" icon="emoji_emotions" label="On Left" />
                    <q-btn color="positive" icon-right="emoji_emotions" label="On Right" />
                    <q-btn color="negative" icon="emoji_emotions" icon-right="emoji_emotions" label="On Left and Right" />
                </div>

                <div class="q-pa-md q-gutter-sm">
                    <div>
                        La propriété <strong> round</strong>
                    </div>
                    <q-btn round color="primary" icon="emoji_emotions" />
                    <q-btn round color="positive" icon="emoji_emotions" />
                    <q-btn round color="negative" icon="emoji_emotions" />
                </div>

                <div class="q-pa-md q-gutter-sm">
                    <div>
                        La propriété <strong> rounded</strong>
                    </div>
                    <q-btn rounded color="primary" label="primary" />
                    <q-btn rounded color="positive" label="positive" />
                    <q-btn rounded color="negative" label="negative" />
                </div>

                <div class="q-pa-md q-gutter-sm">
                    <div>
                        La propriété <strong> square</strong>
                    </div>
                    <q-btn square color="primary" icon="emoji_emotions" />
                    <q-btn square color="positive" icon="emoji_emotions" />
                    <q-btn square color="negative" icon="emoji_emotions" />
                </div>

                <div class="q-pa-md q-gutter-sm">
                    <div>
                        La propriété <strong> size</strong>
                    </div>
                    <q-btn color="primary" size="xs" :label="`Taille xs`"/>
                    <q-btn color="primary" size="sm" :label="`Taille sm`"/>
                    <q-btn color="primary" size="md" :label="`Taille md`"/>
                    <q-btn color="primary" size="lg" :label="`Taille lg`"/>
                    <q-btn color="primary" size="xl" :label="`Taille xl`"/>
                </div>

                <div class="q-pa-md q-gutter-sm">
                    <div>La propriété <strong> loading </strong></div>
                    <q-btn :loading="loading" color="positive" @click="simulateProgress(2)">Positive</q-btn>
                </div>

                <div class="q-pa-md q-gutter-sm">
                    <div>Avec un <strong> tooltip </strong></div>
                    <q-btn color="negative" label="With Tooltip" class="q-mt-md">
                        <q-tooltip class="bg-grey-8" anchor="bottom middle" self="top middle" >Je suis un tooltip</q-tooltip>
                    </q-btn>
                </div>

            </q-card-section>
        </q-card>
    </q-expansion-item>
</template>

<script setup>

import {ref} from "vue";

let loading = ref(false)

function simulateProgress (number) {
    loading.value = true

    setTimeout(() => {
        loading.value = false
    }, 3000)
}

</script>


<style scoped lang="scss">

</style>
