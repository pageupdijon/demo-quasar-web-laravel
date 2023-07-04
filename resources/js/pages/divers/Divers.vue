<template>
    <view-layout>

        <template #header>
            <div class="row flex-center" style="padding-bottom: 20px">
                <div class="header text-grey-8 col-11">Divers</div>
            </div>
        </template>

        <template #section>
            <div class="row flex-center card-container">
                <q-list bordered class="rounded-borders col-9 bg-white">

                    <buttons/>

                    <inputs/>

                    <selects/>

                    <checkboxes/>

                    <cards/>

                    <dialogs/>

                    <pickers/>

                    <notifications/>

                    <loading/>

                    <apex/>

                </q-list>

            </div>

            <div style="min-height: 500px"></div>
        </template>

    </view-layout>
</template>

<script setup>

import ViewLayout from "@/components/ViewLayout.vue";
import Buttons from "@/components/divers/buttons.vue";
import Inputs from "@/components/divers/inputs.vue";
import Selects from "@/components/divers/selects.vue";
import Checkboxes from "@/components/divers/checkboxes.vue";
import Cards from "@/components/divers/cards.vue";
import Dialogs from "@/components/divers/dialogs.vue";
import Pickers from "@/components/divers/pickers.vue";
import Notifications from "@/components/divers/notifications.vue";
import Loading from "@/components/divers/loading.vue";
import Apex from "@/components/divers/apex.vue";
</script>

<style scoped lang="scss">

.header{
    font-size: 30px;
    padding: 20px 0 0 0;
}
</style>
