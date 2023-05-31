import { createApp, h } from 'vue';
import Layout from "./components/app/Layout.vue";
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import {quasarOptions} from '@/config/quasar.js'
import {locales} from "@/langs/locales.js";
import { Quasar } from 'quasar'

createInertiaApp({
    resolve: async name => {
        const page = await resolvePageComponent(`./pages/${name}.vue`, import.meta.glob('./pages/**/*.vue'))
        if (!name.startsWith('auth/')) {
            page.default.layout ??= Layout;
        }
        return page;
    },
    setup({el, App, props, plugin}) {
        return createApp({render: () => h(App, props)})
            .use(plugin)
            .use(locales)
            .use(Quasar, quasarOptions)
            .mount(el)
    },
}).then(r => {});
