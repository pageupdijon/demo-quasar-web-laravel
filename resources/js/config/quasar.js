
import {Notify, Loading} from "quasar";
import '@quasar/extras/fontawesome-v6/fontawesome-v6.css'
import '@quasar/extras/roboto-font/roboto-font.css'
import iconSet from 'quasar/icon-set/fontawesome-v6'
// Import icon libraries
import '@quasar/extras/fontawesome-v6/fontawesome-v6.css'
import '@quasar/extras/material-icons/material-icons.css'
import '@quasar/extras/material-icons-outlined/material-icons-outlined.css'
import '@quasar/extras/material-icons-round/material-icons-round.css'
import '@quasar/extras/material-icons-sharp/material-icons-sharp.css'
import 'quasar/src/css/index.sass'
import fr from 'quasar/lang/fr'
const quasarOptions = {
    lang: fr,
    plugins: {
        Notify,
        Loading
    },
    config: {
        brand: {
            primary: 'rgb(75,92,119)',
            secondary: 'rgba(57,41,64,0.7)',
            accent: '#687E8D',
            dark: 'rgba(57,41,64,0.91)',
            positive: '#568b56',
            negative: 'rgba(160,78,78,0.88)',
            info: 'rgba(75,92,119,0.95)',
            warning: 'rgba(219,104,36,0.89)',
            // ...
        },
        notify: { /* look at QuasarConfOptions from the API card */},
        loading: { /* look at QuasarConfOptions from the API card */},
        iconSet: iconSet
    }
}

export { quasarOptions };
