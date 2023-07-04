import {createI18n} from "vue-i18n";

function loadLocaleMessages() {
    const locales = import.meta.glob('./*.json', {eager: true});
    const messages = {}
    for (const path in locales) {
        if (locales.hasOwnProperty(path)) {
            const matched = path.match(/([A-Za-z0-9-_]+)\.json$/i);
            if (matched && matched.length > 1) {
                const locale = matched[1];
                messages[locale] = locales[path];
            }
        }
    }
    return messages
}

function getLocale() {
    return document.documentElement.lang.substring(0, 2);
}

const locales = createI18n({
    locale: getLocale() || "fr",
    fallbackLocale: import.meta.env.VITE_I18N_FALLBACK_LOCALE || "fr",
    messages: loadLocaleMessages()
});

export {locales};
