<template>
    <q-expansion-item header-class="bg-grey-8 text-white" expand-icon-class="text-white">
        <template v-slot:header>
            <q-item-section avatar>
                <div class="text-uppercase text-bold">Notifications</div>
            </q-item-section>
        </template>

        <q-card>
            <q-card-section>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">

                        <div class="col-12"> Des simples <strong> notifications </strong></div> <br/>
                        <div class="q-gutter-md row">
                            <q-btn  class="col-3" color="positive" @click="showNotif('positive')" label="Positive" />
                            <q-btn  class="col-3" color="negative" @click="showNotif('negative')" label="Negative" />
                            <q-btn  class="col-3" color="warning" @click="showNotif('warning')" label="Warning" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="q-pa-md q-gutter-sm col-12">

                        <div class="col-12"> La <strong> position </strong></div>
                            <div class="q-pa-md q-gutter-y-sm column items-center">
                                <div>
                                    <div class="row q-gutter-sm">
                                        <q-btn round size="sm" color="primary" @click="showPositionNotif('top-left')">
                                            <q-icon name="arrow_back" class="rotate-45" />
                                        </q-btn>
                                        <q-btn round size="sm" color="positive" @click="showPositionNotif('top')">
                                            <q-icon name="arrow_upward" />
                                        </q-btn>
                                        <q-btn round size="sm" color="primary" @click="showPositionNotif('top-right')">
                                            <q-icon name="arrow_upward" class="rotate-45" />
                                        </q-btn>
                                    </div>
                                </div>

                                <div>
                                    <div class="row q-gutter-sm">
                                        <div>
                                            <q-btn round size="sm" color="positive" @click="showPositionNotif('left')">
                                                <q-icon name="arrow_back" />
                                            </q-btn>
                                        </div>
                                        <div>
                                            <q-btn round size="sm" color="negative" @click="showPositionNotif('center')">
                                                <q-icon name="fullscreen_exit" />
                                            </q-btn>
                                        </div>
                                        <div>
                                            <q-btn round size="sm" color="positive" @click="showPositionNotif('right')">
                                                <q-icon name="arrow_forward" />
                                            </q-btn>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row q-gutter-sm">
                                        <div>
                                            <q-btn round size="sm" color="primary" @click="showPositionNotif('bottom-left')">
                                                <q-icon name="arrow_forward" class="rotate-135" />
                                            </q-btn>
                                        </div>
                                        <div>
                                            <q-btn round size="sm" color="positive" @click="showPositionNotif('bottom')">
                                                <q-icon name="arrow_downward" />
                                            </q-btn>
                                        </div>
                                        <div>
                                            <q-btn round size="sm" color="primary" @click="showPositionNotif('bottom-right')">
                                                <q-icon name="arrow_forward" class="rotate-45" />
                                            </q-btn>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>


            </q-card-section>
        </q-card>
    </q-expansion-item>
</template>

<script setup>

import {reactive, ref} from "vue";
import { useQuasar } from 'quasar'
const $q = useQuasar()

function showNotif(type){
    $q.notify({
        type: type,
        message: "Une notification de type " + type,
        position: "top",
        textColor: 'white',
        icon: 'info'
    })
}

const alerts = [
    { color: 'negative', message: 'Woah! Danger! You are getting good at this!', icon: 'report_problem' },
    { message: 'You need to know about this!', icon: 'warning' },
    { message: 'Wow! Nice job!', icon: 'thumb_up' },
    { color: 'teal', message: 'Quasar is cool! Right?', icon: 'tag_faces' },
    { color: 'purple', message: 'Jim just pinged you', avatar: 'https://cdn.quasar.dev/img/boy-avatar.png' },
    { color: 'green-8',multiLine: true, message: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quisquam non ad sit assumenda consequuntur esse inventore officia. Corrupti reiciendis impedit vel, fugit odit quisquam quae porro exercitationem eveniet quasi.' }
]

function showPositionNotif (position) {
    const { color, textColor, multiLine, icon, message, avatar } = alerts[
    Math.floor(Math.random(alerts.length) * 10) % alerts.length
        ]
    const random = Math.random() * 100

    const twoActions = random > 70
    const buttonColor = color ? 'white' : void 0

    $q.notify({
        color,
        textColor,
        icon: random > 30 ? icon : null,
        message,
        position,
        avatar,
        multiLine,
        actions: twoActions
            ? [
                { label: 'Reply', color: buttonColor, handler: () => { /* console.log('wooow') */ } },
                { label: 'Dismiss', color: 'yellow', handler: () => { /* console.log('wooow') */ } }
            ]
            : (random > 40
                    ? [{ label: 'Reply', color: buttonColor, handler: () => { /* console.log('wooow') */ } }]
                    : null
            ),
        timeout: Math.random() * 5000 + 3000
    })
}

</script>
