<template>
    <view-layout>

        <template #header>
            <div class="row flex-center" style="padding-bottom: 20px">
                <div class="header text-grey-8 col-11">{{ $t('repositories.title') }}</div>
            </div>
        </template>

        <template #section>
            <div class="row flex-center card-container">
                <q-card class="my-card col-11">
                    <q-card-section>
                        <div class="row">
                            <div class="text-bold text-grey-8 col-auto" style="margin-top: 10px">
                                {{ $t('repositories.selected_repository') }}
                            </div>
                            <div class="col-3" style="margin-left: 30px">
                                <repository-selector :repository="repository"/>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 40px">
                            <div class="text-bold text-grey-8 col-auto" style="margin-top: 10px">
                                Filtres
                            </div>
                            <div class="col-3" style="margin-left: 30px">
                                <q-input outlined dense debounce="300" v-model="filter" placeholder="Recherche">
                                    <template v-slot:append>
                                        <q-icon name="search" />
                                    </template>
                                </q-input>
                            </div>
                        </div>

                    </q-card-section>

                    <q-card-section>
                        <q-table
                            v-model:pagination="pagination"
                            title="Utilisateurs"
                            :columns="headers"
                            :rows="items"
                            :loading="loading"
                            :filter="filter"
                            row-key="id"
                            @request="onRequest"
                        >
                            <template v-slot:top-right>
                                <q-btn label="Ajouter un utilisateur" color="green-7" @click="openCreationDialog">
                                    &nbsp;
                                        <q-icon name="add_circle" />
                                </q-btn>
                            </template>

                            <template v-slot:body-cell-actions="props">
                                <q-td :props="props">

                                    <q-btn
                                        color="light-blue-9"
                                        padding="sm"
                                        size="sm"
                                        class="cursor-pointer"
                                        icon="fa-solid fa-pen"
                                        @click="openEditionDialog(props.row)"
                                    >
                                        <q-tooltip class="bg-grey-8" style="font-size: 13px">
                                            Éditer
                                        </q-tooltip>
                                    </q-btn>

                                    &nbsp;
                                    <q-btn
                                        color="red-8"
                                        padding="sm"
                                        size="sm"
                                        class="cursor-pointer"
                                        icon="fa-solid fa-trash-can"
                                        @click="openSuppressionDialog(props.row)"
                                    >
                                        <q-tooltip class="bg-grey-8" style="font-size: 13px">
                                            Supprimer
                                        </q-tooltip>
                                    </q-btn>
                                </q-td>
                            </template>

                        </q-table>

                    </q-card-section>

                </q-card>
            </div>

            <q-dialog v-model="suppressionDialog"
                      persistent
                      transition-show="scale"
                      transition-hide="scale">

                <q-card class="bg-radius report-style" style="width: 800px; height: 200px">

                    <q-card-section class="bg-primary text-white">
                        <div class="text-h6">Suppression de l'utilisateur</div>
                    </q-card-section>


                    <q-card-section class="bg-white">
                        <div>
                            Veuillez confirmer la suppression de l'utilisateur
                            <span class="text-bold"> {{ selectedUserName }}</span>
                        </div>
                    </q-card-section>

                    <q-card-section class="bg-white absolute" style="bottom: 0; right: 10px">
                        <q-btn label="annuler" color="grey-8" @click="closeSuppressionDialog"/>
                        &nbsp;
                        <q-btn label="valider" color="green-8" @click="deleteUser"/>
                    </q-card-section>

                </q-card>

            </q-dialog>

            <q-dialog v-model="editionDialog"
                      persistent
                      transition-show="scale"
                      transition-hide="scale">

                <q-card class="bg-radius report-style" style="width: 800px; height: 300px">

                    <q-card-section class="bg-primary text-white">
                        <div class="text-h6">Édition de l'utilisateur</div>
                    </q-card-section>


                    <q-card-section class="bg-white">
                        <div class="row flex-center q-col-gutter-md">
                            <q-input  v-model="form.name" label="Nom / Prénom" class="col-6" />
                            <q-input  v-model="form.username" label="Pseudo" class="col-6" />
                            <q-input  v-model="form.email" label="Email" class="col-12" />
                        </div>
                    </q-card-section>

                    <q-card-section class="bg-white absolute" style="bottom: 0; right: 10px">
                        <q-btn label="annuler" color="grey-8" @click="closeEditionDialog"/>
                        &nbsp;
                        <q-btn label="valider" color="green-8" @click="editUser"/>
                    </q-card-section>

                </q-card>

            </q-dialog>

            <q-dialog v-model="creationDialog"
                      persistent
                      transition-show="scale"
                      transition-hide="scale">

                <q-card class="bg-radius report-style" style="width: 800px; height: 300px">

                    <q-card-section class="bg-primary text-white">
                        <div class="text-h6">Création d'un l'utilisateur</div>
                    </q-card-section>


                    <q-card-section class="bg-white">
                        <div class="row flex-center q-col-gutter-md">
                            <q-input  v-model="form.name" label="Nom / Prénom" class="col-6" />
                            <q-input  v-model="form.username" label="Pseudo" class="col-6" />
                            <q-input  v-model="form.email" label="Email" class="col-12" />
                        </div>
                    </q-card-section>

                    <q-card-section class="bg-white absolute" style="bottom: 0; right: 10px">
                        <q-btn label="annuler" color="grey-8" @click="closeCreationDialog"/>
                        &nbsp;
                        <q-btn label="valider" color="green-8" @click="createUser"/>
                    </q-card-section>

                </q-card>

            </q-dialog>




        </template>


    </view-layout>
</template>

<script setup>

import ViewLayout from "@/components/ViewLayout.vue";
import RepositorySelector from "@/components/repositories/RepositorySelector.vue";
import {computed, onMounted, ref} from "vue";
import {router} from "@inertiajs/vue3";

let repository = {value: 'users', text :'Utilisateurs'}

let suppressionDialog = ref(false);
let editionDialog = ref(false);
let creationDialog = ref(false);

let form = ref({})

function closeSuppressionDialog(){
    suppressionDialog.value = false;
    clearForm()
    resetSelectedUser();
}
function closeEditionDialog(){
    editionDialog.value = false;
    clearForm()
    resetSelectedUser();
}
function closeCreationDialog(){
    creationDialog.value = false;
    clearForm()
    resetSelectedUser();
}

function resetSelectedUser(){
    selectedUser.value = null;
}

function deleteUser(){
    router.post(`users/${selectedUser.value.id}/delete`, {}, {
        onFinish: () => {
            closeSuppressionDialog()
            clearForm()
        }
    })
}

function editUser(){
    router.post(`users/${selectedUser.value.id}/edit`, form.value, {
        onFinish: () => {
            closeEditionDialog()
            clearForm()
        }
    })
}
function createUser(){
    router.post(`users/create`, form.value, {
        onFinish: () => {
            closeCreationDialog()
            clearForm()
        }
    })
}

let selectedUser = ref(null);

let selectedUserName = computed(() => {
    return selectedUser.value?.name ?? '-'
})

let headers = ref([
    {
        name: 'name',
        align: 'left',
        label: 'Nom / Prénom',
        field: 'name',
        sortable: true,
        style: 'min-width: 200px; max-width:200px'
    },
    {
        name: 'username',
        align: 'left',
        label: 'Pseudo',
        field: 'username',
        sortable: true,
        style: 'min-width: 200px; max-width:200px'
    },
    {
        name: 'email',
        align: 'left',
        label: 'Email',
        field: 'email',
        sortable: true,
        style: 'min-width: 200px; max-width:200px'
    },
    {
        name: 'actions',
        align: 'left',
        label: 'Actions',
        sortable: false,
        style: 'min-width: 300px; max-width:150px'
    },
]);

let props = defineProps({
    datatable: {
        type: Object,
        required: true,
    }
})

let items = computed(() => {
    return props.datatable?.items
})

let total = computed(() => {
    return props.datatable?.total;
})

const filter = ref('')

const loading = ref(false)

const pagination = ref({
    sortBy: 'desc',
    descending: false,
    page: 1,
    rowsPerPage: 10,
    rowsNumber: null
})

function reloadDatatable(){
    startLoading()
    let data = {...pagination.value, ...filter.value}
    router.get('/repositories/users', data, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
        only: ['datatable'],
        onFinish: () => {
            stopLoading()
            pagination.value.rowsNumber = total;
        }
    })
}

onMounted(() => {
    reloadDatatable();
})

function onRequest (props) {
    syncPagination(props)
    reloadDatatable()
}

function startLoading(){
    loading.value = true
}

function stopLoading(){
    loading.value = false
}

function syncPagination(props){
    pagination.value = props.pagination;
}

function openEditionDialog(props){
    selectedUser.value = props
    editionDialog.value = true
    form.value = {...props}
}
function openSuppressionDialog(props){
    selectedUser.value = props
    suppressionDialog.value = true
}

function openCreationDialog(){
    form.value = {}
    selectedUser.value = null
    creationDialog.value = true
}

function clearForm(){
    form.value = {}
}

</script>

<style scoped lang="scss">

.header{
    font-size: 30px;
    padding: 20px 0 0 0;
}

</style>
