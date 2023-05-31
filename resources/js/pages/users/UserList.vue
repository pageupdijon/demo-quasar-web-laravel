<template>
    <view-layout>

        <template #header>
            <div class="row flex-center">
                <div class="header text-grey-8 col-11">{{ $t('repositories.title') }}</div>
            </div>
        </template>

        <template #section>
            <div class="row flex-center card-container">
                <q-card class="my-card col-11">
                    <q-card-section>
                        <div>
                            <div class="text-bold text-grey-8">
                                {{ $t('repositories.selected_repository') }}
                            </div>
                        </div>
                    </q-card-section>
                </q-card>
            </div>
        </template>



    </view-layout>
</template>

<script setup>

import ViewLayout from "@/components/ViewLayout.vue";
</script>

<style scoped lang="scss">

.header{
    font-size: 30px;
    padding: 20px 0 0 0;
}

.card-container{
    padding: 20px 0 0 0;
}

.repository-choice{

}

</style>
