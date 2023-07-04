<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Le champ :attribute doit être accepté.',
    'accepted_if' => 'Le champ :attribute doit être accepté quand :other a la valeur :value.',
    'active_url' => 'Le champ :attribute n\'est pas une URL valide.',
    'after' => 'Doit être postérieur au champ :date.',
    'after_or_equal' => 'Doit être postérieur ou égal au champ :date.',
    'alpha' => 'Le champ :attribute doit contenir uniquement des lettres.',
    'alpha_dash' => 'Le champ :attribute doit contenir uniquement des lettres, des chiffres et des tirets.',
    'alpha_num' => 'Le champ :attribute doit contenir uniquement des chiffres et des lettres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Doit être antérieur au champ :date.',
    'before_or_equal' => 'Doit être antérieur ou égal au champ :date.',
    'between' => [
        'array' => 'Entre :min et :max éléments.',
        'file' => 'Entre :min et :max kilo-octets.',
        'numeric' => 'Entre :min et :max.',
        'string' => 'Entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'Confirmation incorrecte.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Doit être une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Doit être une date valide.',
    'declined' => 'Le champ :attribute doit être décliné.',
    'declined_if' => 'Le champ :attribute doit être décliné quand :other a la valeur :value.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Doit contenir :digits chiffre(s).',
    'digits_between' => 'Doit contenir entre :min et :max chiffre(s).',
    'dimensions' => 'La taille de l\'image :attribute n\'est pas conforme.',
    'distinct' => 'Valeur en doublon.',
    'email' => 'Doit être une adresse email.',
    'ends_with' => 'Le champ :attribute doit se terminer par une des valeurs suivantes : :values',
    'enum' => 'Valeur invalide.',
    'exists' => 'Valeur invalide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le tableau :attribute doit contenir plus de :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être supérieure à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure à :value.',
        'string' => 'Le texte :attribute doit contenir plus de :value caractères.',
    ],
    'gte' => [
        'array' => 'Le tableau :attribute doit contenir au moins :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être supérieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :value.',
        'string' => 'Le texte :attribute doit contenir au moins :value caractères.',
    ],
    'image' => 'Doit être une image.',
    'in' => 'Valeur non autorisée.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être un document JSON valide.',
    'lt' => [
        'array' => 'Le tableau :attribute doit contenir moins de :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être inférieure à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être inférieure à :value.',
        'string' => 'Le texte :attribute doit contenir moins de :value caractères.',
    ],
    'lte' => [
        'array' => 'Le tableau :attribute doit contenir au plus :value éléments.',
        'file' => 'La taille du fichier de :attribute doit être inférieure ou égale à :value kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être inférieure ou égale à :value.',
        'string' => 'Le texte :attribute doit contenir au plus :value caractères.',
    ],
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => ':max éléments maximum.',
        'digits' => ':max chiffres maximum',
        'file' => ':max kilo-octets maximum.',
        'numeric' => 'Inférieur à :max.',
        'percentage' => 'La somme des pourcentages doit être inférieure ou égale à 100',
        'percentage_0_100' => 'La somme des pourcentages doit être égale à 0 ou 100',
        'string' => ':max caractères maximum.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'array' => ':min élément(s) minimum.',
        'file' => ':min kilo-octets minimum.',
        'numeric' => 'Supérieure ou égale à :min.',
        'string' => ':min caractères minimum.',
    ],
    'multiple_of' => 'La valeur de :attribute doit être un multiple de :value',
    'not_in' => 'Le champ :attribute sélectionné n\'est pas valide.',
    'not_regex' => 'Le format du champ :attribute n\'est pas valide.',
    'number' => 'Doit être un nombre',
    'numeric' => 'Le champ :attribute doit contenir un nombre.',
    'password' => 'Le mot de passe est incorrect',
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Champ interdit.',
    'prohibited_if' => 'Champ interdit.',
    'prohibited_unless' => 'Champ interdit.',
    'prohibits' => 'Le champ :attribute interdit :other d\'être présent.',
    'regex' => 'Format invalide.',
    'required' => 'Champ requis.',
    'required_array_keys' => 'Entrées requises : :values.',
    'required_if' => 'Champ requis.',
    'required_unless' => 'Champ requis.',
    'required_with' => 'Champ requis.',
    'required_with_all' => 'Champ requis.',
    'required_without' => 'Champ requis.',
    'required_without_all' => 'Champ requis.',
    'same' => 'Doit être identique.',
    'size' => [
        'array' => 'Le tableau :attribute doit contenir :size éléments.',
        'file' => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être :size.',
        'string' => 'Le texte de :attribute doit contenir :size caractères.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer avec une des valeurs suivantes : :values',
    'string' => 'Chaîne de caractères attendue.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'Déjà utilisé.',
    'uploaded' => 'Le fichier du champ :attribute n\'a pu être téléversé.',
    'url' => 'Le format de l\'URL de :attribute n\'est pas valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'current_password' => 'Mot de passe incorrect.',
        'essence_requise' => "Au moins une essence est requise",
        'est_present_obligatoire' => "Obligatoire car propagation essence principale",
        'exist_centre_autorisation' => "Ce centre ne vous est pas autorisé.",
        'format' => "Format invalide.",
        'invalid_content' => "Contenu invalide.",
        'invalid_type_essence' => "Type d'essence non autorisé",
        'must_be_prohibited' => 'Doit être interdit',
        'must_be_empty' => 'Doit être vide',
        'utilisateur_lieu_affectation' => "Un lieu d'affectation maximum.",
        'password_format' => "Doit contenir une majuscule, une minuscule, un chiffre et un caractère spécial.",
        'somme_pourcentage_repartition' => "Doit être égal à 0 ou 100",
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
